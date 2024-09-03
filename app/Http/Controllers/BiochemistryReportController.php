<?php

namespace App\Http\Controllers;

use App\Http\Requests\BiochemistryReport\BiochemistryReportStoreRequest;
use App\Http\Requests\BiochemistryReport\BiochemistryReportUpdateRequest;
use App\Models\BiochemistryReport;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BiochemistryReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $biochemistryReports = BiochemistryReport::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('biochemistry-reports.index', [
            'biochemistryReports' => $biochemistryReports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::User();
        return view('biochemistry-reports.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BiochemistryReportStoreRequest $request)
    {
        //
        $biochemistryReport = BiochemistryReport::create($request->validated());
        return to_route('biochemistry-reports.show', $biochemistryReport)->with('status', 'Biochemistry Report Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BiochemistryReport $biochemistryReport)
    {
        //
        $user = User::where('id', $biochemistryReport->user_id)->first();
        return view('biochemistry-reports.show', [
            'biochemistryReport' => $biochemistryReport,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BiochemistryReport $biochemistryReport)
    {
        //
        $user = User::where('id', $biochemistryReport->user_id)->first();
        return view('biochemistry-reports.edit', [
            'biochemistryReport' => $biochemistryReport,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BiochemistryReportUpdateRequest $request, BiochemistryReport $biochemistryReport)
    {
        //
        $biochemistryReport->update($request->validated());
        return to_route('biochemistry-reports.index', [
            'biochemistryReport' => $biochemistryReport,
        ])->with('status', 'Biochemistry Report data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BiochemistryReport $biochemistryReport)
    {
        //
    }
}
