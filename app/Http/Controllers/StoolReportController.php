<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoolReport\StoolReportStoreRequest;
use App\Http\Requests\StoolReport\StoolReportUpdateRequest;
use App\Models\StoolReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class StoolReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stoolReports = StoolReport::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('stool-reports.index', [
            'stoolReports' => $stoolReports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::User();
        return view('stool-reports.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoolReportStoreRequest $request)
    {
        //
        $stoolReport = StoolReport::create($request->validated());
        return to_route('stool-reports.show', $stoolReport)->with('status', 'Stool Test Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(StoolReport $stoolReport)
    {
        //
        $user = User::where('id', $stoolReport->user_id)->first();
        return view('stool-reports.show', [
            'stoolReport' => $stoolReport,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StoolReport $stoolReport)
    {
        //
        $user = User::where('id', $stoolReport->user_id)->first();
        return view('stool-reports.edit', [
            'stoolReport' => $stoolReport,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoolReportUpdateRequest $request, StoolReport $stoolReport)
    {
        //
        $stoolReport->update($request->validated());
        return to_route('stool-reports.index', [
            'stoolReport' => $stoolReport,
        ])->with('status', 'Stool Test Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StoolReport $stoolReport)
    {
        //
    }
}
