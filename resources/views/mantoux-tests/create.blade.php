@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Create Mantoux Test
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Mantoux Test</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="kt_app_content" class="app-content flex-column-fluid pb-0">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="row g-5 g-xl-10">
                        <div class="col-xxl-12">
                            <div class="card card-flush mb-8">
                                <div class="card-body px-20 py-10">

                                    <div class="row gx-10 gy-8 align-items-center justify-content-between pb-10 px-10">
                                        <div class="col-3">
                                            <p class="mb-0">
                                                Lab. Reg. No: BP-C-220</p>
                                        </div>
                                        <div class="offset-6 col-3">
                                            <p class="mb-0 text-end">
                                                Gov. Reg. No: {{ $user->regd_no }}</p>
                                        </div>
                                    </div>

                                    <div
                                        class="row gx-10 gy-8 align-items-center justify-content-center border-bottom border-dark px-10 pb-10">
                                        <div class="col-1 me-10">
                                            <img style="width: 8rem;" src="{{ $user->getFirstMediaUrl('images') }}"
                                                alt="" />
                                        </div>
                                        <div class="col-10 me-10">
                                            <div class="print-header text-center me-15">
                                                <h1>
                                                    {{ $user->company_name }}
                                                </h1>

                                                <span class="text-gray-600 fw-semibold fs-5 letter-spacing">
                                                    {{ $user->address }},{{ $user->phone }}
                                                </span>
                                                <p class="text-gray-800 fw-semibold fs-5 letter-spacing">
                                                    <a href="mailto:{{ $user->email }}"
                                                        class="text-decoration-none text-gray-800">
                                                        {{ $user->email }}</a>, <a href="https://udclab.com/"
                                                        class="text-decoration-none text-gray-800">{{ $user->website }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive px-10 pt-0 pb-10">
                                        <h1 class="text-center px-8 py-1 mt-10 mb-0">MANTOUX REPORT</h1>
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST" action="{{ route('mantoux-tests.store') }}">
                                            @csrf

                                            <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">
                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Name Of Candidates:</h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control py-2 my-2" name="name"
                                                        value="{{ old('name') }}" placeholder="Patient's Name"
                                                        data-kt-search-element="input" />
                                                    @error('name')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Passport No:</h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="text" class="form-control py-2 my-2" name="passport_no"
                                                        value="{{ old('passport_no') }}" placeholder="Patient's Name"
                                                        data-kt-search-element="input" />
                                                    @error('passport_no')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Age: </h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="number" class="form-control my-2 py-2" name="age"
                                                        value="{{ old('age') }}" placeholder="Age"
                                                        data-kt-search-element="input" />
                                                    @error('age')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Sex: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <select name="sex" aria-label="Select an Option"
                                                        data-control="select2" data-placeholder="Sex"
                                                        class="form-select form-select-md form-select-solid py-2 my-2">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                    @error('sex')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Address: </h6>
                                                </div>
                                                <div class="col-3 mt-0 border-end">
                                                    <input type="text" class="form-control my-2" name="address"
                                                        placeholder="Address" value="{{ old('address') }}"
                                                        data-kt-search-element="input" />
                                                    @error('address')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Date: </h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="date" class="form-control my-2"
                                                           name="date"
                                                           value="<?php echo date('Y-m-d'); ?>"
                                                           data-kt-search-element="input"/>
                                                    @error('date')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-15">
                                                <div class="col-4 mt-0 border-bottom border-end">
                                                    <h6 class="mb-0 py-5">Name of Test </h6>
                                                </div>
                                                <div class="col-4 mt-0 border-bottom border-end">
                                                    <h6 class="mb-0 py-5">Result </h6>
                                                </div>
                                                <div class="col-4 mt-0 border-bottom">
                                                    <h6 class="mb-0 py-5">Normal Value </h6>
                                                </div>

                                                <div class="col-4 mt-0 border-end">
                                                    <h6 class="mb-0 py-5 fw-bolder">MANTOUX TEST</h6>
                                                </div>
                                                <div class="col-4 mt-0 border-end">
                                                    <textarea name="result" rows="3" class="form-control my-2" style="resize: none;">{{ old('result') }}</textarea>
                                                    {{-- <input type="text" class="form-control my-2" name="result"
                                                        placeholder="Result" value="{{ old('result') }}"
                                                        data-kt-search-element="input" /> --}}
                                                    @error('result')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-4 mt-0">
                                                    <h6 class="mb-0 py-2 fw-bolder">&lt;10mm: Low risk group</h6>
                                                    <h6 class="mb-0 py-2 fw-bolder">&gt;10mm: High risk group</h6>
                                                    <h6 class="mb-0 py-2 fw-bolder">&gt;10mm: Extremely high risk group</h6>
                                                </div>
                                            </div>

                                            <div class="row border gx-10 gy-8 w-lg-50 ms-0 mt-15">
                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-5">Note: Injected side</h6>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" class="form-control my-2" name="injected_side"
                                                        placeholder="Injected Side" value="{{ old('injected_side') }}"
                                                        data-kt-search-element="input" />
                                                    @error('injected_side')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-5">Volume</h6>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" class="form-control my-2" name="volume"
                                                        placeholder="Volume" value="{{ old('volume') }}"
                                                        data-kt-search-element="input" />
                                                    @error('volume')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-3 mt-10">
                                                <a href="{{ route('home') }}"
                                                    class="btn btn-sm fw-bold btn-danger me-4">Cancel</a>

                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                                <button type="submit" class="btn btn-sm fw-bold btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
