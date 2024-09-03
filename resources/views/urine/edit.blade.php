@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Edit Urine Report
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
                                        @include('partials.formNav')
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST" action="{{ route('urines.update', $urine->report_id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                                    <h3 class="mb-8">Urine Test</h3>
                                                    <div class="row gx-10 gy-8 mb-14" bis_skin_checked="1">
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Color</h6>
                                                            <input type="text" class="form-control" name="urine_color"
                                                                value="{{ old('urine_color', $urine) }}" placeholder="Color"
                                                                data-kt-search-element="input">
                                                            @error('urine_color')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Transparency</h6>
                                                            <input type="text" class="form-control" name="transparency"
                                                                value="{{ old('transparency', $urine) }}"
                                                                placeholder="Transparency" data-kt-search-element="input">
                                                            @error('transparency')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Reaction</h6>
                                                            <input type="text" class="form-control" name="reaction"
                                                                value="{{ old('reaction', $urine) }}" placeholder="Reaction"
                                                                data-kt-search-element="input">
                                                            @error('reaction')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Albumin/Sugar</h6>
                                                            <input type="text" class="form-control" name="albumin_sugar"
                                                                value="{{old('albumin_sugar',$urine)}}" placeholder="Albumin/Sugar"
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
                                                                value="{{ old('albumin', $urine) }}" placeholder="Albumin"
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
                                                                value="{{ old('sugar', $urine) }}" placeholder="Sugar"
                                                                data-kt-search-element="input">
                                                            @error('urea')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Urobilinogen</h6>
                                                            <input type="text" class="form-control" name="urobilinogen"
                                                                value="{{ old('urobilinogen', $urine) }}"
                                                                placeholder="Urobilinogen" data-kt-search-element="input">
                                                            @error('urobilinogen')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Bile Salt</h6>
                                                            <input type="text" class="form-control" name="bile_salt"
                                                                value="{{ old('bile_salt', $urine) }}"
                                                                placeholder="BileSalt" data-kt-search-element="input">
                                                            @error('bile_salt')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Bile Pigment</h6>
                                                            <input type="text" class="form-control"
                                                                name="bile_pigment"
                                                                value="{{ old('bile_pigment', $urine) }}"
                                                                placeholder="BilePigment" data-kt-search-element="input">
                                                            @error('bile_pigment')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Acetone</h6>
                                                            <input type="text" class="form-control" name="acetone"
                                                                value="{{ old('acetone', $urine) }}"
                                                                placeholder="Acetone" data-kt-search-element="input">
                                                            @error('acetone')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Ketone Bodies</h6>
                                                            <input type="text" class="form-control"
                                                                name="ketone_bodies"
                                                                value="{{ old('ketone_bodies', $urine) }}"
                                                                placeholder="Ketone" data-kt-search-element="input">
                                                            @error('ketone_bodies')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Nitrite</h6>
                                                            <input type="text" class="form-control" name="nitrite"
                                                                value="{{ old('nitrite', $urine) }}"
                                                                placeholder="Nitrite" data-kt-search-element="input">
                                                            @error('nitrite')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Pus Cells /hpf</h6>
                                                            <input type="text" class="form-control"
                                                                name="pus_cells" value="{{ old('pus_cells', $urine) }}"
                                                                placeholder="PusCells" data-kt-search-element="input">
                                                            @error('pus_cells')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>RBCs /hpf</h6>
                                                            <input type="text" class="form-control"
                                                                name="rbc_hpf" value="{{ old('rbc_hpf', $urine) }}"
                                                                placeholder="RBC-hpf" data-kt-search-element="input" readonly>
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
                                                                value="{{ old('epithelial_cells', $urine) }}"
                                                                placeholder="EpithelialCells"
                                                                data-kt-search-element="input">
                                                            @error('epithelial_cells')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Urates</h6>
                                                            <input type="number" class="form-control" name="urates"
                                                                value="{{ old('urates', $urine) }}" placeholder="Urates"
                                                                data-kt-search-element="input">
                                                            @error('urates')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Casts(Pus)</h6>
                                                            <input type="number" class="form-control" name="casts"
                                                                value="{{ old('casts', $urine) }}" placeholder="Casts"
                                                                data-kt-search-element="input">
                                                            @error('casts')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div> --}}
                                                        
                                                        {{-- <div class="col-lg-4" bis_skin_checked="1">
                                                            <h6>Ca. Oxalate</h6>
                                                            <input type="number" class="form-control" name="ca_oxalate"
                                                                value="{{ old('ca_oxalate', $urine) }}"
                                                                placeholder="CaOxalate" data-kt-search-element="input">
                                                            @error('ca_oxalate')
                                                                <span class="invalid-feedback d-block" role="alert">
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
