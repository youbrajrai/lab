<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralExam\GeneralCreateRequest;
use App\Http\Requests\GeneralExam\GeneralUpdateRequest;
use App\Models\Biochemistry;
use App\Models\GeneralExam;
use App\Models\Hematology;
use App\Models\Other;
use App\Models\Report;
use App\Models\Serology;
use App\Models\SystemicExam;
use App\Models\Urine;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Report $report)
    {
        return view('general.index', ['report' => $report]);
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
        return view('general.create', [
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
    public function store(GeneralCreateRequest $request, Report $report)
    {
        $report->generalExams()->create($request->validated());
        //        $report->generalExams()->create($request->validated());
        return to_route('systemics.create', $report)->with([
            'success' => 'General Examination Results added successfully'
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
        //$countries = CountryListFacade::getList('en');
        $systemic = SystemicExam::where('report_id', $report->id)->first();
        $general = GeneralExam::where('report_id', $report->id)->first();
        $hematology = Hematology::where('report_id', $report->id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other = Other::where('report_id', $report->id)->first();
        return view('general.edit', [
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
    public function update(GeneralUpdateRequest $request, Report $report)
    {
        $systemic = SystemicExam::where('report_id', $report->id)->first();
        $report->generalExams()->update($request->validated());
        if ($systemic) {
            return to_route('systemics.edit', [
                'report' => $report,
                'systemic' => $systemic,
            ])->with('status', 'General Examination results updated successfully');
        } else {
            return to_route('systemics.create', $report)->with('status', 'General Examination results updated successfully');
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
