<?php

namespace App\Http\Controllers;

use App\Http\Requests\BloodReport\BloodReportStoreRequest;
use App\Http\Requests\BloodReport\BloodReportUpdateRequest;
use App\Models\BloodReport;
use App\Models\User;
use Faker\Core\Blood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BloodReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bloodReports = BloodReport::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('blood-reports.index', compact('bloodReports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blood-reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BloodReportStoreRequest $request)
    {
        $bloodReport = BloodReport::create($request->validated());
        return to_route('blood-reports.show', $bloodReport);
    }
    /**
     * Display the specified resource.
     */
    public function show(BloodReport $bloodReport)
    {
        $user = User::where('id', $bloodReport->user_id)->first();
        return view('blood-reports.show', [
            'bloodReport' => $bloodReport,
            'user' => $user,
        ]);
    }

    public function showSerology(BloodReport $bloodReport)
    {
        $user = User::where('id', $bloodReport->user_id)->first();
        return view('blood-reports.serology-report', [
            'bloodReport' => $bloodReport,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BloodReport $bloodReport)
    {
        $user = User::where('id', $bloodReport->user_id)->first();
        return view('blood-reports.edit', [
            'bloodReport' => $bloodReport,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BloodReportUpdateRequest $request, BloodReport $bloodReport)
    {
        $bloodReport->update($request->validated());
        return to_route('blood-reports.index', compact('bloodReport'))->with('status', 'BLood Report updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
