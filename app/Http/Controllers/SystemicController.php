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

use App\Http\Requests\Systematic\SystemicCreateRequest;
use App\Http\Requests\Systematic\SystemicUpdateRequest;

class SystemicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Report $report)
    {
        $systemics = SystemicExam::query()->paginate();
        $general = GeneralExam::where('report_id', $report->id)->first();
        $hematology = Hematology::where('report_id', $report->id)->first();
        return view('systemic.index', [
            'systemics' => $systemics,
            'report'    => $report,
            'general'  => $general,
            'hematology' => $hematology,
        ]);
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
        return view('systemic.create', [
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
    public function store(SystemicCreateRequest $request, Report $report)
    {
        $report->systemicExams()->create($request->validated());
        return to_route('hematologies.create', $report)->with([
            'success' => 'Systemic Examination Results added successfully'
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
        return view('systemic.edit', [
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
    public function update(SystemicUpdateRequest $request, Report $report)
    {
        $report->systemicExams()->update($request->validated());
        $hematology = Hematology::where('report_id', $report->id)->first();
        if ($hematology)
            return to_route('hematologies.edit', ['report' => $report, 'hematology' => $hematology])->with('status', 'Systemic Examination results updated successfully');
        else
            return to_route('hematologies.create', $report)->with('status', 'Systemic Examination results updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
