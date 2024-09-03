@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Update Stool Examination Details
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Stool Examination</li>
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
                                            {{-- <p class="mb-0">S.N. : {{ $kidneyReport->id }}</p> --}}
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
                                                 alt=""/>
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
                                                    <a href="mailto:{{ $user->email }}"
                                                       class="text-decoration-none text-gray-800">
                                                        {{ $user->email }}</a>, <a href="https://udclab.com/"
                                                                                   class="text-decoration-none text-gray-800">{{ $user->website }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive px-10 pt-0 pb-10">
                                        <h1 class="text-center px-8 py-1 mt-10 mb-0">PATHOLOGY REPORT</h1>
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                              method="POST" action="{{ route('stool-reports.update', $stoolReport) }}">
                                            @method('PUT')
                                            @csrf
                                            <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">
                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Name:</h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="text" class="form-control py-2 my-2" name="name"
                                                           value="{{ old('name', $stoolReport) }}"
                                                           placeholder="Patient's Name" data-kt-search-element="input"/>
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
                                                           value="{{ old('age', $stoolReport) }}" placeholder="Age"
                                                           data-kt-search-element="input"/>
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
                                                        <option value="male" @selected($stoolReport->sex === 'male')>
                                                            Male
                                                        </option>
                                                        <option
                                                            value="female" @selected($stoolReport->sex === 'female')>
                                                            Female
                                                        </option>
                                                    </select>
                                                    @error('sex')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Contact:</h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="text" class="form-control py-2 my-2" name="contact"
                                                           value="{{ old('contact', $stoolReport) }}"
                                                           placeholder="Contact No." data-kt-search-element="input"/>
                                                    @error('contact')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Date: </h6>
                                                </div>
                                                <div class="col-3 border-bottom border-end mt-0">
                                                    <input type="date" class="form-control my-2"
                                                           name="medical_examination_date"
                                                           value="{{ old('medical_examination_date', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('medical_examination_date')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Lab No: </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <input type="number" class="form-control my-2" name="lab"
                                                           placeholder="Lab No." value="{{ old('lab', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('lab')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                {{-- <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Address: </h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control my-2" name="address"
                                                        placeholder="Address" value="{{ old('address') }}"
                                                        data-kt-search-element="input" />
                                                    @error('address')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                {{-- <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Contact: </h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control my-2" name="contact"
                                                        placeholder="Contact No." value="{{ old('contact') }}"
                                                        data-kt-search-element="input" />
                                                    @error('contact')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                <div class="col-3 mt-0">
                                                    <h6 class="mb-0 py-5">Referred by:</h6>
                                                </div>
                                                <div class="col-3 border-end mt-0">
                                                    <input type="text" class="form-control my-2" name="referred_by"
                                                           placeholder="Referred by"
                                                           value="{{ old('referred_by', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('referred_by')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                                                <div class="col-lg-3 border border-end-0">
                                                    <h6 class="mb-0 py-4">Sample</h6>
                                                </div>
                                                <div class="col-lg-3 border border-start-0 border-end-0">
                                                    <h6 class="mb-0 py-4"></h6>
                                                </div>
                                                <div class="col-lg-3 border border-start-0 border-end-0">
                                                    <h6 class="mb-0 py-4">Stool</h6>
                                                </div>
                                                <div class="col-lg-3 border border-start-0">
                                                    <h6 class="mb-0 py-4"></h6>
                                                </div>
                                            </div>

                                            <h2 class="text-center px-8 py-1 mt-12 mb-3">
                                                <u>STOOL EXAMINATION REPORT</u>
                                            </h2>

                                            <div class="row gx-10 gy-8 mx-0 mt-0">
                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">PHYSICAL EXAM</h6>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <h6 class="mb-0 py-4">CHEMICAL EXAM</h6>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">Consistency</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control py-2 my-2" name="consistency"
                                                           placeholder="Consistency"
                                                           value="{{ old('consistency', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('consistency')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">Reaction</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="reaction" placeholder="Reaction"
                                                           value="{{ old('reaction', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('reaction')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">Color</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="colour" placeholder="Colour"
                                                           value="{{ old('colour', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('colour')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">Ocult Blood</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="ocult_blood" placeholder="Ocult Blood"
                                                           value="{{ old('ocult_blood', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('ocult_blood')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">Blood</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="blood" placeholder="Blood"
                                                           value="{{ old('blood', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('blood')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">R.S.</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="r_s" placeholder="R.S."
                                                           value="{{ old('r_s', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('r_s')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">Mucus</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="mucus" placeholder="Mucus"
                                                           value="{{ old('mucus', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('mucus')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <p class="mb-0 py-4">Others</p>
                                                </div>
                                                <div class="col-3 mt-0">
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="chemical_others" placeholder="Others"
                                                           value="{{ old('chemical_others', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('chemical_others')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <h6 class="text-center px-8 py-4">
                                                MICROSCOPIC EXAM
                                            </h6>

                                            <div class="row gx-10 gy-8 mx-0 mt-0">
                                                <div class="col-4 mt-0">
                                                    <p class="mb-0 py-4">Protozoal Parasite</p>
                                                </div>
                                                <div class="col-4 mt-0">
                                                    <p class="mb-0 py-4">Cyst of</p>
                                                </div>
                                                <div class="col-4 mt-0">
                                                    {{-- <p class="mb-0 py-2">...... Seen</p> --}}
                                                    <input type="text" class="form-control py-2 my-2" name="cyst_of"
                                                           placeholder="Cyst of"
                                                           value="{{ old('cyst_of', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('cyst_of')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="offset-4 col-4 mt-0">
                                                    <p class="mb-0 py-4">Tryphozoite of</p>
                                                </div>
                                                <div class="col-4 mt-0">
                                                    {{-- <p class="mb-0 py-2">...... Seen</p> --}}
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="tryphozoite_of"
                                                           placeholder="Tryphozoite of"
                                                           value="{{ old('tryphozoite_of', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('tryphozoite_of')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-8 mt-0">
                                                    <p class="mb-0 py-4">Helmeinthic Parasite</p>
                                                </div>
                                                <div class="col-4 mt-0">
                                                    {{-- <p class="mb-0 py-2">..............</p> --}}
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="helmeinthic_parasite"
                                                           placeholder="Helmeinthic Parasite"
                                                           value="{{ old('helmeinthic_parasite', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('helmeinthic_parasite')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-8 mt-0">
                                                    <p class="mb-0 py-4">R.B.C.</p>
                                                </div>
                                                <div class="col-4 mt-0">
                                                    {{-- <p class="mb-0 py-2">.............. /hpf</p> --}}
                                                    <input type="text" class="form-control py-2 my-2" name="r_b_c"
                                                           placeholder="R.B.C" value="{{ old('r_b_c', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('r_b_c')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-8 mt-0">
                                                    <p class="mb-0 py-4">Pus Cells</p>
                                                </div>
                                                <div class="col-4 mt-0">
                                                    {{-- <p class="mb-0 py-2">.............. /hpf</p> --}}
                                                    <input type="text" class="form-control py-2 my-2" name="pus_cells"
                                                           placeholder="Pus Cells"
                                                           value="{{ old('pus_cells', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('pus_cells')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-8 mt-0">
                                                    <p class="mb-0 py-4">Undigested food particles</p>
                                                </div>
                                                <div class="col-4 mt-0">
                                                    {{-- <p class="mb-0 py-2">.............. Seen</p> --}}
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="undigested_food"
                                                           placeholder="Undigested Food Particles"
                                                           value="{{ old('undigested_food', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('undigested_food')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-8 mt-0">
                                                    <p class="mb-0 py-4">Others</p>
                                                </div>
                                                <div class="col-4 mt-0">
                                                    {{-- <p class="mb-0 py-2">.............. Seen</p> --}}
                                                    <input type="text" class="form-control py-2 my-2"
                                                           name="microscopic_others" placeholder="Others"
                                                           value="{{ old('microscopic_others', $stoolReport) }}"
                                                           data-kt-search-element="input"/>
                                                    @error('microscopic_others')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-3 mt-10">
                                                <a href="{{ route('home') }}"
                                                   class="btn btn-sm fw-bold btn-danger me-4">Cancel</a>

                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                                                <button type="submit" class="btn btn-sm fw-bold btn-primary"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                                                    Submit
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
@stop
