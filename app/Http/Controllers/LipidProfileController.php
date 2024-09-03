<?php

namespace App\Http\Controllers;

use App\Http\Requests\LipidProfile\LipidProfileStoreRequest;
use App\Http\Requests\LipidProfile\LipidProfileUpdateRequest;
use App\Models\LipidProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LipidProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lipidProfiles = LipidProfile::query()->where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(10);
        return view('lipid-profiles.index', [
            'lipidProfiles' => $lipidProfiles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        return view('lipid-profiles.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LipidProfileStoreRequest $request)
    {
        $lipidProfile = LipidProfile::create($request->validated());
        return to_route('lipid-profiles.show', $lipidProfile)->with('status', 'Lipid Profile Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(LipidProfile $lipidProfile)
    {
        $user = User::where('id', $lipidProfile->user_id)->first();
        return view('lipid-profiles.show', [
            'lipidProfile' => $lipidProfile,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LipidProfile $lipidProfile)
    {
        $user = User::where('id', $lipidProfile->user_id)->first();
        return view('lipid-profiles.edit', [
            'lipidProfile' => $lipidProfile,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LipidProfileUpdateRequest $request, LipidProfile $lipidProfile)
    {
        $lipidProfile->update($request->validated());
        return to_route('lipid-profiles.show', $lipidProfile)->with('status', 'Liver Function Test data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
