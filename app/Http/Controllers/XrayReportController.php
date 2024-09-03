<?php

namespace App\Http\Controllers;

use App\Http\Requests\XrayReport\XrayReportStoreRequest;
use App\Http\Requests\XrayReport\XrayReportUpdateRequest;
use App\Models\XrayReport;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class XrayReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $xrayReports = XrayReport::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('xray-reports.index', [
            'xrayReports' => $xrayReports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::User();
        return view('xray-reports.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(XrayReportStoreRequest $request)
    {
        //
        // dd($request->all());
        $xrayReport = XrayReport::create($request->validated());
        return to_route('xray-reports.show', $xrayReport)->with('status', 'Xray Report Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(XrayReport $xrayReport)
    {
        //
        $user = User::where('id', $xrayReport->user_id)->first();
        return view('xray-reports.show', [
            'xrayReport' => $xrayReport,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(XrayReport $xrayReport)
    {
        //
        // dd($xrayReport);
        $user = User::where('id', $xrayReport->user_id)->first();
        return view('xray-reports.edit', [
            'xrayReport' => $xrayReport,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(XrayReportUpdateRequest $request, XrayReport $xrayReport)
    {
        //
        $xrayReport->update($request->validated());
        return to_route('xray-reports.index', [
            'xrayReport' => $xrayReport,
        ])->with('status', 'Xray Report Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(XrayReport $xrayReport)
    {
        //
    }
}
