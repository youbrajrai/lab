@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Create Other Report
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Other</li>
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
                                            method="POST" action="{{ route('others.store', $report) }}">
                                            @csrf
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                                    <h3 class="mb-8">Others</h3>
                                                    <div class="row gx-10 gy-8 mb-14" bis_skin_checked="1">
                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Opiates</h6>
                                                            <select name="opiates" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Opiates"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('opiates') == 0) selected @endif>
                                                                    Negative</option>
                                                                <option value="1"
                                                                    @if (old('opiates') == 1) selected @endif>
                                                                    Positive</option>
                                                            </select>
                                                            @error('opiates')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Cannabies</h6>
                                                            <select name="cannabies" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Cannabies"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('cannabies') == 0) selected @endif>
                                                                    Negative</option>
                                                                <option value="1"
                                                                    @if (old('cannabies') == 1) selected @endif>
                                                                    Positive</option>
                                                            </select>
                                                            @error('cannabies')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Mantoux Test</h6>
                                                            <select name="mantoux_test" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Mantoux Test"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('mantoux_test') == 0) selected @endif>
                                                                    Negative</option>
                                                                <option value="1"
                                                                    @if (old('mantoux_test') == 1) selected @endif>
                                                                    Positive</option>
                                                            </select>
                                                            @error('mantoux_test')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        @if ($report->sex === 'female')
                                                            <div class="col-lg-4" bis_skin_checked="1">
                                                                <h6>Urine Pregnancy Test</h6>
                                                                <select name="urine_pregnancy_test"
                                                                    aria-label="Select an Option" data-control=""
                                                                    data-placeholder="Urine Pregnancy Test"
                                                                    class="form-select form-select-md form-select-solid">
                                                                    <option value="0"
                                                                        @if (old('urine_pregnancy_test') == 0) selected @endif>
                                                                        Negative</option>
                                                                    <option value="1"
                                                                        @if (old('urine_pregnancy_test') == 1) selected @endif>
                                                                        Positive</option>
                                                                </select>
                                                                @error('urine_pregnancy_test')
                                                                    <span class="invalid-feedback d-block" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        @endif

                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Referred by</h6>
                                                            <input type="text" class="form-control" name="request_doctor"
                                                                value="{{ old('request_doctor') }}"
                                                                placeholder="Referred by" data-kt-search-element="input">
                                                            @error('request_doctor')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}

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
