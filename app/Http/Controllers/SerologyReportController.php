<?php

namespace App\Http\Controllers;

use App\Http\Requests\SerologyReport\SerologyReportStoreRequest;
use App\Http\Requests\SerologyReport\SerologyReportUpdateRequest;
use App\Models\SerologyReport;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SerologyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $serologyReports = SerologyReport::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('serology-reports.index', [
            'serologyReports' => $serologyReports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::User();
        return view('serology-reports.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SerologyReportStoreRequest $request)
    {
        //
        // dd($request->all());
        $serologyReport = SerologyReport::create($request->validated());
        return to_route('serology-reports.show', $serologyReport)->with('status', 'Serology Report Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SerologyReport $serologyReport)
    {
        //
        $user = User::where('id', $serologyReport->user_id)->first();
        return view('serology-reports.show', [
            'serologyReport' => $serologyReport,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SerologyReport $serologyReport)
    {
        //
        $user = User::where('id', $serologyReport->user_id)->first();
        return view('serology-reports.edit', [
            'serologyReport' => $serologyReport,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SerologyReportUpdateRequest $request, SerologyReport $serologyReport)
    {
        //
        $serologyReport->update($request->validated());
        return to_route('serology-reports.index', [
            'serologyReport' => $serologyReport,
        ])->with('status', 'Serology Report data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SerologyReport $serologyReport)
    {
        //
    }
}
