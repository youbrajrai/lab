@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Create General Examination Report
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">General Examination</li>
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
                                            method="POST" action="{{ route('reports.generals.store', $report) }}">
                                            @csrf

                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">

                                                    <h3 class="mb-8">General Examination</h3>

                                                    <div class="row gx-10 gy-8 mb-14">

                                                        <div class="col-lg-4">
                                                            <h6>Height</h6>
                                                            <input type="number" step = "any" class="form-control"
                                                                name="height" value="{{ old('height') }}"
                                                                placeholder="Height" data-kt-search-element="input" />
                                                            @error('height')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Weight</h6>
                                                            <input type="number" step = "any" class="form-control"
                                                                name="weight" value="{{ old('weight') }}"
                                                                placeholder="Weight" data-kt-search-element="input" />
                                                            <span class="d-inline-flex" role="contentinfo">kg</span>
                                                            @error('weight')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Pulse</h6>

                                                            {{-- <input type="number" step="any" class="form-control"
                                                                name="pulse" value="{{ old('pulse') }}"
                                                                placeholder="Pulse" data-kt-search-element="input" /> --}}

                                                            <select name="pulse" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Pulse"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="68"
                                                                    @if (old('pulse') == 68) selected @endif>68
                                                                </option>
                                                                <option value="70"
                                                                    @if (old('pulse') == 70) selected @endif>70
                                                                </option>
                                                                <option value="72"
                                                                    @if (old('pulse') == 72) selected @endif>72
                                                                </option>
                                                                <option value="74"
                                                                    @if (old('pulse') == 74) selected @endif>74
                                                                </option>
                                                                <option value="76"
                                                                    @if (old('pulse') == 76) selected @endif>76
                                                                </option>
                                                            </select>
                                                            @error('pulse')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Temperature</h6>

                                                            {{-- <input type="number" step="any" class="form-control"
                                                                name="temperature" value="{{ old('temperature') }}"
                                                                placeholder="Temperature" data-kt-search-element="input" /> --}}

                                                            <select name="temperature" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Temperature"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="96"
                                                                    @if (old('temperature') == 96) selected @endif>96
                                                                </option>
                                                                <option value="96.5"
                                                                    @if (old('temperature') == 96.5) selected @endif>96.5
                                                                </option>
                                                                <option value="97"
                                                                    @if (old('temperature') == 97) selected @endif>97
                                                                </option>
                                                                <option value="98"
                                                                    @if (old('temperature') == 98) selected @endif>98
                                                                </option>
                                                                <option value="99"
                                                                    @if (old('temperature') == 99) selected @endif>99
                                                                </option>
                                                            </select>
                                                            @error('temperature')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Blood Pressure</h6>
                                                            <input type="text" class="form-control" name="blood_pressure"
                                                                value="{{ old('blood_pressure') }}"
                                                                placeholder="Blood Pressure"
                                                                data-kt-search-element="input" />
                                                            @error('blood_pressure')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Jaundice</h6>
                                                            <select name="jaundice" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Jaundice"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('jaundice') == 0) selected @endif>
                                                                    Absent
                                                                </option>
                                                                {{-- <option value="1"
                                                                    @if (old('jaundice') == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('jaundice')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Paller</h6>
                                                            <select name="paller" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Paller"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('paller') == 0) selected @endif>
                                                                    Absent
                                                                </option>
                                                                {{-- <option value="1"
                                                                    @if (old('paller') == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('paller')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Cynosis</h6>
                                                            <select name="cynosis" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Cynosis"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('cynosis') == 0) selected @endif>
                                                                    Absent
                                                                </option>
                                                                {{-- <option value="1"
                                                                    @if (old('cynosis') == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('cynosis')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Clubbing</h6>
                                                            <select name="clubbing" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Clubbing"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('clubbing') == 0) selected @endif>
                                                                    Absent
                                                                </option>
                                                                {{-- <option value="1"
                                                                    @if (old('clubbing') == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('clubbing')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Odema</h6>
                                                            <select name="odema" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Odema"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('odema') == 0) selected @endif>
                                                                    Absent
                                                                </option>
                                                                {{-- <option value="1"
                                                                    @if (old('odema') == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('odema')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Ascitis</h6>
                                                            <select name="ascitis" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Ascitis"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('ascitis') == 0) selected @endif>
                                                                    Absent</option>
                                                                {{-- <option value="1"
                                                                    @if (old('ascitis') == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('ascitis')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Lymph Node</h6>
                                                            <select name="lymph_node" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Lymph Node"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('lymph_node') == 0) selected @endif>
                                                                    Absent</option>
                                                                {{-- <option value="1"
                                                                    @if (old('lymph_node') == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('lymph_node')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Past history of serious illness</h6>
                                                            <select name="serious_illness" aria-label="Select an Option"
                                                                data-control=""
                                                                data-placeholder="Past history of serious illness"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('serious_illness') == 0) selected @endif>None
                                                                </option>
                                                                {{-- <option value="1"
                                                                    @if (old('serious_illness') == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('serious_illness')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <h6>Past history of allergy</h6>
                                                            <select name="allergy_history" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Past history of allergy"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('allergy_history') == 0) selected @endif>None
                                                                </option>
                                                                {{-- <option value="1"
                                                                    @if (old('allergy_history') == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('allergy_history')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="d-flex align-items-center gap-2 gap-lg-3">

                                                    <a href = "{{ route('reports.index') }}"
                                                        class="btn btn-sm fw-bold btn-danger">Cancel</a>

                                                    <button type="submit" class="btn btn-sm fw-bold btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_new_target">Submit</button>

                                                    {{-- <a href = "{{ route('systemics.create', $report) }}" class="btn btn-sm fw-bold btn-success">Next</a> --}}

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
