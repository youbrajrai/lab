<?php

namespace App\Http\Controllers;

use App\Models\GeneralExam;
use App\Models\Hematology;
use App\Models\Report;
use App\Models\SystemicExam;
use App\Models\Biochemistry;
use App\Models\Serology;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Report $report)
    {
        $reports = Report::query()->where('user_id', Auth::User()->id)->orderBy('id', 'desc')->paginate(4);
        $user  = User::where('id', $report->user_id)->first();
        $hematology = Hematology::where('report_id', $report->id)->first();
        $systemic = SystemicExam::where('report_id', $report->id)->first();
        $general = GeneralExam::where('report_id', $report->id)->first();
        $biochemistry = Biochemistry::where('report_id', $report->id)->first();
        $serology = Serology::where('report_id', $report->id)->first();

        return view('home', [
            'general'       => $general,
            'report'        => $report,
            'hematology'    => $hematology,
            'systemic'      => $systemic,
            'user'          => $user,
            'reports'       => $reports,
            'biochemistry'  => $biochemistry,
            'serology'      => $serology,

        ]);
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
