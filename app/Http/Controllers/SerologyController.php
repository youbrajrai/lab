<?php

namespace App\Http\Controllers;

use App\Http\Requests\Serology\SerologyCreateRequest;
use App\Http\Requests\Serology\SerologyUpdateRequest;
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

class SerologyController extends Controller
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

        return view('serology.create', [
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
    public function store(SerologyCreateRequest $request, Report $report)
    {
        $report->serologies()->create($request->validated());
        return to_route('test-report.edit', $report)->with([
            'success' => 'serology Results added successfully'
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

        return view('serology.edit', [
            'report' => $report,
            'selectedTests' => $selectedTests,
            'availableTests' => $availableTests,
            'testData' => $testData,
            'countries' => $countries,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SerologyUpdateRequest $request, Report $report)
    {
        $report->serologies()->update($request->validated());
        return to_route('test-report.edit', $report)->with([
            'success' => 'Serology Results added successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
