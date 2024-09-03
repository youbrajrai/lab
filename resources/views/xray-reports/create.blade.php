@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            X-ray Report Form
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">X-ray Report Form</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="kt_app_content" class="app-content flex-column-fluid pb-0">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="row g-5 g-xl-10">
                        <div class="col-xxl-12">
                            <div class="card card-flush mb-8">
                                <div class="card-body px-20 py-10">
                                    <div class="row gx-10 gy-8 align-items-center justify-content-between pb-10 px-10">
                                        <div class="col-3">
                                            {{-- <p class="mb-0">S.N. : 1</p> --}}
                                        </div>
                                        <div class="offset-6 col-3">
                                            <p class="mb-0 text-end">
                                                Gov. Reg. No: {{ $user->regd_no }}</p>
                                        </div>
                                    </div>
                                    <div
                                        class="row gx-10 gy-8 align-items-center justify-content-center border-bottom border-dark px-10 pb-10">
                                        <div class="col-1 me-10">
                                            <img style="width: 8rem;" src="{{ $user->getFirstMediaUrl('images') }}"
                                                alt="" />
                                        </div>
                                        <div class="col-10 me-10">
                                            <div class="print-header text-center me-15">
                                                <h1>
                                                    {{ $user->company_name }}
                                                </h1>

                                                <span class="text-gray-600 fw-semibold fs-5 letter-spacing">
                                                    {{ $user->address }},{{ $user->phone }}
                                                </span>
                                                <p class="text-gray-800 fw-semibold fs-5 letter-spacing">
                                                    <a href="mailto:{{ $user->email }}" class="text-decoration-none text-gray-800">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                class="text-decoration-none text-gray-800">{{ $user->website }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive px-10 pt-0 pb-10">
                                        <h2 class="text-center px-8 py-1 mt-10 mb-0">
                                            X-ray Reporting form
                                        </h2>

                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST" action="{{ route('xray-reports.store') }}">
                                            @csrf
                                            <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Name:</h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control my-2 py-2" name="name"
                                                        value="{{ old('name') }}" placeholder="Patient's Name"
                                                        data-kt-search-element="input" />
                                                    @error('name')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Age: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="number" class="form-control my-2 py-2" name="age"
                                                        value="{{ old('age') }}" placeholder="Age"
                                                        data-kt-search-element="input" />
                                                    @error('age')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Sex: </h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <select name="sex" aria-label="Select an Option"
                                                        data-control="select2" data-placeholder="Sex"
                                                        class="form-select form-select-md form-select-solid my-2 py-2">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                    @error('sex')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Address: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="text" class="form-control my-2" name="country"
                                                        placeholder="Address" value="{{ old('country') }}"
                                                        data-kt-search-element="input" />
                                                    @error('country')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="my-2 py-2">X-ray requested for: </h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control my-2" name="requested_for"
                                                        placeholder="X-ray requested for"
                                                        value="{{ old('requested_for') }}"
                                                        data-kt-search-element="input" />
                                                    @error('requested_for')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Clinical history: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <select name="clinical_history" aria-label="Select an Option"
                                                        data-control="select2" data-placeholder="Clinical History"
                                                        class="form-select form-select-md form-select-solid my-2 py-2" onchange='ClinicalOtherOption(this.value);'>
                                                        <option value="Normal">Normal
                                                        </option>
                                                        <option value="Calcification">Calcification</option>
                                                        <option value="Pleural thickening">Pleural thickening
                                                        </option>
                                                        <option value="Fibrosis">Fibrosis</option>
                                                        <option value="Fibrocalcification">Fibrocalcification</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    
                                                    <input type="text" class="form-control py-2 my-2"
                                                        name="clinical_other" id="other_clinical"
                                                        value="{{ old('clinical_other') }}"
                                                        data-kt-search-element="input" style="display: none;" />
                                                    
                                                    @error('clinical_history')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    
                                                     <script type="text/javascript">
                                                    function ClinicalOtherOption(val) {
                                                        var element = document.getElementById('other_clinical');
                                                        if (val == 'Other')
                                                            element.style.display = 'block';
                                                        else
                                                            element.style.display = 'none';
                                                    }
                                                </script>
                                                    
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Requested by Dr. :</h6>
                                                </div>
                                                <div class="col-3 border-end mt-0">
                                                    <input type="text" class="form-control py-2 my-2"
                                                        name="requested_by" placeholder="Requested by"
                                                        value="{{ old('requested_by') }}"
                                                        data-kt-search-element="input" />
                                                    @error('requested_by')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Date: </h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="date" class="form-control py-2 my-2"
                                                        name="medical_examination_date"
                                                        value="<?php echo date('Y-m-d'); ?>"
                                                        data-kt-search-element="input" />
                                                    @error('medical_examination_date')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <h2 class="py-1 mt-12 mb-3"><u>Radiologist's Opinion</u></h2>

                                            <div class="gx-10 gy-8 mx-0 mt-2">

                                                {{-- <div class="mb-5 mt-0">
                                                    <textarea class="form-control form-control-solid" rows="4" id="radiologist_opinion"
                                                        name="radiologist_opinion"></textarea>
                                                </div> --}}

                                                <div class="mb-5 mt-0">
                        <ul class="fs-3 lh-lg">
                            <li>Soft tissue and body cage is normal.</li>
                            <li>Trachea is central.</li>
                            <li>Hilar shadow is within normal limit.</li>
                            <li>Cardio and Costophrenic angles are clear bilaterally.</li>
                            <li>Cardiac silhouette within normal limit.</li>
                            <li>Cardio thoracic ratio is normal.</li>
                        </ul>
                    </div>

                                                <div class="row align-items-center mt-10 mb-5">
                                                    <div class="col-3 mt-0">
                                                        <h6 class="mb-0 py-5">Defects Seen: </h6>
                                                    </div>
                                                    <div class="col-3 mt-0">
                                                        <select name="defect_seen" aria-label="Select an Option"
                                                            data-control="select2" data-placeholder="Defect Seen"
                                                            class="form-select form-select-md form-select-solid py-2" onchange='OtherOption(this.value);'>
                                                            <option value="Normal">Normal
                                                            </option>
                                                            <option value="Calcification">Calcification</option>
                                                            <option value="Pleural thickening">Pleural thickening
                                                            </option>
                                                            <option value="Fibrosis">Fibrosis</option>
                                                            <option value="Fibrocalcification">Fibrocalcification</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                        
                                                        <input type="text" class="form-control py-2 my-2"
                                                            name="other" id="other_defect" value="{{ old('other') }}"
                                                            data-kt-search-element="input" style="display: none;" />
                                                        
                                                        @error('defect_seen')
                                                            <span class="invalid-feedback d-block" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <script type="text/javascript">
                                                    function OtherOption(val) {
                                                        var element = document.getElementById('other_defect');
                                                        if (val == 'Other')
                                                            element.style.display = 'block';
                                                        else
                                                            element.style.display = 'none';
                                                    }
                                                </script>


                                                <div class="col-3 mt-10">
                                                    <a href="{{ route('home') }}"
                                                        class="btn btn-sm fw-bold btn-danger me-4">Cancel</a>

                                                    <input type="hidden" name="user_id"
                                                        value="{{ Auth::user()->id }}" />
                                                    <button type="submit" class="btn btn-sm fw-bold btn-primary"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Save
                                                    </button>
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
    </div>
    </div>
@stop
