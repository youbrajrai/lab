<?php

namespace App\Http\Controllers;

use App\Http\Requests\CannabiesPregnancyTest\CannabiesPregnancyTestStoreRequest;
use App\Http\Requests\CannabiesPregnancyTest\CannabiesPregnancyTestUpdateRequest;
use App\Models\CannabiesPregnancyTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CannabiesPregnancyTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cannabiesPregnancyTests = CannabiesPregnancyTest::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('cannabies-pregnancy-tests.index', [
            'cannabiesPregnancyTests' => $cannabiesPregnancyTests,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::User();
        return view('cannabies-pregnancy-tests.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CannabiesPregnancyTestStoreRequest $request)
    {
        //
        $cannabiesPregnancyTest = CannabiesPregnancyTest::create($request->validated());
        return to_route('cannabies-pregnancy-tests.show', $cannabiesPregnancyTest)->with('status', 'Cannabies Pregnancy Test Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(CannabiesPregnancyTest $cannabiesPregnancyTest)
    {
        //
        $user = User::where('id', $cannabiesPregnancyTest->user_id)->first();
        return view('cannabies-pregnancy-tests.show', [
            'cannabiesPregnancyTest' => $cannabiesPregnancyTest,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CannabiesPregnancyTest $cannabiesPregnancyTest)
    {
        //
        $user = User::where('id', $cannabiesPregnancyTest->user_id)->first();
        return view('cannabies-pregnancy-tests.edit', [
            'cannabiesPregnancyTest' => $cannabiesPregnancyTest,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CannabiesPregnancyTestUpdateRequest $request, CannabiesPregnancyTest $cannabiesPregnancyTest)
    {
        //
        $cannabiesPregnancyTest->update($request->validated());
        return to_route('cannabies-pregnancy-tests.index', $cannabiesPregnancyTest)->with('status', 'Cannabies Pregnancy Test Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CannabiesPregnancyTest $cannabiesPregnancyTest)
    {
        //
    }
}
