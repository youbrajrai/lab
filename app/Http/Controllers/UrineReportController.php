<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UrineReport;
use App\Models\User;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Urine\UrineReportStoreRequest;
use App\Http\Requests\Urine\UrineReportUpdateRequest;

class UrineReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $urineReports = UrineReport::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('urine-reports.index', [
            'urineReports' => $urineReports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Report $report)
    {
        //
        $user = Auth::User();
        return view('urine-reports.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UrineReportStoreRequest $request)
    {
        //
        $urineReport = UrineReport::create($request->validated());
        // dd($urineReport);
        return to_route('urine-reports.show', $urineReport)->with('status', 'Urine Test Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(UrineReport $urineReport)
    {
        //
        // dd($urineReport);
        $user = User::where('id', $urineReport->user_id)->first();
        return view('urine-reports.show', [
            'urineReport' => $urineReport,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UrineReport $urineReport)
    {
        //
        // dd($urineReport);
        $user = User::where('id', $urineReport->user_id)->first();
        return view('urine-reports.edit', [
            'urineReport' => $urineReport,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UrineReportUpdateRequest $request, UrineReport $urineReport)
    {
        //
        $urineReport->update($request->validated());
        return to_route('urine-reports.index', [
            'urineReport' => $urineReport,
        ])->with('status', 'Urine Test data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
