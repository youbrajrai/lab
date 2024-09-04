@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Create Urine Report
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Urine</li>
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
                                            method="POST" action="{{ route('urines.store', $report) }}">
                                            @csrf
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                                    <h3 class="mb-8">Urine Test</h3>
                                                    <div class="row gx-10 gy-8 mb-14" bis_skin_checked="1">

                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Albumin/Sugar</h6>
                                                            <input type="text" class="form-control" name="albumin_sugar"
                                                                value="Nil" placeholder="Albumin/Sugar"
                                                                data-kt-search-element="input" readonly>
                                                            @error('albumin_sugar')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Albumin</h6>
                                                            <input type="text" class="form-control" name="albumin"
                                                                value="{{ old('albumin') }}" placeholder="Albumin"
                                                                data-kt-search-element="input">
                                                            @error('albumin')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Sugar</h6>
                                                            <input type="text" class="form-control" name="sugar"
                                                                value="{{ old('sugar') }}" placeholder="Sugar"
                                                                data-kt-search-element="input">
                                                            @error('sugar')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}

                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Pus Cells /hpf</h6>
                                                            <input type="text" class="form-control" name="pus_cells"
                                                                value="{{ old('pus_cells') }}" placeholder="PusCells"
                                                                data-kt-search-element="input">
                                                            @error('pus_cells')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>RBCs /hpf</h6>
                                                            <input type="text" class="form-control" name="rbc_hpf"
                                                                value="{{ 'Nil' }}" placeholder="RBC-hpf"
                                                                data-kt-search-element="input" readonly>
                                                            @error('rbc_hpf')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Epithelial cells /hpf</h6>
                                                            <input type="text" class="form-control"
                                                                name="epithelial_cells"
                                                                value="{{ old('epithelial_cells') }}"
                                                                placeholder="EpithelialCells"
                                                                data-kt-search-element="input">
                                                            @error('epithelial_cells')
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
