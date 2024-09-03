<?php

namespace App\Http\Controllers;

use App\Models\Biochemistry;
use App\Models\GeneralExam;
use App\Models\Hematology;
use App\Models\Other;
use App\Models\Report;
use App\Models\Serology;
use App\Models\SystemicExam;
use App\Models\Urine;
use Illuminate\Http\Request;

use App\Http\Requests\Urine\UrineCreateRequest;
use App\Http\Requests\Urine\UrineUpdateRequest;

class UrineController extends Controller
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
        return view('urine.create', [
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
    public function store(UrineCreateRequest $request, Report $report)
    {
        $report->urines()->create($request->validated());
        return to_route('others.create', $report)->with([
            'success' => 'Urine Test Results added successfully'
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
        return view('urine.edit', [
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
    public function update(UrineUpdateRequest $request, Report $report)
    {
        $report->urines()->update($request->validated());
        $other = Other::where('report_id', $report->id)->first();
        if ($other) {
            return to_route('others.edit', [
                'report'    => $report,
                'other'     => $other,
            ])->with('status', 'Urine Test results updated successfully');
        } else {
            return to_route('others.create', $report)->with('status', 'Urine Test results updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
