<?php

namespace App\Http\Controllers;

use App\Http\Requests\MantouxTest\MantouxTestStoreReportRequest;
use App\Http\Requests\MantouxTest\MantouxTestUpdateReportRequest;
use App\Models\MantouxTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MantouxTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mantouxTests = MantouxTest::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('mantoux-tests.index', [
            'mantouxTests' => $mantouxTests,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::User();
        return view('mantoux-tests.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MantouxTestStoreReportRequest $request)
    {
        //
        // dd($request->all());
        $mantouxTest = MantouxTest::create($request->validated());
        return to_route('mantoux-tests.show', $mantouxTest)->with('status', 'Mantoux Test Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MantouxTest $mantouxTest)
    {
        //
        $user = User::where('id', $mantouxTest->user_id)->first();
        return view('mantoux-tests.show', [
            'mantouxTest' => $mantouxTest,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MantouxTest $mantouxTest)
    {
        //
        $user = User::where('id', $mantouxTest->user_id)->first();
        return view('mantoux-tests.edit', [
            'mantouxTest' => $mantouxTest,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MantouxTestUpdateReportRequest $request, MantouxTest $mantouxTest)
    {
        //
        $mantouxTest->update($request->validated());
        return to_route('mantoux-tests.index', [
            'mantouxTest' => $mantouxTest,
        ])->with('status', 'Mantoux Test data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MantouxTest $mantouxTest)
    {
        //
    }
}
