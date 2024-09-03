<?php

namespace App\Http\Controllers;

use App\Http\Requests\Referral\ReferralStoreRequest;
use App\Http\Requests\Referral\ReferralUpdateRequest;
use App\Models\Referral;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $referrals = Referral::query()->orderBy('name', 'asc')->get();
        // $reports = Report::query()->orderBy('id', 'desc')->get();

        // $referrals = Referral::query()->orderBy('name', 'asc')->paginate(10);
        // $reports = Report::query()->orderBy('id', 'asc')->paginate(10);

        // $referralCounts = Referral::select('referrals.id', DB::raw('count(*) as count'))
        //     ->join('reports', 'reports.referred_by', '=', 'referrals.id')
        //     ->groupBy('referrals.id')
        //     ->get();

        $referrals = Referral::query()->orderBy('name', 'asc')->paginate(10);
        $reports = Report::select('referred_by')
            ->whereIn('referred_by', $referrals->pluck('id'))
            ->groupBy('referred_by')
            ->selectRaw('count(*) as count')
            ->get();

        $referralCounts = [];
        foreach ($referrals as $referral) {
            $referralCounts[$referral->id] = $reports->where('referred_by', $referral->id)->first()->count ?? 0;
        }

        return view('referrals.index', [
            'referrals' => $referrals,
            'reports' => $reports,
            'referralCounts' => $referralCounts,
            // 'referralCounts' => $referralCounts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::User();
        return view('referrals.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReferralStoreRequest $request)
    {
        //
        $referral = Referral::create($request->validated());
        return to_route('referrals.index')->with('status', 'Referral Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Referral $referral)
    {
        //
        // dd($referral);

        return view('referrals.show', [
            'referral' => $referral,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Referral $referral)
    {
        //
        $user = Auth::User();
        return view('referrals.edit', [
            'user' => $user,
            'referral' => $referral,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReferralUpdateRequest $request, Referral $referral)
    {
        //
        $referral->update($request->validated());
        return to_route('referrals.index', $referral)->with('status', 'Referral Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Referral $referral)
    {
        //
    }
}
