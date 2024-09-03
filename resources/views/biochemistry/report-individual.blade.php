@extends('layouts.app')
@section('content')
{{'hello'}}
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Insert Applicant Information
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('home')}}" class="text-muted text-hover-primary">Home</a>
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
                            <div class="card card-flush h-675px">
                                <div class="card-body pb-0">
                                    <div class="table-responsive p-10 pb-0">
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10" method="POST" action="{{ route('biochemistries.individual.store') }}">
                                            @csrf
                                            <div class="tab-content" style="overflow-y: scroll; overflow-x: hidden;">
                                                <div class="tab-pane fade show active h-400px" id="kt_stats_widget_16_tab_1" >
                                                    <h3 class="mb-8">Applicant Info</h3>
                                                    <div class="row gx-10 gy-8 mb-5">
                                                        <div class="col-lg-4">
                                                            <h6>Full Name</h6>
                                                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name" data-kt-search-element="input"/>
                                                            @error('name')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Age</h6>
                                                            <input type="number" class="form-control" name="age" value="{{old('age')}}" placeholder="Age" data-kt-search-element="input"/>
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
                                                            <h6>Medical Examination Date</h6>
                                                            <input type="date" class="form-control" name="medical_examination_date" value="{{old('medical_examination_date')}}" data-kt-search-element="input"/>
                                                            @error('medical_examination_date')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Nationality</h6>
                                                            <input type="text" class="form-control" name="nationality" placeholder="Nationality" value = "Nepali" data-kt-search-element="input"/>
                                                            @error('nationality')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                                                <a href = "{{route('home')}}" class="btn btn-sm fw-bold btn-danger">Cancel</a>
                                                <button type="submit" class="btn btn-sm fw-bold btn-primary">Submit</button>
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
