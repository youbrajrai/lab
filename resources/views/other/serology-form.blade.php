<div class="m-0">
 <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 collapsible toggle active" data-bs-toggle="collapse" data-bs-target="#kt_job_4_3" aria-expanded="true">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Insert Serology Test Details
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Create Serology Test</li>
                        </ul>
                    </div>
                                 <!--begin::Icon-->
                                 <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                        <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1"><span class="path1"></span><span class="path2"></span></i>
                        <i class="ki-duotone ki-plus-square toggle-off fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </div>
                    <!--end::Icon-->
                </div>
            </div>
            <div id="kt_job_4_3" class="fs-6 ms-1 collapse show" style="">
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
                                                    <a href="mailto:{{ $user->email }}" class="text-decoration-none text-black">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                class="text-decoration-none text-black">{{ $user->website }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive px-10 pt-0 pb-10">
                                        <h1 class="text-center px-8 py-1 mt-10 mb-0">SEROLOGY REPORT</h1>
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST" action="{{ route('serology-reports.store') }}">
                                            @csrf

                                            <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Name:</h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control py-2 my-2" name="name"
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
                                                    <input type="number" class="form-control py-2 my-2" name="age"
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
                                                        class="form-select form-select-md form-select-solid py-2 my-2">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                    @error('sex')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                {{-- <div class="col-3 border border-end-0 border-top-0 mt-0">
                                                    <h6 class="mb-0 py-2">Marital Status </h6>
                                                </div>
                                                <div
                                                    class="col-3 border border-start-0 border-end-0 border-top-0 mt-0">
                                                    <select name="marital_status" aria-label="Select an Option"
                                                        data-control="select2" data-placeholder="Marital Status"
                                                        class="form-select form-select-md form-select-solid mb-0 py-2">
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                    </select>
                                                    @error('marital_status')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Date: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="date" class="form-control my-2"
                                                        name="medical_examination_date"
                                                        value="<?php echo date('Y-m-d'); ?>"
                                                        data-kt-search-element="input" />
                                                    @error('medical_examination_date')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Address: </h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control my-2" name="address"
                                                        placeholder="Address" value="{{ old('address') }}"
                                                        data-kt-search-element="input" />
                                                    @error('address')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Contact: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="text" class="form-control my-2" name="contact"
                                                        placeholder="Contact No." value="{{ old('contact') }}"
                                                        data-kt-search-element="input" />
                                                    @error('contact')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Referred by:</h6>
                                                </div>
                                                <div class="col-3 border-end mt-0">
                                                    <input type="text" class="form-control my-2" name="referred_by"
                                                        placeholder="Referred by" value="{{ old('referred_by') }}"
                                                        data-kt-search-element="input" />
                                                    @error('referred_by')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Lab No: </h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" class="form-control my-2" name="lab"
                                                        placeholder="Lab No." value="{{ old('lab') }}"
                                                        data-kt-search-element="input" />
                                                    @error('lab')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <h2 class="text-center px-8 py-1 my-12"><u>SEROLOGY TEST</u>
                                            </h2>


                                            <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">Anti-HIV (1&2)</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <select name="hiv_test" aria-label="Select an Option" data-control=""
                                                        data-placeholder="HIV Test"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1">
                                                            None
                                                        </option>
                                                        <option value="0">
                                                            Negative
                                                        </option>
                                                        <option value="1">
                                                            Positive
                                                        </option>
                                                    </select>
                                                    @error('hiv_test')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">Anti-HCV</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <select name="hcv" aria-label="Select an Option" data-control=""
                                                        data-placeholder="HCV"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1">
                                                            None
                                                        </option>
                                                        <option value="0">
                                                            Negative
                                                        </option>
                                                        <option value="1">
                                                            Positive
                                                        </option>
                                                    </select>
                                                    @error('hcv')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">HBs-Ag</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <select name="hbs_ag" aria-label="Select an Option" data-control=""
                                                        data-placeholder="HBs-Ag"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1">
                                                            None
                                                        </option>
                                                        <option value="0">
                                                            Negative
                                                        </option>
                                                        <option value="1">
                                                            Positive
                                                        </option>
                                                    </select>
                                                    @error('hbs_ag')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">VDRL</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <select name="vdrl" aria-label="Select an Option" data-control=""
                                                        data-placeholder="VDRL"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1">
                                                            None
                                                        </option>
                                                        <option value="0">
                                                            Non-Reactive
                                                        </option>
                                                        <option value="1">
                                                            Reactive
                                                        </option>
                                                    </select>
                                                    @error('VDRL')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">TPHA</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <select name="tpha" aria-label="Select an Option" data-control=""
                                                        data-placeholder="TPHA"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1">
                                                            None
                                                        </option>
                                                        <option value="0">
                                                            Negative
                                                        </option>
                                                        <option value="1">
                                                            Positive
                                                        </option>
                                                    </select>
                                                    @error('tpha')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">Rheumatoid</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <select name="rheumatoid" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Rheumatoid"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1">
                                                            None
                                                        </option>
                                                        <option value="0">
                                                            Negative
                                                        </option>
                                                        <option value="1">
                                                            Positive
                                                        </option>
                                                    </select>
                                                    @error('rheumatoid')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">CRP</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <select name="crp" aria-label="Select an Option" data-control=""
                                                        data-placeholder="CRP"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1">
                                                            None
                                                        </option>
                                                        <option value="0">
                                                            Negative
                                                        </option>
                                                        <option value="1">
                                                            Positive
                                                        </option>
                                                    </select>
                                                    @error('crp')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">ASO Titre</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control my-2" name="aso_titre"
                                                        placeholder="ASO Titre" value="{{ old('aso_titre') }}"
                                                        data-kt-search-element="input" />
                                                    @error('aso_titre')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">SR K39</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <select name="sr_k39" aria-label="Select an Option" data-control=""
                                                        data-placeholder="SR K39"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="0"
                                                            @if (old('sr_k39') == 0) selected @endif>
                                                            Negative
                                                        </option>
                                                        <option value="1"
                                                            @if (old('sr_k39') == 1) selected @endif>
                                                            Positive
                                                        </option>
                                                    </select>
                                                    @error('sr_k39')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row my-4">
                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-4">Optimal Test</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <select name="optimal_test" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Optimal Test"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="0"
                                                            @if (old('optimal_test') == 0) selected @endif>
                                                            Negative
                                                        </option>
                                                        <option value="1"
                                                            @if (old('optimal_test') == 1) selected @endif>
                                                            Positive
                                                        </option>
                                                    </select>
                                                    @error('optimal_test')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div> --}}

                                            <div class="col-3 mt-10">
                                                <a href="{{ route('home') }}"
                                                    class="btn btn-sm fw-bold btn-danger me-4">Cancel</a>

                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                                <button type="submit" class="btn btn-sm fw-bold btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Save
                                                </button>
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
