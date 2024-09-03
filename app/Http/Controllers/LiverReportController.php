<?php

namespace App\Http\Controllers;

use App\Http\Requests\LiverReport\LiverReportStoreRequest;
use App\Http\Requests\LiverReport\LiverReportUpdateRequest;
use App\Models\LiverReport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LiverReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liverReports = LiverReport::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('liver-reports.index', [
            'liverReports' => $liverReports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Auth::User();
        return view('liver-reports.create',[
            'user'=>$user,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LiverReportStoreRequest $request)
    {
        //dd($request->all());
        $liverReport = LiverReport::create($request->validated());
        return to_route('liver-reports.show', $liverReport)->with('status', 'Liver Function Test Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(LiverReport $liverReport)
    {
        $user = User::where('id', $liverReport->user_id)->first();
        return view('liver-reports.show', [
            'liverReport' => $liverReport,
            'user' => $user
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LiverReport $liverReport)
    {
        $user = User::where('id', $liverReport->user_id)->first();
        return view('liver-reports.edit', [
            'liverReport' => $liverReport,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LiverReportUpdateRequest $request, LiverReport $liverReport)
    {
        $liverReport->update($request->validated());
        return to_route('liver-reports.index', [
            'liverReport' => $liverReport,
        ])->with('status', 'Liver Function Test data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
