@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Edit Hematology Report
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Hematology</li>
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
                                        @include('partials.formNav')
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST"
                                            action="{{ route('hematologies.update', $hematology->report_id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                                    <h3 class="mb-8">Hematology</h3>
                                                    <div class="row gx-10 gy-8 mb-14">
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>WBC</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="wbc" value="{{ old('wbc', $hematology) }}"
                                                                placeholder="WBC" data-kt-search-element="input">
                                                            @error('wbc')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        {{-- <div class="col-lg-4">
                                                            <h6>RBC</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="rbc" value="{{ old('rbc', $hematology) }}"
                                                                placeholder="RBC" data-kt-search-element="input">
                                                            @error('rbc')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>Hemoglobin</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="hemoglobin"
                                                                value="{{ old('hemoglobin', $hematology) }}"
                                                                placeholder="Hemoglobin" data-kt-search-element="input">
                                                            @error('hemoglobin')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        {{-- <div class="col-lg-4">
                                                            <h6>Platelets</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="platelets" value="{{ old('platelets', $hematology) }}"
                                                                placeholder="Platelets" data-kt-search-element="input">
                                                            @error('platelets')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>Neutrophils</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="neutrophils"
                                                                value="{{ old('neutrophils', $hematology) }}"
                                                                placeholder="Neutrophils" data-kt-search-element="input">
                                                            @error('neutrophils')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>Lymphocytes</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="lymphocytes"
                                                                value="{{ old('lymphocytes', $hematology) }}"
                                                                placeholder="Lymphocytes" data-kt-search-element="input">
                                                            @error('lymphocytes')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>Eosinophils</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="eosinophils"
                                                                value="{{ old('eosinophils', $hematology) }}"
                                                                placeholder="Eosinophils" data-kt-search-element="input">
                                                            @error('eosinophils')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>Monocytes</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="monocytes"
                                                                value="{{ old('monocytes', $hematology) }}"
                                                                placeholder="Monocytes" data-kt-search-element="input">
                                                            @error('monocytes')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>Basophils</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="basophils"
                                                                value="{{ old('basophils', $hematology) }}"
                                                                placeholder="Basophils" data-kt-search-element="input">
                                                            @error('basophils')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>ESR</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="esr" value="{{ old('esr', $hematology) }}"
                                                                placeholder="ESR" data-kt-search-element="input">
                                                            @error('esr')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>Malaria Parasite</h6>
                                                            <select name="malaria_parasite" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Malaria Parasite"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('malaria_parasite', $hematology) == 0) selected @endif>
                                                                    Not Found</option>
                                                                    {{-- <option value="1"
                                                                    @if (old('malaria_parasite', $hematology) == 1) selected @endif>
                                                                    Found</option> --}}
                                                            </select>
                                                            @error('malaria_parasite')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="col-lg-4">
                                                            <h6>Micro Filarai</h6>
                                                            <select name="micro_filaria" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Micro Filarai"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('micro_filaria', $hematology) == 0) selected @endif>
                                                                    Not Found</option>
                                                                    {{-- <option value="1"
                                                                    @if (old('micro_filaria', $hematology) == 1) selected @endif>
                                                                    Found</option> --}}
                                                            </select>
                                                            @error('micro_filaria')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        {{-- <div class="col-lg-4">
                                                            <h6>PCV</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="pcv" value="{{ old('pcv', $hematology) }}"
                                                                placeholder="PCV" data-kt-search-element="input">
                                                            @error('pcv')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4">
                                                            <h6>MCV</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="mcv" value="{{ old('mcv', $hematology) }}"
                                                                placeholder="MCV" data-kt-search-element="input">
                                                            @error('mcv')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4">
                                                            <h6>MCH</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="mch" value="{{ old('mch', $hematology) }}"
                                                                placeholder="MCH" data-kt-search-element="input">
                                                            @error('mch')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4">
                                                            <h6>MCHC</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="mchc" value="{{ old('mchc', $hematology) }}"
                                                                placeholder="MCHC" data-kt-search-element="input">
                                                            @error('mchc')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 gap-lg-3">
                                                    <a href = "{{ route('reports.index') }}"
                                                        class="btn btn-sm fw-bold btn-danger">Cancel</a>
                                                    <button type="submit" class="btn btn-sm fw-bold btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_new_target">Submit</button>
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
