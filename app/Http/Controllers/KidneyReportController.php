<?php

namespace App\Http\Controllers;

use App\Http\Requests\KidneyReport\KidneyReportStoreRequest;
use App\Http\Requests\KidneyReport\KidneyReportUpdateRequest;
use App\Models\KidneyReport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KidneyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kidneyReports = KidneyReport::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('kidney-reports.index', [
            'kidneyReports' => $kidneyReports,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        return view('kidney-reports.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KidneyReportStoreRequest $request)
    {
        $kidneyReport = KidneyReport::create($request->validated());
        return to_route('kidney-reports.show', $kidneyReport);
    }

    /**
     * Display the specified resource.
     */
    public function show(KidneyReport $kidneyReport)
    {
        $user = User::where('id', $kidneyReport->user_id)->first();
        return view('kidney-reports.show', [
            'kidneyReport' => $kidneyReport,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KidneyReport $kidneyReport)
    {
        $user = User::where('id', $kidneyReport->user_id)->first();
        return view('kidney-reports.edit', [
            'kidneyReport' => $kidneyReport,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KidneyReportUpdateRequest $request, KidneyReport $kidneyReport)
    {
        $kidneyReport->update($request->validated());
        return to_route('kidney-reports.index', [
            'liverReport' => $kidneyReport,
        ])->with('status', 'Kidney Function Test data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
