<?php

namespace App\Http\Controllers;

use App\Http\Requests\Report\ReportUpdateRequest;
use App\Models\User;
use App\Models\Other;
use App\Models\Urine;
use App\Models\Report;
use App\Models\Referral;
use App\Models\Serology;
use App\Models\Hematology;
use App\Models\GeneralExam;
use App\Models\MantouxTest;
use App\Models\Biochemistry;
use App\Models\SystemicExam;
use Illuminate\Http\Request;
use App\Models\BiochemistryReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Monarobase\CountryList\CountryListFacade;
use App\Http\Requests\Report\ReportCreateRequest;
use App\Http\Requests\BiochemistryReport\BiochemistryReportStoreRequest;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::query()->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(20);

        return view('test-report.index', [
            'reports' => $reports,
        ]);
    }
    public function processTests(Request $request)
    {
        $testData = $request->all();

        \Log::info('Received test data: ', $testData);

        if (isset($testData['test_type'])) {
            foreach ($testData['test_type'] as $type) {
                \Log::info('Processing test type: ', ['type' => $type]);
                switch ($type) {
                    case 'biochemistry':
                        if (isset($testData['biochemistry'])) {
                            $biochemistryData = $testData['biochemistry'];
                            $biochemistryData['user_id'] = $testData['user_id'];
                            $this->handleBiochemistryTest($biochemistryData);
                        } else {
                            \Log::warning('Biochemistry data not found in request.');
                        }
                        break;

                    case 'hematology':
                        if (isset($testData['hematology'])) {
                            $hematologyData = $testData['hematology'];
                            $hematologyData['user_id'] = $testData['user_id'];
                            $this->handleHematologyTest($hematologyData);
                        } else {
                            \Log::warning('Hematology data not found in request.');
                        }
                        break;

                    // Add cases for other test types
                    default:
                        \Log::warning('Unknown test type: ', ['type' => $type]);
                        break;
                }
            }
        } else {
            \Log::warning('No test types found in request.');
        }

        return redirect()->back()->with('success', 'Tests saved successfully.');
    }


    public function handleBiochemistryTest(array $biochemistryData)
    {
        \Log::info('Handling biochemistry data: ', $biochemistryData);

        $validatedData = Validator::make($biochemistryData, [
            'user_id' => ['required', 'numeric'],
            'blood_sugar_f' => ['required', 'numeric'],
            'blood_sugar_pp' => ['required', 'numeric'],
            'blood_sugar_r' => ['required', 'numeric'],
            'hba1c' => ['required', 'numeric'],
            'blood_urea' => ['required', 'numeric'],
            's_ceratinine' => ['required', 'numeric'],
        ])->validate();

        $biochemistryReport = BiochemistryReport::create($validatedData);

        return redirect()->back()->with('status', 'Biochemistry Report Data added successfully');
    }

    public function handleHematologyTest(array $hematologyData)
    {
        \Log::info('Handling hematology data: ', $hematologyData);

        $validatedData = Validator::make($hematologyData, [
            'wbc' => ['required', 'numeric'],
            'hemoglobin' => ['required', 'numeric'],
            'platelets' => ['required', 'numeric'],
            'neutrophils' => ['required', 'numeric'],
            'lymphocytes' => ['required', 'numeric'],
            'eosinophils' => ['required', 'numeric'],
            'monocytes' => ['required', 'numeric'],
            'basophils' => ['required', 'numeric'],
        ])->validate();

        $hematologyReport = Hematology::create($validatedData);

        return redirect()->back()->with('status', 'Hematology Report Data added successfully');

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Report $report)
    {

        $countries = CountryListFacade::getList('en');

        $districts = [
            'Achham',
            'Arghakhanchi',
            'Baglung',
            'Baitadi',
            'Bajhang',
            'Bajura',
            'Banke',
            'Bara',
            'Bardiya',
            'Bhaktapur',
            'Bhojpur',
            'Chitwan',
            'Dadeldhura',
            'Dailekh',
            'Dang',
            'Darchula',
            'Dhading',
            'Dhankuta',
            'Dhanusha',
            'Dolakha',
            'Dolpa',
            'Doti',
            'Rukum East',
            'Gorkha',
            'Gulmi',
            'Humla',
            'Ilam',
            'Jajarkot',
            'Jhapa',
            'Jumla',
            'Kailali',
            'Kalikot',
            'Kanchanpur',
            'Kapilvastu',
            'Kaski',
            'Kathmandu',
            'Kavrepalanchok',
            'Khotang',
            'Lalitpur',
            'Lamjung',
            'Mahottari',
            'Makwanpur',
            'Manang',
            'Morang',
            'Mugu',
            'Mustang',
            'Myagdi',
            'Nawalparasi',
            'Parasi',
            'Nuwakot',
            'Okhaldhunga',
            'Palpa',
            'Panchthar',
            'Parbhat',
            'Parsa',
            'Pyuthan',
            'Ramechhap',
            'Rasuwa',
            'Rautahat',
            'Rolpa',
            'Rupandehi',
            'Salyan',
            'Sankhuwasabha',
            'Saptari',
            'Sarlahi',
            'Sindhuli',
            'Sindhupalchowk',
            'Siraha',
            'Solukhumbu',
            'Sunsari',
            'Surkhet',
            'Syangja',
            'Tanahun',
            'Taplejung',
            'Terhrathum',
            'Udayapur',
            'Rukum West'
        ];
        $availableTests = [
            'hematology' => 'Hematology',
            'biochemistry' => 'Biochemistry',
            'serology' => 'Serology',
            'urine' => 'Urine',
            'other' => 'Other',
            // 'liver' => 'Liver',
            // 'kidney' => 'Kidney',
            // 'lipid' => 'Lipid',
            // 'stool' => 'Stool',
            // 'mantoux' => 'Mantoux',
            // 'xray' => 'X-Ray',
            // 'other' => 'Other'
        ];


        $referrals = Referral::query()->orderBy('name', 'asc')->get();

        return view('test-report.create', [
            'countries' => $countries,
            'districts' => $districts,
            'report' => $report,
            'referrals' => $referrals,
            'availableTests' => $availableTests
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReportCreateRequest $request)
    {
        $base64Image = $request->image;
        $selectedTests = $request->input('forms');
        $validatedData = $request->validated();
        $validatedData['forms'] = json_encode($selectedTests);
        $report = Report::create($validatedData);
        if ($base64Image) {
            $report->addMediaFromBase64($base64Image)->usingFileName(uniqid() . '.jpeg')->toMediaCollection();
        }
        $countries = CountryListFacade::getList('en');
        return redirect(route('test-report.edit', $report->id));
        // return to_route('reports.generals.create', $report)->with('status', 'Applicant Information added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {

        $general = GeneralExam::where('report_id', $report->id)->first();
        $systemic = SystemicExam::where('report_id', $report->id)->first();
        $hematology = Hematology::where('report_id', $report->id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other = Other::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        return view('reports.show', [
            'user' => $user,
            'report' => $report,
            'general' => $general,
            'systemic' => $systemic,
            'hematology' => $hematology,
            'biochemistry' => $biochemistry,
            'serology' => $serology,
            'urine' => $urine,
            'other' => $other,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $availableTests = [
            'hematology' => 'Hematology',
            'biochemistry' => 'Biochemistry',
            'serology' => 'Serology',
            'urine' => 'Urine',
            'other' => 'Other',
        ];

        $report = Report::findOrFail($id);
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

        return view('test-report.edit', [
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
    public function update(ReportUpdateRequest $request, string $id)
    {
        $report = Report::findOrFail($id);

        $base64Image = $request->image;
        $selectedTests = $request->input('forms');
        $validatedData = $request->validated();
        $validatedData['forms'] = json_encode($selectedTests);

        $report->update($validatedData);

        if ($base64Image) {
            // Clear existing media if any
            $report->clearMediaCollection();
            // Add new image
            $report->addMediaFromBase64($base64Image)->usingFileName(uniqid() . '.jpeg')->toMediaCollection();
        }

        return redirect(route('test-report.edit', $report->id))->with('status', 'Report updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }




}
