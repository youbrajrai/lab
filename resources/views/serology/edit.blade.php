@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Edit Serology Report
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Serology</li>
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

                                        @include('partials.testFormNav')
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST"
                                            action="{{ route('serologies.update', $testData['serology']->report_id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                                    <h3 class="mb-8">Serology</h3>
                                                    <div class="row gx-10 gy-8 mb-14">
                                                        <div class="col-lg-4">
                                                            <h6>HBs-Ag</h6>
                                                            <select name="hbs_ag" aria-label="Select an Option"
                                                                data-control="" data-placeholder="HBs-Ag"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('hbs_ag', $testData['serology']) == 0) selected @endif>
                                                                    Negative</option>
                                                                <option value="1"
                                                                    @if (old('hbs_ag', $testData['serology']) == 1) selected @endif>
                                                                    Positive</option>
                                                            </select>
                                                            @error('hbs_ag')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Anti-HIV (1&2)</h6>
                                                            <select name="anti_hiv" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Anti-HIV (1&amp;2)"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('anti_hiv', $testData['serology']) == 0) selected @endif>
                                                                    Negative</option>
                                                                <option value="1"
                                                                    @if (old('anti_hiv', $testData['serology']) == 1) selected @endif>
                                                                    Positive</option>
                                                            </select>
                                                            @error('anti_hiv')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Anti-HCV</h6>
                                                            <select name="anti_hcv" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Anti-HCV"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('anti_hcv', $testData['serology']) == 0) selected @endif>
                                                                    Negative</option>
                                                                <option value="1"
                                                                    @if (old('anti_hcv', $testData['serology']) == 1) selected @endif>
                                                                    Positive</option>
                                                            </select>
                                                            @error('anti_hcv')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>VDRL</h6>
                                                            <select name="vdrl" aria-label="Select an Option"
                                                                data-control="" data-placeholder="VDRL"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('vdrl', $testData['serology']) == 0) selected @endif>None
                                                                    Reactive</option>
                                                                <option value="1"
                                                                    @if (old('vdrl', $testData['serology']) == 1) selected @endif>
                                                                    Reactive</option>
                                                            </select>
                                                            @error('vdrl')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>TPHA</h6>
                                                            <select name="tpha" aria-label="Select an Option"
                                                                data-control="" data-placeholder="TPHA"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('tpha', $testData['serology']) == 0) selected @endif>
                                                                    Negative</option>
                                                                <option value="1"
                                                                    @if (old('tpha', $testData['serology']) == 1) selected @endif>
                                                                    Positive</option>
                                                            </select>
                                                            @error('tpha')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>ABO-Blood Group & Rh-type</h6>
                                                            <select name="blood_group" aria-label="Select an Option"
                                                                data-control=""
                                                                data-placeholder="ABO-Blood Group &amp; Rh-type"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="O+ve"
                                                                    @if (old('blood_group', $testData['serology']) == 'O+ve') selected @endif>O+ve
                                                                </option>
                                                                <option value="A+ve"
                                                                    @if (old('blood_group', $testData['serology']) == 'A+ve') selected @endif>A+ve
                                                                </option>
                                                                <option value="B+ve"
                                                                    @if (old('blood_group', $testData['serology']) == 'B+ve') selected @endif>B+ve
                                                                </option>
                                                                <option value="AB+ve"
                                                                    @if (old('blood_group', $testData['serology']) == 'AB+ve') selected @endif>
                                                                    AB+ve</option>
                                                                <option value="O-ve"
                                                                    @if (old('blood_group', $testData['serology']) == 'O-ve') selected @endif>O-ve
                                                                </option>
                                                                <option value="A-ve"
                                                                    @if (old('blood_group', $testData['serology']) == 'A-ve') selected @endif>A-ve
                                                                </option>
                                                                <option value="B-ve"
                                                                    @if (old('blood_group', $testData['serology']) == 'B-ve') selected @endif>B-ve
                                                                </option>
                                                                <option value="AB-ve"
                                                                    @if (old('blood_group', $testData['serology']) == 'AB-ve') selected @endif>
                                                                    AB-ve</option>
                                                            </select>
                                                            @error('blood_group')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        {{-- <div class="col-lg-4">
                                                            <h6>Malaria Parasite</h6>
                                                            <select name="malaria_parasite" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Malaria Parasite"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('malaria_parasite', $testData['serology']) == 0) selected @endif>
                                                                    Absent</option>
                                                                <option value="1"
                                                                    @if (old('malaria_parasite', $testData['serology']) == 1) selected @endif>
                                                                    Present</option>
                                                            </select>
                                                            @error('malaria_parasite')
                                                                <span class="inva   lid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}

                                                    </div>
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
