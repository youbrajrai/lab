@extends('layouts.app')
@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Update Urine Test Details
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Edit Urine Test</li>
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
                                                S.N. : {{ $urineReport->id }}</p>
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
                                                    <a href="mailto:{{ $user->email }}" class="text-decoration-none text-gray-800">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                class="text-decoration-none text-gray-800">udclab.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive px-10 pt-0 pb-10">
                                        <h1 class="text-center px-8 py-1 mt-10 mb-0">PATHOLOGY REPORT</h1>
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST" action="{{ route('urine-reports.update', $urineReport) }}">
                                            @method('PUT')
                                            @csrf

                                            <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Name:</h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control py-2 my-2" name="name"
                                                        value="{{ old('name', $urineReport) }}"
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
                                                        value="{{ old('age', $urineReport) }}" placeholder="Age"
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
                                                        <option value="male" @selected($urineReport->sex === 'male')>
                                                            Male
                                                        </option>
                                                        <option value="female" @selected($urineReport->sex === 'female')>
                                                            Female
                                                        </option>
                                                    </select>
                                                    @error('sex')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                {{-- <div class="col-3 border border-end-0 border-top-0 mt-0">
                                                <h6 class="mb-0 py-2">Marital Status </h6>
                                                </div>
                                                <div
                                                class="col-3 border border-start-0 border-end-0 border-top-0 mt-0">
                                                <select name="marital_status" aria-label="Select an Option"
                                                    data-control="select2" data-placeholder="Marital Status"
                                                    class="form-select form-select-md form-select-solid mb-0 py-2">
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                </select>
                                                @error('marital_status')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div> --}}

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Date: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="date" class="form-control my-2"
                                                        name="medical_examination_date"
                                                        value="{{ old('medical_examination_date', $urineReport) }}"
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
                                                        placeholder="Address" value="{{ old('address', $urineReport) }}"
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
                                                        value="{{ old('contact', $urineReport) }}"
                                                        data-kt-search-element="input" />
                                                    @error('contact')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Referred by:</h6>
                                                </div>
                                                <div class="col-3 border-end mt-0">
                                                    <input type="text" class="form-control my-2" name="referred_by"
                                                        placeholder="Referred by"
                                                        value="{{ old('referred_by', $urineReport) }}"
                                                        data-kt-search-element="input" />
                                                    @error('referred_by')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Lab No: </h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" class="form-control my-2" name="lab"
                                                        placeholder="Lab No." value="{{ old('lab', $urineReport) }}"
                                                        data-kt-search-element="input" />
                                                    @error('lab')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
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

                                            <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-10">
                                                <h2 class="text-center border border-dark border-3 pt-2 pb-2">Urine
                                                    Examination Report</h2>
                                            </div>

                                            <h2 class="text-center px-8 py-1 mt-10 mb-3">
                                                <u>PHYSICAL EXAMINATION</u>
                                            </h2>
                                            <div class="row gx-10 gy-8 mx-0 mt-0">

                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">TEST NAME</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">RESULT</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <!--<h6 class="mb-0 py-2">NORMAL RANGE</h6>-->
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Colour</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any"
                                                        class="form-control mb-0 py-2 my-2" name="color"
                                                        value="{{ old('color', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('color')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Transparency</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control py-2 my-2"
                                                        name="transparency"
                                                        value="{{ old('transparency', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('transparency')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Sp. Gravity</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="sp_gravity" value="{{ old('sp_gravity', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('sp_gravity')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <h2 class="text-center px-8 py-1 mt-10 mb-3">
                                                <u>CHEMICAL EXAMINATION</u>
                                            </h2>
                                            <div class="row gx-10 gy-8 mx-0 mt-0">

                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">TEST NAME</h6>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">RESULT</h6>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Reaction</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control py-2 my-2"
                                                        name="reaction" value="{{ old('reaction', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('reaction')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Albumin</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="albumin" value="{{ old('albumin', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('albumin')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Sugar</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="sugar" value="{{ old('sugar', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('sugar')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Urobilinogen</p>
                                                </div>
                                                <div class="col-3 mt-3">

                                                    <select name="urobilinogen" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Urobilinogen"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1"
                                                            @if (old('urobilinogen', $urineReport) == -1) selected @endif>
                                                            None
                                                        </option>
                                                        <option value="0"
                                                            @if (old('urobilinogen', $urineReport) == 0) selected @endif>
                                                            Negative
                                                        </option>
                                                        <option value="1"
                                                            @if (old('urobilinogen', $urineReport) == 1) selected @endif>
                                                            Positive
                                                        </option>
                                                    </select>

                                                    @error('urobilinogen')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Bile Salt</p>
                                                </div>
                                                <div class="col-3 mt-3">

                                                    <select name="bile_salt" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Bile Salt"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1"
                                                            @if (old('bile_salt', $urineReport) == -1) selected @endif>
                                                            None
                                                        </option>
                                                        <option value="0"
                                                            @if (old('bile_salt', $urineReport) == 0) selected @endif>
                                                            Negative
                                                        </option>
                                                        <option value="1"
                                                            @if (old('bile_salt', $urineReport) == 1) selected @endif>
                                                            Positive
                                                        </option>
                                                    </select>

                                                    @error('bile_salt')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                {{-- <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Bile Pigment</p>
                                                </div>
                                                <div class="col-3 mt-3">
                                                    <select name="bile_pigment" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Bile Pigment"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1"
                                                            @if (old('bile_pigment', $urineReport) == -1) selected @endif>
                                                            None
                                                        </option>
                                                        <option value="0"
                                                            @if (old('bile_pigment', $urineReport) == 0) selected @endif>
                                                            Negative
                                                        </option>
                                                        <option value="1"
                                                            @if (old('bile_pigment', $urineReport) == 1) selected @endif>
                                                            Positive
                                                        </option>
                                                    </select>

                                                    @error('bile_pigment')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                {{-- @if ($urineReport->sex == 'female')
                                                    <div class="col-6 mt-0">
                                                        <p class="mb-0 py-4">Urine for Pregnancy Test</p>
                                                    </div>
                                                    <div class="col-3 mt-3">

                                                        <select name="pregnancy_test" aria-label="Select an Option"
                                                            data-control="" data-placeholder="Pregnancy Test"
                                                            class="form-select form-select-md form-select-solid">
                                                            
                                                            <option value="-1"
                                                                @if (old('pregnancy_test', $urineReport) == -1) selected @endif>
                                                                None
                                                            </option>
                                                            <option value="0"
                                                                @if (old('pregnancy_test', $urineReport) == 0) selected @endif>
                                                                Negative
                                                            </option>
                                                            <option value="1"
                                                                @if (old('pregnancy_test', $urineReport) == 1) selected @endif>
                                                                Positive
                                                            </option>
                                                        </select>

                                                        @error('pregnancy_test')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                @endif --}}

                                                {{-- <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Cannabies Test</p>
                                                </div>
                                                <div class="col-3 mt-3">

                                                    <select name="cannabies_test" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Cannabies Test"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1"
                                                            @if (old('cannabies_test', $urineReport) == -1) selected @endif>
                                                            None
                                                        </option>
                                                        <option value="0"
                                                            @if (old('cannabies_test', $urineReport) == 0) selected @endif>
                                                            Negative
                                                        </option>
                                                        <option value="1"
                                                            @if (old('cannabies_test', $urineReport) == 1) selected @endif>
                                                            Positive
                                                        </option>
                                                    </select>

                                                    @error('cannabies_test')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                {{-- <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Acetone</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="acetone" value="{{ old('acetone', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('acetone')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Ketone Bodies</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="ketone_bodies"
                                                        value="{{ old('ketone_bodies', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('ketone_bodies')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Nitrite</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control py-2 my-2"
                                                        name="nitrite" value="{{ old('nitrite', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('nitrite')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                            </div>

                                            <h2 class="text-center px-8 py-1 mt-10 mb-3">
                                                <u>MICROSCOPIC EXAMINATION</u>
                                            </h2>
                                            <div class="row gx-10 gy-8 mx-0 mt-0">

                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">TEST NAME</h6>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">RESULT</h6>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Pus Cell</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="pus_cell" value="{{ old('pus_cell', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> /hpf</span> --}}
                                                    @error('pus_cell')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">RBC</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="rbc" value="{{ old('rbc', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> /hpf</span> --}}
                                                    @error('rbc')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Epithelial Cell</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="epithelial_cells"
                                                        value="{{ old('epithelial_cells', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> /hpf</span> --}}
                                                    @error('epithelial_cells')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Urates</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="urates" value="{{ old('urates', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> /hpf</span> --}}
                                                    @error('urates')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                {{-- <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Casts</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="casts" value="{{ old('casts', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    @error('casts')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Ca. Oxalate</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any"
                                                        class="form-control my-2 py-2 my-2" name="ca_oxalate"
                                                        value="{{ old('ca_oxalate', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> /hpf</span> --}}
                                                    @error('ca_oxalate')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Other</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="other" value="{{ old('other', $urineReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> /hpf</span> --}}
                                                    @error('other')
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
