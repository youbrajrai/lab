@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Insert Liver Function Test Details
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Create Liver Function Test</li>
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
                                            {{-- <p class="mb-0">S.N. : 1</p> --}}
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
                                                    {{ $user->address }},
                                                    {{ $user->phone }}
                                                </span>
                                                <p class="text-gray-800 fw-semibold fs-5 letter-spacing">
                                                    <a href="mailto:{{ $user->email }}" class="text-decoration-none text-black">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                class="text-decoration-none text-black">{{ $user->website }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive px-10 pt-0 pb-10">
                                        <h1 class="text-center px-8 py-1 mt-10 mb-0">PATHOLOGY REPORT</h1>
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST" action="{{ route('liver-reports.store') }}">
                                            @csrf

                                            <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Name:</h6>
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
                                                    <h6 class="mb-0 py-5">Age: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="number" class="form-control py-2 my-2" name="age"
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

                                                <div class="col-3 border-bottom border-end mt-0">
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
                                                        value="<?php echo date('Y-m-d'); ?>"
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
                                                        placeholder="Address" value="{{ old('address') }}"
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
                                                        placeholder="Contact No." value="{{ old('contact') }}"
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
                                                        placeholder="Referred by" value="{{ old('referred_by') }}"
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
                                                        placeholder="Lab No." value="{{ old('lab') }}"
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
                                                    <h6 class="mb-0 py-4">Blood</h6>
                                                </div>
                                                <div class="col-3 border border-start-0">
                                                    <h6 class="mb-0 py-4"></h6>
                                                </div>
                                            </div>
                                            <h2 class="text-center px-8 py-1 mt-12 mb-3"><u>L.F.T. (LIVER FUNCTION
                                                    TEST)</u></h2>

                                            <div class="row gx-10 gy-8 mx-0 mt-0">
                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">TEST NAME</h6>
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">RESULT</h6>
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">NORMAL RANGE</h6>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Sr. Bilirubin Total</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="sr_bilirubin_total" value="{{ old('sr_bilirubin_total') }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> mg%</span> --}}
                                                    @error('sr_bilirubin_total')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">(0.4-1.0) mg%</p>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Sr. Bilirubin Direct</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="sr_bilirubin_direct"
                                                        value="{{ old('sr_bilirubin_direct') }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> mg%</span> --}}
                                                    @error('sr_bilirubin_direct')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">(0.0-0.4) mg%</p>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Alkaline Phosphatase</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="alkaline_phosphate" value="{{ old('alkaline_phosphate') }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> u/l</span> --}}
                                                    @error('alkaline_phosphate')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">(40-128) u/l</p>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">S.G.P.T (ALT)</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="sgpt" value="{{ old('sgpt') }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> u/l</span> --}}
                                                    @error('sgpt')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">(5-35) u/l</p>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">S.G.O.T (AST)</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control py-2 my-2"
                                                        name="sgot" value="{{ old('sgot') }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> u/l</span> --}}
                                                    @error('sgot')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">(8-40) u/l</p>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Total Protein</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control py-2 my-2"
                                                        name="total_protein" value="{{ old('total_protein') }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> gm/dl</span> --}}
                                                    @error('total_protein')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">(6-8) gm/dl</p>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Serum Albumin</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control py-2 my-2"
                                                        name="serum_albumin" value="{{ old('serum_albumin') }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display: inline;">
                                                    {{-- <span> gm/dl</span> --}}
                                                    @error('serum_albumin')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">(3.5-5.0) gm/dl</p>
                                                </div>

                                                <div class="col-3 mt-10">
                                                    <a href="{{ route('home') }}"
                                                        class="btn btn-sm fw-bold btn-danger me-4">Cancel</a>

                                                    <input type="hidden" name="user_id"
                                                        value="{{ Auth::user()->id }}" />
                                                    <button type="submit" class="btn btn-sm fw-bold btn-primary"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Save
                                                    </button>
                                                </div>

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
@stop
