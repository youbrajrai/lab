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
use App\Models\Referral;
use Monarobase\CountryList\CountryListFacade;
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
            'report' => $report,
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
        $availableTests = [
            'hematology' => 'Hematology',
            'biochemistry' => 'Biochemistry',
            'serology' => 'Serology',
            'urine' => 'Urine',
            'other' => 'Other',
        ];

        $report = Report::findOrFail($report->id);
        $countries = CountryListFacade::getList('en');
        $selectedTests = json_decode($report->forms);
        $referrals = Referral::query()->orderBy('name', 'asc')->get();

        $testData = [];

        foreach ($selectedTests as $test) {
            if (array_key_exists($test, $availableTests)) {
                $modelName = 'App\\Models\\' . ucfirst($test);
                $testData[$test] = $modelName::where('report_id', $report->id)->first();
            }
        }

        return view('hematology.create', [
            'report' => $report,
            'selectedTests' => $selectedTests,
            'availableTests' => $availableTests,
            'testData' => $testData,
            'countries' => $countries,
            'referrals' => $referrals
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HematologyCreateRequest $request, Report $report)
    {
        $report->hematologies()->create($request->validated());
        return to_route('test-report.edit', $report)->with([
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
        $availableTests = [
            'hematology' => 'Hematology',
            'biochemistry' => 'Biochemistry',
            'serology' => 'Serology',
            'urine' => 'Urine',
            'other' => 'Other',
        ];

        $report = Report::findOrFail($report->id);
        $countries = CountryListFacade::getList('en');
        $selectedTests = json_decode($report->forms);
        $referrals = Referral::query()->orderBy('name', 'asc')->get();

        $testData = [];

        foreach ($selectedTests as $test) {
            if (array_key_exists($test, $availableTests)) {
                $modelName = 'App\\Models\\' . ucfirst($test);
                $testData[$test] = $modelName::where('report_id', $report->id)->first();
            }
        }

        return view('hematology.edit', [
            'report' => $report,
            'selectedTests' => $selectedTests,
            'availableTests' => $availableTests,
            'testData' => $testData,
            'countries' => $countries,
            'referrals' => $referrals
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
