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

use App\Http\Requests\Hematology\HematologyCreateRequest;
use App\Http\Requests\Hematology\HematologyUpdateRequest;

class HematologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Report $report)
    {
        $hematologies = Hematology::query()->paginate();
        $systemic = SystemicExam::where('report_id', $report->id)->first();
        $general = GeneralExam::where('report_id', $report->id)->first();
        return view('hematology.index', [
            'report'    => $report,
            'hematologies' => $hematologies,
            'systemic' => $systemic,
            'general' => $general,
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
        return view('hematology.create', [
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
    public function store(HematologyCreateRequest $request, Report $report)
    {
        $report->hematologies()->create($request->validated());
        return to_route('biochemistries.create', $report)->with([
            'success' => 'Hematology Results added successfully'
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
        return view('hematology.edit', [
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
    public function update(HematologyUpdateRequest $request, Report $report)
    {
        //$hematologies = Hematology::query()->paginate();
        $report->hematologies()->update($request->validated());
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        if ($biochemistry) {
            return to_route('biochemistries.edit', ['report' => $report, 'biochemistry' => $biochemistry])->with('status', 'Hematology reports updated successfully');
        } else {
            return to_route('biochemistries.create', $report)->with('status', 'Hematology reports updated successfully');
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
