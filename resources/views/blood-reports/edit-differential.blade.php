@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Blood Report
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('home')}}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Blood Report</li>
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
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10" method="POST" action="{{ route('bloodreport.differential.update', $bloodReport) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="tab-content" style="overflow-y: scroll; overflow-x: hidden;">
                                                <div class="tab-pane fade show active h-400px" id="kt_stats_widget_16_tab_1" >
                                                    <h3 class="mb-8">Differential Count</h3>
                                                    <div class="row gx-10 gy-8 mb-18">
                                                        <div class="col-lg-4">
                                                            <h6>Neutrophils</h6>
                                                            <input type="number" step="any" class="form-control" name="neutrophils" value="{{old('neutrophils', $bloodReport)}}" placeholder="Neutrophils" data-kt-search-element="input">
                                                            @error('neutrophils')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Lymphocytes</h6>
                                                            <input type="number" step="any" class="form-control" name="lymphocytes" value="{{old('lymphocytes', $bloodReport)}}" placeholder="Lymphocytes" data-kt-search-element="input">
                                                            @error('lymphocytes')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Eosinophils</h6>
                                                            <input type="number" step="any" class="form-control" name="eosinophils" value="{{old('eosinophils', $bloodReport)}}" placeholder="Eosinophils" data-kt-search-element="input">
                                                            @error('eosinophils')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Monocytes</h6>
                                                            <input type="number" step="any" class="form-control" name="monocytes" value="{{old('monocytes', $bloodReport)}}" placeholder="Monocytes" data-kt-search-element="input">
                                                            @error('monocytes')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Basophils</h6>
                                                            <input type="number" step="any" class="form-control" name="basophils" value="{{old('basophils', $bloodReport)}}" placeholder="Basophils" data-kt-search-element="input">
                                                            @error('basophils')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>PCV</h6>
                                                            <input type="number" step="any" class="form-control" name="pcv" value="{{old('pcv', $bloodReport)}}" placeholder="PCV" data-kt-search-element="input">
                                                            @error('pcv')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>MCV</h6>
                                                            <input type="number" step="any" class="form-control" name="mcv" value="{{old('mcv', $bloodReport)}}" placeholder="MCV" data-kt-search-element="input">
                                                            @error('mcv')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>MCH</h6>
                                                            <input type="number" step="any" class="form-control" name="mch" value="{{old('mch', $bloodReport)}}" placeholder="MCH" data-kt-search-element="input">
                                                            @error('mch')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>MCHC</h6>
                                                            <input type="number" step="any" class="form-control" name="mchc" value="{{old('mchc', $bloodReport)}}" placeholder="MCHC" data-kt-search-element="input">
                                                            @error('mchc')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>PT</h6>
                                                            <input type="number" step="any" class="form-control" name="pt" value="{{old('pt', $bloodReport)}}" placeholder="PT" data-kt-search-element="input">
                                                            @error('pt')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>INR</h6>
                                                            <input type="number" step="any" class="form-control" name="inr" value="{{old('inr', $bloodReport)}}" placeholder="INR" data-kt-search-element="input">
                                                            @error('inr')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Fasting Blood Sugar</h6>
                                                            <input type="number" step="any" class="form-control" name="fasting_blood_sugar" value="{{old('fasting_blood_sugar', $bloodReport)}}" placeholder="Fasting Blood Sugar" data-kt-search-element="input">
                                                            @error('fasting_blood_sugar')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Blood Urea</h6>
                                                            <input type="number" step="any" class="form-control" name="blood_urea" value="{{old('blood_urea', $bloodReport)}}" placeholder="Blood Urea" data-kt-search-element="input">
                                                            @error('blood_urea')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="d-flex align-items-center gap-2 gap-lg-3 my-6">
                                                <a href = "{{route('bloodreport.applicant.edit', $bloodReport)}}" class="btn btn-sm fw-bold btn-danger">Back</a>
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

@stop
`
