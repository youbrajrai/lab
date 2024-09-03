@extends('layouts.app')
@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Update Cannabies and Pregnancy Test Details
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Cannabies and Pregnancy Test</li>
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
                                            {{-- <p class="mb-0">
                                                S.N. : {{ $urineReport->id }}</p> --}}
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
                                                        class="text-decoration-none text-gray-800">udclab.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive px-10 pt-0 pb-10">

                                        <h1 class="text-center px-8 py-1 mt-10 mb-0">PATHOLOGY REPORT</h1>

                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST"
                                            action="{{ route('cannabies-pregnancy-tests.update', $cannabiesPregnancyTest) }}">
                                            @method('PUT')
                                            @csrf

                                            <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Name:</h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control py-2 my-2" name="name"
                                                        value="{{ old('name', $cannabiesPregnancyTest) }}"
                                                        placeholder="Patient's Name" data-kt-search-element="input" />
                                                    @error('name')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Age: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="number" class="form-control py-2 my-2" name="age"
                                                        value="{{ old('age', $cannabiesPregnancyTest) }}" placeholder="Age"
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
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <select name="sex" aria-label="Select an Option"
                                                        data-control="select2" data-placeholder="Sex"
                                                        class="form-select form-select-md form-select-solid py-2 my-2">
                                                        <option value="male" @selected($cannabiesPregnancyTest->sex === 'male')>
                                                            Male
                                                        </option>
                                                        <option value="female" @selected($cannabiesPregnancyTest->sex === 'female')>
                                                            Female
                                                        </option>
                                                    </select>
                                                    @error('sex')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Date: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="date" class="form-control my-2"
                                                        name="medical_examination_date"
                                                        value="{{ old('medical_examination_date', $cannabiesPregnancyTest) }}"
                                                        data-kt-search-element="input" />
                                                    @error('medical_examination_date')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Address: </h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control my-2" name="address"
                                                        placeholder="Address"
                                                        value="{{ old('address', $cannabiesPregnancyTest) }}"
                                                        data-kt-search-element="input" />
                                                    @error('address')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Contact: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="text" class="form-control my-2" name="contact"
                                                        placeholder="Contact No."
                                                        value="{{ old('contact', $cannabiesPregnancyTest) }}"
                                                        data-kt-search-element="input" />
                                                    @error('contact')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Lab No: </h6>
                                                </div>
                                                <div class="col-3 border-end mt-0">
                                                    <input type="number" class="form-control my-2" name="lab"
                                                        placeholder="Lab No."
                                                        value="{{ old('lab', $cannabiesPregnancyTest) }}"
                                                        data-kt-search-element="input" />
                                                    @error('lab')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Referred by:</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control my-2" name="referred_by"
                                                        placeholder="Referred by"
                                                        value="{{ old('referred_by', $cannabiesPregnancyTest) }}"
                                                        data-kt-search-element="input" />
                                                    @error('referred_by')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-10">
                                                <div class="col-3 border border-end-0">
                                                    <h6 class="mb-0 py-4">Sample</h6>
                                                </div>
                                                <div class="col-3 border border-start-0 border-end-0">
                                                    <h6 class="mb-0 py-4"></h6>
                                                </div>
                                                <div class="col-3 border border-start-0 border-end-0">
                                                    <h6 class="mb-0 py-4">Urine</h6>
                                                </div>
                                                <div class="col-3 border border-start-0">
                                                    <h6 class="mb-0 py-4"></h6>
                                                </div>
                                            </div>

                                            <div class="row gx-10 gy-8 mx-0 mt-10">

                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">TEST NAME</h6>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">RESULT</h6>
                                                </div>

                                                @if ($cannabiesPregnancyTest->sex == 'female')
                                                    <div class="col-6 my-2">
                                                        <p class="mb-0 py-4">Urine for Pregnancy Test</p>
                                                    </div>
                                                    <div class="col-3 my-2">

                                                        <select name="pregnancy_test" aria-label="Select an Option"
                                                            data-control="" data-placeholder="Pregnancy Test"
                                                            class="form-select form-select-md form-select-solid">
                                                            <option value="-1"
                                                                @if (old('pregnancy_test', $cannabiesPregnancyTest) == -1) selected @endif>
                                                                None
                                                            </option>
                                                            <option value="0"
                                                                @if (old('pregnancy_test', $cannabiesPregnancyTest) == 0) selected @endif>
                                                                Negative
                                                            </option>
                                                            <option value="1"
                                                                @if (old('pregnancy_test', $cannabiesPregnancyTest) == 1) selected @endif>
                                                                Positive
                                                            </option>
                                                        </select>

                                                        @error('pregnancy_test')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                @endif

                                                <div class="col-6 my-2">
                                                    <p class="mb-0 py-4">Cannabies Test</p>
                                                </div>
                                                <div class="col-3 my-2">

                                                    <select name="cannabies_test" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Cannabies Test"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1"
                                                            @if (old('cannabies_test', $cannabiesPregnancyTest) == -1) selected @endif>
                                                            None
                                                        </option>
                                                        <option value="0"
                                                            @if (old('cannabies_test', $cannabiesPregnancyTest) == 0) selected @endif>
                                                            Negative
                                                        </option>
                                                        <option value="1"
                                                            @if (old('cannabies_test', $cannabiesPregnancyTest) == 1) selected @endif>
                                                            Positive
                                                        </option>
                                                    </select>

                                                    @error('cannabies_test')
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
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Save
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
