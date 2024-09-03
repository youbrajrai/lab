@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Insert Blood Report Details
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Create Blood Report</li>
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
                                            <p class="mb-0">S.N. : {{ $bloodReport->id }}</p>
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
                                    <form data-kt-search-element="form" class="w-100 position-relative" method="POST"
                                        action="{{ route('blood-reports.update', $bloodReport) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="table-responsive px-10 pt-0 pb-10">
                                            <h1 class="text-center px-8 py-10 mb-0">BLOOD REPORT</h1>

                                            <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">
                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-3">Name:</h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control my-2 py-2" name="name"
                                                        value="{{ old('name', $bloodReport) }}" placeholder="Name"
                                                        data-kt-search-element="input" />
                                                    @error('name')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-3">Sample No:</h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="number" class="form-control my-2 py-2" name="sample"
                                                        placeholder="Sample" value = "{{ old('sample', $bloodReport) }}"
                                                        data-kt-search-element="input" />
                                                    @error('sample')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-3">Age: </h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="number" class="form-control my-2 py-2" name="age"
                                                        value="{{ old('age', $bloodReport) }}" placeholder="Age"
                                                        data-kt-search-element="input" />
                                                    @error('age')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-3">Sex: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <select name="sex" aria-label="Select an Option"
                                                            data-control="select2" data-placeholder="Sex"
                                                            class="form-select form-select-md form-select-solid my-2 py-2">
                                                        <option value="male" @selected($bloodReport->sex === 'male')>Male</option>
                                                        <option value="female" @selected($bloodReport->sex === 'female')>Female</option>
                                                    </select>
                                                    @error('sex')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                {{-- <div class="col-3 mt-3">
                                                    <h6 class="mb-0 py-3">Marital Status:</h6>
                                                </div>
                                                <div class="col-3 mt-3">
                                                    <select name="marital_status" aria-label="Select an Option"
                                                        data-control="select2" data-placeholder="Marital Status"
                                                        class="form-select form-select-md form-select-solid py-2">
                                                        <option value="single" @selected($bloodReport->marital_status === 'single')>Single</option>
                                                        <option value="married" @selected($bloodReport->marital_status === 'married')>Married
                                                        </option>
                                                    </select>
                                                    @error('marital_status')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-3">Date:</h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="date" class="form-control my-2 py-2"
                                                        name="medical_examination_date"
                                                        value="{{ old('medical_examination_date', $bloodReport) }}"
                                                        data-kt-search-element="input" />
                                                    @error('medical_examination_date')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-3">Address:</h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="text" class="form-control my-2 py-2" name="address"
                                                        placeholder="Address"
                                                        value = "{{ old('address', $bloodReport) }}"
                                                        data-kt-search-element="input" />
                                                    @error('address')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                {{-- <div class="col-3 mt-3">
                                                    <h6 class="mb-0 py-3">Contact:</h6>
                                                </div>
                                                <div class="col-3 mt-3">
                                                    <input type="text" class="form-control mb-0 py-2" name="contact"
                                                        placeholder="Phone Number"
                                                        value = "{{ old('contact', $bloodReport) }}"
                                                        data-kt-search-element="input" />
                                                    @error('contact')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                {{-- <div class="col-3 mt-3">
                                                    <h6 class="mb-0 py-3">Passport No:</h6>
                                                </div>
                                                <div class="col-3 mt-3">
                                                    <input type="text" class="form-control mb-0 py-2"
                                                        name="passport_number" placeholder="Passport Number"
                                                        value = "{{ old('passport_number', $bloodReport) }}"
                                                        data-kt-search-element="input" />
                                                    @error('passport_number')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-3">Specimen:</h6>
                                                </div>
                                                <div class="col-3 border-end mt-0">
                                                    <input type="text" class="form-control my-2 py-2" name="specimen"
                                                        placeholder="Specimen"
                                                        value = "{{ old('specimen', $bloodReport) }}"
                                                        data-kt-search-element="input" readonly />
                                                    @error('specimen')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-3">Referred By:</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control my-2 py-2"
                                                        name="referred_by" placeholder="Referred by"
                                                        value = "{{ old('referred_by', $bloodReport) }}"
                                                        data-kt-search-element="input" />
                                                    @error('referred_by')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <h3 class="text-center px-8 py-1 mt-12 mb-4">
                                                <u>C.B.C. (Complete Blood Count)</u>
                                            </h3>

                                            <div class="row gx-10 gy-8 mx-0 mt-0">
                                                <div class="col-6 mt-0">
                                                    <h6 class="my-2 py-2">TEST NAME</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <h6 class="my-2 py-2">RESULT/UNIT</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <h6 class="my-2 py-2">NORMAL RANGE</h6>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">WBC</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2" name="wbc"
                                                        value = "{{ old('wbc', $bloodReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display:inline;" />
                                                    {{-- <span>cu.mm</span> --}}
                                                    @error('wbc')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">4000-11000/cu.mm<sup>3</sup></p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">RBC Male</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any"  class="form-control my-2 py-2" name="rbc_male"
                                                        value = "{{ old('rbc_male', $bloodReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display:inline;" />
                                                    {{-- <span>cu.mm</span> --}}
                                                    @error('rbc_male')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(4.5-6.5) million/cu.mm<sup>3</sup></p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">RBC Female</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="rbc_female" value = "{{ old('rbc_female', $bloodReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display:inline;" />
                                                    {{-- <span>cu.mm</span> --}}
                                                    @error('rbc_female')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(3.5-5.5) million/cu.mm<sup>3</sup></p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">Hb%</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="hemoglobin" value = "{{ old('hemoglobin', $bloodReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display:inline;" />
                                                    {{-- <span>gm/dl</span> --}}
                                                    @error('hemoglobin')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(12-16) gm%</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">Platelets</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2" name="platelets"
                                                        value = "{{ old('platelets', $bloodReport) }}"
                                                        data-kt-search-element="input"
                                                        style="width:50%; display:inline;" />
                                                    {{-- <span>cu.mm</span> --}}
                                                    @error('platelets')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">150000-450000 mm<sup>3</sup></p>
                                                </div>
                                            </div>

                                            <h3 class="text-center px-8 py-1 mt-12 mb-6"><u>DIFFERENTIAL COUNT</u></h3>

                                            <div class="row gx-10 gy-8 mx-0 mt-0">
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">Neutrophils</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="neutrophils" value="{{ old('neutrophils', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>%</span> --}}
                                                    @error('neutrophils')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(40-75) %</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">Lymphocytes</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="lymphocytes" value="{{ old('lymphocytes', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>%</span> --}}
                                                    @error('lymphocytes')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(20-45) %</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">Eosinophils</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="eosinophils" value="{{ old('eosinophils', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>%</span> --}}
                                                    @error('eosinophils')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(1-6) %</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">Monocytes</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="monocytes" value="{{ old('monocytes', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>%</span> --}}
                                                    @error('monocytes')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(2-10) %</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">Basophils</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="basophils" value="{{ old('basophils', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>%</span> --}}
                                                    @error('basophils')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(0-1) %</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">PCV (HCT)</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="pcv" value="{{ old('pcv', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>%</span> --}}
                                                    @error('pcv')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(37-54) %</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">MCV</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="mcv" value="{{ old('mcv', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>fl</span> --}}
                                                    @error('mcv')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(80-100) fl</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">MCH</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="mch" value="{{ old('mch', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>pg</span> --}}
                                                    @error('mch')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(27-34) pg</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">MCHC</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="mchc" value="{{ old('mchc', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>g/dl</span> --}}
                                                    @error('mchc')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(32-36) g/dl</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">PT</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="pt" value="{{ old('pt', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    {{-- <span>sec</span> --}}
                                                    @error('pt')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(12-16) sec</p>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">INR</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="inr" value="{{ old('inr', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    @error('inr')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(0.8-1.1)</p>
                                                </div>

                                                <div class="col-6 mt-0">
                                                    <p class="my-2 py-2">ESR</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="number" step="any" class="form-control my-2 py-2"
                                                        name="esr" value="{{ old('esr', $bloodReport) }}"
                                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                                    @error('esr')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="my-2 py-2">(0-20) mm/hr</p>
                                                </div>

                                            </div>
                                            <div class="row gx-10 gy-8 mx-0 mt-10">
                                                <div class="col-3 mt-0">
                                                    <a href = "{{ route('home') }}"
                                                        class="btn btn-sm fw-bold btn-danger me-4">Cancel</a>
                                                    <input type="hidden" name="user_id"
                                                        value="{{ Auth::user()->id }}" />
                                                    <button type="submit" class="btn btn-sm fw-bold btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_new_target">Submit</button>
                                                </div>
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


@stop
