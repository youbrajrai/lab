@extends('layouts.app')
@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Edit Applicant Information
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Applicant Information</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid pb-0">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="row g-5 g-xl-10">
                    <div class="col-xxl-12">
                        <div class="card card-flush mb-10">
                            <div class="card-body">
                                <div class="table-responsive p-10">
                                    <form data-kt-search-element="form" class="w-100 position-relative mt-10" method="POST" action="{{ route('test-report.update', $report->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">

                                                <h3 class="mb-8">Applicant Info</h3>

                                                <div class="row gx-10 gy-8 mb-14">

                                                    <div class="col-lg-4">
                                                        <h6>Referred By</h6>
                                                        <select name="referred_by" aria-label="Select an Option" data-control="select2" data-placeholder="Referred By" class="form-select form-select-md form-select-solid">
                                                            <option value="" label="Select a referral ... " selected="selected" disabled></option>

                                                            @foreach ($referrals as $key => $referral)
                                                            <option value="{{ $referral->id }}">
                                                                {{ $referral->name }}
                                                            </option>
                                                            @endforeach

                                                            {{-- <option value="Casey Wells">Casey Wells</option>
                                                                <option value="Coty Franey">Coty Franey</option>
                                                                <option value="Madison Bird">Madison Bird</option> --}}

                                                        </select>
                                                        @error('referred_by')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>C.N.O.</h6>
                                                        <input type="text" class="form-control" @error('cno') @enderror name="cno" value="{{ old('cno', $report) }}" placeholder="C.N.O" data-kt-search-element="input" />
                                                        @error('cno')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>Full Name</h6>
                                                        <input type="text" class="form-control" name="name" value="{{ old('name',$report) }}" placeholder="Full Name" data-kt-search-element="input" />
                                                        @error('name')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>Age</h6>
                                                        <input type="number" class="form-control" name="age" value="{{ old('age',$report) }}" placeholder="Age" data-kt-search-element="input" />
                                                        @error('age')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>Sex</h6>
                                                        <select name="sex" aria-label="Select an Option" data-control="select2" data-placeholder="Sex" class="form-select form-select-md form-select-solid">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                        @error('sex')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>Marital Status</h6>
                                                        <select name="marital_status" aria-label="Select an Option" data-control="select2" data-placeholder="Marital Status" class="form-select form-select-md form-select-solid">
                                                            <option value="single">Single</option>
                                                            <option value="married">Married</option>
                                                        </select>
                                                        @error('marital_status')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>Nationality</h6>
                                                        <input type="text" class="form-control" name="nationality" placeholder="Nationality" value="Nepali" data-kt-search-element="input" />
                                                        @error('nationality')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>Contact</h6>
                                                        <input type="text" class="form-control" name="contact" placeholder="Contact" value="{{ old('contact',$report) }}" data-kt-search-element="input" />
                                                        @error('contact')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>Passport No.</h6>
                                                        <input type="text" class="form-control" name="passport_number" value="{{ old('passport_number',$report) }}" placeholder="Passport No." data-kt-search-element="input" />
                                                        @error('passport_number')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>Passport Expiry</h6>
                                                        <input type="date" class="form-control" name="passport_expiry" value="{{ old('passport_expiry',$report) }}" data-kt-search-element="input" />
                                                        @error('passport_expiry')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <h6>Job Applied for</h6>
                                                        <select name="job_title" aria-label="Select an Option" data-control="select2" class="form-select form-select-md form-select-solid">
                                                            <option value="{{ old('job_title') }}" label="Select a country ... " selected="selected" disabled>Select a country</option>
                                                            @foreach ($countries as $country)
                                                            <option value="{{ $country }}" label="{{ $country }}">{{ $country }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('job_title')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h6>Medical Examination Date</h6>
                                                        <input type="date" class="form-control" name="medical_examination_date" value="<?php echo date('Y-m-d'); ?>" data-kt-search-element="input" />
                                                        @error('medical_examination_date')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <input type="hidden" name="report" value="1">
                                                    <div class="col-lg-4">
                                                        <h3>Select Tests</h3>
                                                        <div class="checkbox-group">
                                                            @foreach ($availableTests as $key => $label)
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="tests[]" value="{{ $key }}" id="{{ $key }}" @if(in_array($key, $selectedTests)) checked @endif>
                                                                <label class="form-check-label" for="{{ $key }}">{{ $label }}</label>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-15">
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong" onClick="setup()">
                                                            Capture Applicant Image
                                                        </button>
                                                        <div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Applicant Current
                                                                            Photo</h5>
                                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onClick=Webcam.reset()>
                                                                            <i aria-hidden="true" class="ki ki-plus ki-cross"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div id="my_camera"></div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-bs-dismiss="modal" onClick=Webcam.reset()>Close</button>
                                                                        <input type="button" class="btn btn-primary font-weight-bold" value="Take Snapshot" onClick="take_snapshot()">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="image" class="image-tag" value="{{ old('image') }}">
                                                            <div id="results"></div>
                                                        </div>
                                                        @error('image')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                            <a href="{{ route('reports.index') }}" class="btn btn-sm fw-bold btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Submit</button>


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
@endsection
