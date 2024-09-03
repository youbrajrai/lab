<?php

namespace App\Http\Controllers;

use App\Http\Requests\Other\OtherCreateRequest;
use App\Http\Requests\Other\OtherUpdateRequest;
use App\Models\Biochemistry;
use App\Models\GeneralExam;
use App\Models\Hematology;
use App\Models\Other;
use App\Models\Report;
use App\Models\Serology;
use App\Models\SystemicExam;
use App\Models\Urine;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Report $report)
    {
        $systemic = SystemicExam::where('report_id', $report->id)->first();
        $general = GeneralExam::where('report_id', $report->id)->first();
        $hematology = Hematology::where('report_id', $report->id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other = Other::where('report_id', $report->id)->first();
        return view('other.create', [
            'report'        => $report,
            'general'       => $general,
            'systemic'      => $systemic,
            'hematology'    => $hematology,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,
            'urine'         => $urine,
            'other'         => $other,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OtherCreateRequest $request, Report $report)
    {
        $report->others()->create($request->validated());
        return to_route('reports.index', $report)->with([
            'success' => 'Other Test Results added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        $systemic = SystemicExam::where('report_id', $report->id)->first();
        $general = GeneralExam::where('report_id', $report->id)->first();
        $hematology = Hematology::where('report_id', $report->id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other = Other::where('report_id', $report->id)->first();
        return view('other.edit', [
            'report'        => $report,
            'general'       => $general,
            'systemic'      => $systemic,
            'hematology'    => $hematology,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,
            'urine'         => $urine,
            'other'         => $other,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OtherUpdateRequest $request, Report $report)
    {
        $report->others()->update($request->validated());
        return to_route('reports.index', $report)->with('status', 'Other Test results updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
