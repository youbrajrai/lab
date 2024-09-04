@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Create Biochemistry Report
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Biochemistry Report</li>
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
                                        @include('partials.testformNav')
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST" action="{{ route('biochemistries.store', $report) }}">
                                            @csrf
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                                    <h3 class="mb-8">Biochemistry</h3>
                                                    <div class="row gx-10 gy-8 mb-14">
                                                        <div class="col-lg-4">
                                                            <h6>Urea</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="urea" value="{{ old('urea') }}"
                                                                placeholder="Urea" data-kt-search-element="input">
                                                            @error('urea')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Creatinine</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="creatinine" value="{{ old('creatinine') }}"
                                                                placeholder="Creatinine" data-kt-search-element="input">
                                                            @error('creatinine')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Random Blood Sugar</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="blood_sugar" value="{{ old('blood_sugar') }}"
                                                                placeholder="Blood Sugar" data-kt-search-element="input">
                                                            @error('blood_sugar')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Bilirubin (Total/Direct)</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="sr_bilirubin_total_direct"
                                                                value="{{ old('sr_bilirubin_total_direct') }}"
                                                                placeholder="Sr. Bilirubin (Total/Direct)"
                                                                data-kt-search-element="input">
                                                            @error('sr_bilirubin_total_direct')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        {{-- <div class="col-lg-4">
                                                            <h6>Sr. Bilirubin Total</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="sr_bilirubin_total"
                                                                value="{{ old('sr_bilirubin_total') }}"
                                                                placeholder="Sr. Bilirubin Total"
                                                                data-kt-search-element="input">
                                                            @error('sr_bilirubin_total')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Sr. Bilirubin Direct</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="sr_bilirubin_direct"
                                                                value="{{ old('sr_bilirubin_direct') }}"
                                                                placeholder="Sr. Bilirubin Direct"
                                                                data-kt-search-element="input">
                                                            @error('sr_bilirubin_direct')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}

                                                        <div class="col-lg-4">
                                                            <h6>SGPT</h6>
                                                            <input type="number" step ="any" class="form-control"
                                                                name="sgpt" value="{{ old('sgpt') }}"
                                                                placeholder="SGPT" data-kt-search-element="input">
                                                            @error('sgpt')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>SGOT</h6>
                                                            <input type="number" step="any" class="form-control"
                                                                name="sgot" value="{{ old('sgot') }}"
                                                                placeholder="SGOT" data-kt-search-element="input">
                                                            @error('sgot')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 gap-lg-3 my-6">
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
