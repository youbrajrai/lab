<?php

namespace App\Http\Controllers;

use App\Http\Requests\Report\ReportCreateRequest;
use App\Http\Requests\Report\ReportUpdateRequest;
use App\Http\Requests\Report\SystemicCreateRequest;
use App\Models\Biochemistry;
use App\Models\GeneralExam;
use App\Models\Hematology;
use App\Models\Other;
use App\Models\Report;
use App\Models\Serology;
use App\Models\SystemicExam;
use App\Models\Urine;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monarobase\CountryList\CountryListFacade;
use Psy\Output\Theme;
use App\Models\Referral;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::query()->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(20);
        return view('reports.index', [
            'reports' => $reports,
        ]);
    }

    public function liverList()
    {
        $reports = Report::query()->paginate(20);
        return view('reports.liver-list', [
            'reports' => $reports,
        ]);
    }

    public function lipidList()
    {
        $reports = Report::query()->paginate(20);
        return view('reports.lipid-list', [
            'reports' => $reports,
        ]);
    }
    public function bloodReports()
    {
        $reports = Report::query()->paginate(20);
        return view('reports.blood-list', [
            'reports' => $reports,
        ]);
    }

    public function kidneyReports()
    {
        $reports = Report::query()->paginate(20);
        return view('reports.kidney-list', [
            'reports' => $reports,
        ]);
    }

    public function urineReports()
    {
        $reports = Report::query()->paginate(20);
        return view('reports.urine-list', [
            'reports' => $reports,
        ]);
    }

    public function biochemistryTest()
    {
        $reports = Report::query()->paginate(20);
        return view('reports.biochemistry-list', [
            'reports' => $reports,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Report $report)
    {

        $countries = CountryListFacade::getList('en');
        $districts = [
            'Achham', 'Arghakhanchi', 'Baglung', 'Baitadi', 'Bajhang', 'Bajura', 'Banke', 'Bara', 'Bardiya', 'Bhaktapur',
            'Bhojpur', 'Chitwan', 'Dadeldhura', 'Dailekh', 'Dang', 'Darchula', 'Dhading', 'Dhankuta', 'Dhanusha', 'Dolakha',
            'Dolpa', 'Doti', 'Rukum East', 'Gorkha', 'Gulmi', 'Humla', 'Ilam', 'Jajarkot', 'Jhapa', 'Jumla',
            'Kailali', 'Kalikot', 'Kanchanpur', 'Kapilvastu', 'Kaski', 'Kathmandu', 'Kavrepalanchok', 'Khotang', 'Lalitpur', 'Lamjung',
            'Mahottari', 'Makwanpur', 'Manang', 'Morang', 'Mugu', 'Mustang', 'Myagdi', 'Nawalparasi', 'Parasi', 'Nuwakot',
            'Okhaldhunga', 'Palpa', 'Panchthar', 'Parbhat', 'Parsa', 'Pyuthan', 'Ramechhap', 'Rasuwa', 'Rautahat', 'Rolpa',
            'Rupandehi', 'Salyan', 'Sankhuwasabha', 'Saptari', 'Sarlahi', 'Sindhuli', 'Sindhupalchowk', 'Siraha', 'Solukhumbu', 'Sunsari',
            'Surkhet', 'Syangja', 'Tanahun', 'Taplejung', 'Terhrathum', 'Udayapur', 'Rukum West'
        ];
        
        $referrals = Referral::query()->orderBy('name', 'asc')->get();

        return view('reports.create', [
            'countries'     => $countries,
            'districts'     => $districts,
            'report'        => $report,
            'referrals'     => $referrals
        ]);
    }
    public function createBioIndividual()
    {

        return view('reports.create-individual');
    }
    public function storeBioIndividual(Request $request)
    {
        $validated = $request->validate([
            'name'  => ['required', 'max:255'],
            'age'   =>  ['required'],
            'sex'   =>  ['required'],
            'marital_status' =>  ['required'],
            'medical_examination_date' =>  ['required'],
            'nationality'  =>  ['required'],
            'user_id'       =>  ['required'],
        ]);
        $report = Report::create($validated);
        return to_route('biochemistry.create', $report)->with('status', 'Applicant Information added successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReportCreateRequest $request)
    {
        $base64Image = $request->image;
        $report = Report::create($request->validated());
        if ($base64Image) {
            $report->addMediaFromBase64($base64Image)->usingFileName(uniqid() . '.jpeg')->toMediaCollection();
        }
        return to_route('reports.preliminary', $report)->with([
            'success' => 'General Examination Results added successfully'
        ]);
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
        $other  = Other::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        return view('reports.show', [
            'user' => $user,
            'report' => $report,
            'general' => $general,
            'systemic' => $systemic,
            'hematology' => $hematology,
            'biochemistry' => $biochemistry,
            'serology'  => $serology,
            'urine' => $urine,
            'other' => $other,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        $countries = CountryListFacade::getList('en');
        $systemic = SystemicExam::where('report_id', $report->id)->first();
        $general = GeneralExam::where('report_id', $report->id)->first();
        $hematology = Hematology::where('report_id', $report->id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other = Other::where('report_id', $report->id)->first();
        $referrals = Referral::query()->orderBy('name', 'asc')->get();
        return view('reports.edit', [
            'report' => $report,
            'general' => $general,
            'systemic' => $systemic,
            'hematology' => $hematology,
            'biochemistry' => $biochemistry,
            'serology'  => $serology,
            'urine' => $urine,
            'other' => $other,
            'countries' => $countries,
            'referrals' => $referrals
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReportUpdateRequest $request, Report $report)
    {
        $general = GeneralExam::where('report_id', $report->id)->first();
        $report->update($request->validated());
        if ($general) {
            return to_route('reports.generals.edit', [
                'report' => $report,
                'general' => $general,
            ])->with('status', 'Applicant Information updated successfully');
        } else {
            return to_route('reports.generals.create', $report)->with('status', 'Applicant Information updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function pathology(Report $report)
    {
        $general = GeneralExam::where('report_id', $report->id)->first();
        $hematology = Hematology::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other  = Other::where('report_id', $report->id)->first();
        return view('reports.pathology', [
            'report'        => $report,
            'hematology'    => $hematology,
            'general'       => $general,
            'user'          => $user,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,
            'urine'         => $urine,
            'other'         => $other,
        ]);
    }
    public function hematology(Report $report)
    {
        $general = GeneralExam::where('report_id', $report->id)->first();
        $hematology = Hematology::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other  = Other::where('report_id', $report->id)->first();
        return view('reports.hematology', [
            'report'        => $report,
            'hematology'    => $hematology,
            'general'       => $general,
            'user'          => $user,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,
            'urine'         => $urine,
            'other'         => $other,
        ]);
    }
    public function liver(Report $report)
    {
        $hematology = Hematology::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other  = Other::where('report_id', $report->id)->first();
        return view('reports.liver', [
            'report'        => $report,
            'hematology'    => $hematology,
            'user'          => $user,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,
            'urine'         => $urine,
            'other'         => $other,
        ]);
    }
    public function kidney(Report $report)
    {
        $hematology = Hematology::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other  = Other::where('report_id', $report->id)->first();
        return view('reports.kidney', [
            'report'        => $report,
            'hematology'    => $hematology,
            'user'          => $user,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,
            'urine'         => $urine,
            'other'         => $other,
        ]);
    }
    public function lipid(Report $report)
    {
        $hematology = Hematology::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other  = Other::where('report_id', $report->id)->first();
        return view('reports.lipid', [
            'report'        => $report,
            'hematology'    => $hematology,
            'user'          => $user,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,
            'urine'         => $urine,
            'other'         => $other,
        ]);
    }
    public function urine(Report $report)
    {
        $hematology = Hematology::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other  = Other::where('report_id', $report->id)->first();
        return view('reports.urine', [
            'report'        => $report,
            'hematology'    => $hematology,
            'user'          => $user,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,
            'urine'         => $urine,
            'other'         => $other,
        ]);
    }
    public function biochemistry(Report $report)
    {
        $hematology = Hematology::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();
        $urine = Urine::where('report_id', $report->id)->first();
        $other  = Other::where('report_id', $report->id)->first();
        return view('reports.biochemistry', [
            'report'        => $report,
            'hematology'    => $hematology,
            'user'          => $user,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,
            'urine'         => $urine,
            'other'         => $other,
        ]);
    }
    /**
     * Display the preliminary report for medical checkup
     */
    public function preliminaryReport(Report $report)
    {
        $general = GeneralExam::where('report_id', $report->id)->first();
        $user = User::where('id', $report->user_id)->first();
        return view('reports.pre-report', [
            'user' => $user,
            'report' => $report,
            'general' => $general,
        ]);
    }
}
