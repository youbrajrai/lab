@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Edit Systemic Examination Report
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Systemic Examination</li>
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
                                            method="POST" action="{{ route('systemics.update', $systemic->report_id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                                    <h3 class="mb-8">Systemic Examination</h3>
                                                    <div class="row gx-10 gy-8 mb-18">
                                                        <div class="col-lg-4">
                                                            <h6>Cardiovascular</h6>
                                                            <select name="cardiovascular" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Cardiovascular"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="NAD"
                                                                    @if (old('cardiovascular', $systemic) == 'NAD') selected @endif>NAD
                                                                </option>
                                                                {{-- <option value="Present"
                                                                    @if (old('cardiovascular', $systemic) == 'Present') selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('cardiovascular')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Pulmonary</h6>
                                                            <select name="pulmonary" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Pulmonary"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="NAD"
                                                                    @if (old('pulmonary', $systemic) == 'NAD') selected @endif>NAD
                                                                </option>
                                                                {{-- <option value="Present"
                                                                    @if (old('pulmonary', $systemic) == 'Present') selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('pulmonary')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Gastroenterology</h6>
                                                            <select name="gastroenterology" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Gastroenterology"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="NAD"
                                                                    @if (old('gastroenterology', $systemic) == 'NAD') selected @endif>NAD
                                                                </option>
                                                                {{-- <option value="Present"
                                                                    @if (old('gastroenterology', $systemic) == 'Present') selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('gastroenterology')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Neurology</h6>
                                                            <select name="neurology" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Neurology"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="NAD"
                                                                    @if (old('neurology', $systemic) == 'NAD') selected @endif>NAD
                                                                </option>
                                                                {{-- <option value="Present"
                                                                    @if (old('neurology', $systemic) == 'Present') selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('neurology')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Musculoskeletal</h6>
                                                            <select name="musculoskeletal" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Musculoskeletal"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="NAD"
                                                                    @if (old('musculoskeletal', $systemic) == 'NAD') selected @endif>NAD
                                                                </option>
                                                                {{-- <option value="Present"
                                                                    @if (old('musculoskeletal', $systemic) == 'Present') selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('musculoskeletal')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Genitourinary</h6>
                                                            <select name="genitourinary" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Genitourinary"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="NAD"
                                                                    @if (old('genitourinary', $systemic) == 'NAD') selected @endif>NAD
                                                                </option>
                                                                {{-- <option value="Present"
                                                                    @if (old('genitourinary', $systemic) == 'Present') selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('genitourinary')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Oro - Dental</h6>
                                                            <select name="dental" aria-label="Select an Option"
                                                                data-control="" data-placeholder="OroDental"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="1"
                                                                    @if (old('dental', $systemic) == 1) selected @endif>
                                                                    Normal</option>
                                                                {{-- <option value="0"
                                                                    @if (old('dental', $systemic) == 0) selected @endif>
                                                                    Infected</option> --}}
                                                            </select>
                                                            @error('dental')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Extremities / Deformities</h6>
                                                            <select name="extremities_deformities"
                                                                aria-label="Select an Option" data-control=""
                                                                data-placeholder="Extremities / Deformities"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="NAD"
                                                                    @if (old('extremities_deformities', $systemic) == 'NAD') selected @endif>NAD
                                                                </option>
                                                                {{-- <option value="Present"
                                                                    @if (old('extremities_deformities', $systemic) == 'Present') selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('extremities_deformities')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Varicose Veins</h6>
                                                            <select name="varicose_veins" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Varicose"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('varicose_veins', $systemic) == 0) selected @endif>
                                                                    Absent</option>
                                                                {{-- <option value="1"
                                                                    @if (old('varicose_veins', $systemic) == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('varicose_veins')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Hernia</h6>
                                                            <select name="hernia" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Hernia"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="0"
                                                                    @if (old('hernia', $systemic) == 0) selected @endif>
                                                                    Absent</option>
                                                                {{-- <option value="1"
                                                                    @if (old('hernia', $systemic) == 1) selected @endif>
                                                                    Present</option> --}}
                                                            </select>
                                                            @error('hernia')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Hydrocele</h6>
                                                            <select name="hydrocele" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Hydrocele"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="Absent"
                                                                    @if (old('hydrocele') == 'Absent') selected @endif>
                                                                    Absent</option>
                                                                {{-- <option value="Normal"
                                                                    @if (old('hydrocele') == 'Normal') selected @endif>
                                                                    Normal</option> --}}
                                                                {{-- <option value="Infected"
                                                                    @if (old('hydrocele', $systemic) == 'Infected') selected @endif>
                                                                    Infected</option> --}}
                                                            </select>
                                                            @error('hydrocele')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>L.Eye</h6>
                                                            <select name="left_eye" aria-label="Select an Option"
                                                                data-control="" data-placeholder="LEye"
                                                                class="form-select form-select-md form-select-solid">
                                                                {{-- <option value="1/6"
                                                                    @if (old('left_eye', $systemic) == '1/6') selected @endif>1/6
                                                                </option> --}}
                                                                {{-- <option value="2/6"
                                                                    @if (old('left_eye', $systemic) == '2/6') selected @endif>2/6
                                                                </option> --}}
                                                                {{-- <option value="3/6"
                                                                    @if (old('left_eye', $systemic) == '3/6') selected @endif>3/6
                                                                </option> --}}
                                                                {{-- <option value="4/6"
                                                                    @if (old('left_eye', $systemic) == '4/6') selected @endif>4/6
                                                                </option> --}}
                                                                {{-- <option value="5/6"
                                                                    @if (old('left_eye', $systemic) == '5/6') selected @endif>5/6
                                                                </option> --}}
                                                                <option value="6/6"
                                                                    @if (old('left_eye', $systemic) == '6/6') selected @endif>6/6
                                                                </option>
                                                            </select>
                                                            @error('left_eye')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>R.Eye</h6>
                                                            <select name="right_eye" aria-label="Select an Option"
                                                                data-control="" data-placeholder="REye"
                                                                class="form-select form-select-md form-select-solid">
                                                                {{-- <option value="1/6"
                                                                    @if (old('right_eye', $systemic) == '1/6') selected @endif>1/6
                                                                </option> --}}
                                                                {{-- <option value="2/6"
                                                                    @if (old('right_eye', $systemic) == '2/6') selected @endif>2/6
                                                                </option> --}}
                                                                {{-- <option value="3/6"
                                                                    @if (old('right_eye', $systemic) == '3/6') selected @endif>3/6
                                                                </option> --}}
                                                                {{-- <option value="4/6"
                                                                    @if (old('right_eye', $systemic) == '4/6') selected @endif>4/6
                                                                </option> --}}
                                                                {{-- <option value="5/6"
                                                                    @if (old('right_eye', $systemic) == '5/6') selected @endif>5/6
                                                                </option> --}}
                                                                <option value="6/6"
                                                                    @if (old('right_eye', $systemic) == '6/6') selected @endif>6/6
                                                                </option>
                                                            </select>
                                                            @error('right_eye')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>L.Ear</h6>
                                                            <select name="left_ear" aria-label="Select an Option"
                                                                data-control="" data-placeholder="LEar"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="1"
                                                                    @if (old('left_ear', $systemic) == 1) selected @endif>
                                                                    Normal</option>
                                                                {{-- <option value="0"
                                                                    @if (old('left_ear', $systemic) == 0) selected @endif>Bad
                                                                </option> --}}
                                                            </select>
                                                            @error('left_ear')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>R.Ear</h6>
                                                            <select name="right_ear" aria-label="Select an Option"
                                                                data-control="" data-placeholder="REar"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="1"
                                                                    @if (old('right_ear', $systemic) == 1) selected @endif>
                                                                    Normal</option>
                                                                {{-- < --}}option value="0"
                                                                @if (old('right_ear', $systemic) == 0)
                                                                    selected
                                                                @endif>Bad
                                                                </option> --}}
                                                            </select>
                                                            @error('right_ear')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Others</h6>
                                                            <input type="text" class="form-control" name="others"
                                                                value="{{ old('others', $systemic) }}"
                                                                placeholder="Others" data-kt-search-element="input"
                                                                readonly />
                                                            @error('others')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Radiological (Chest X-Ray)</h6>
                                                            <select name="chest_x_ray" aria-label="Select an Option"
                                                                data-control="" data-placeholder="Radiological"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="1"
                                                                    @if (old('chest_x_ray', $systemic) == 1) selected @endif>
                                                                    Normal</option>
                                                                {{-- <option value="0"
                                                                    @if (old('chest_x_ray', $systemic) == 0) selected @endif>Bad
                                                                </option> --}}
                                                            </select>
                                                            @error('chest_x_ray')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>ECG</h6>
                                                            <select name="ecg" aria-label="Select an Option"
                                                                data-control="" data-placeholder="ECG"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="1"
                                                                    @if (old('ecg', $systemic) == 1) selected @endif>
                                                                    Normal</option>
                                                                {{-- <option value="0"
                                                                    @if (old('ecg', $systemic) == 0) selected @endif>Bad
                                                                </option> --}}
                                                            </select>
                                                            @error('ecg')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6>Clinical Impression</h6>
                                                            <select name="clinical_impression"
                                                                aria-label="Select an Option" data-control=""
                                                                data-placeholder="Clinical"
                                                                class="form-select form-select-md form-select-solid">
                                                                <option value="1"
                                                                    @if (old('clinical_impression', $systemic) == 1) selected @endif>
                                                                    Normal</option>
                                                                {{-- <option value="0"
                                                                    @if (old('clinical_impression', $systemic) == 0) selected @endif>Bad
                                                                </option> --}}
                                                            </select>
                                                            @error('clinical_impression')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
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
