<div id="kt_app_content" class="app-content flex-column-fluid pb-0">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-10">
            <div class="col-xxl-12">
                <div class="card card-flush mb-8">
                    <div class="card-body px-20 py-10">

                        <div class="table-responsive px-10 pt-0 pb-10">
                            <h1 class="text-center px-8 py-1 mt-10 mb-0">PATHOLOGY REPORT</h1>
                            <form data-kt-search-element="form" class="w-100 position-relative mt-10" method="POST" action="{{ route('stool-reports.store') }}">
                                @csrf
                                <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">
                                    <div class="col-3 border-bottom mt-0">
                                        <h6 class="mb-0 py-5">Name:</h6>
                                    </div>
                                    <div class="col-3 border-bottom border-end mt-0">
                                        <input type="text" class="form-control py-2 my-2" name="name" value="{{ old('name') }}" placeholder="Patient's Name" data-kt-search-element="input" />
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
                                        <input type="number" class="form-control my-2 py-2" name="age" value="{{ old('age') }}" placeholder="Age" data-kt-search-element="input" />
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
                                        <select name="sex" aria-label="Select an Option" data-control="select2" data-placeholder="Sex" class="form-select form-select-md form-select-solid py-2 my-2">
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
                                        <h6 class="mb-0 py-5">Contact: </h6>
                                    </div>
                                    <div class="col-3 border-bottom mt-0">
                                        <input type="text" class="form-control my-2" name="contact" placeholder="Contact No." value="{{ old('contact') }}" data-kt-search-element="input" />
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
                                        <input type="date" class="form-control my-2" name="medical_examination_date" value="<?php echo date('Y-m-d'); ?>" data-kt-search-element="input" />
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
                                        <input type="number" class="form-control my-2" name="lab" placeholder="Lab No." value="{{ old('lab') }}" data-kt-search-element="input" />
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

                                <div class="col-3 mt-0">
                                    <h6 class="mb-0 py-5">Referred by:</h6>
                                </div>
                                <div class="col-3 border-end mt-0">
                                    <input type="text" class="form-control my-2" name="referred_by" placeholder="Referred by" value="{{ old('referred_by') }}" data-kt-search-element="input" />
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

                        <h3 class="text-center px-8 py-1 mt-12 mb-3">
                            <u>STOOL EXAMINATION REPORT</u>
                        </h3>

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
                                <input type="text" class="form-control py-2 my-2" name="consistency" placeholder="Consistency" value="{{ old('consistency') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="reaction" placeholder="Reaction" value="{{ old('reaction') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="colour" placeholder="Colour" value="{{ old('colour') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="ocult_blood" placeholder="Ocult Blood" value="{{ old('ocult_blood') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="blood" placeholder="Blood" value="{{ old('blood') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="r_s" placeholder="R.S." value="{{ old('r_s') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="mucus" placeholder="Mucus" value="{{ old('mucus') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="chemical_others" placeholder="Others" value="{{ old('chemical_others') }}" data-kt-search-element="input" />
                                @error('chemical_others')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <h3 class="text-center px-8 py-4">
                            <u>MICROSCOPIC EXAM</u>
                        </h3>

                        <div class="row gx-10 gy-8 mx-0 mt-0">
                            <div class="col-4 mt-0">
                                <p class="mb-0 py-4">Protozoal Parasite</p>
                            </div>
                            <div class="col-4 mt-0">
                                <p class="mb-0 py-4">Cyst of</p>
                            </div>
                            <div class="col-4 mt-0">
                                {{-- <p class="mb-0 py-2">...... Seen</p> --}}
                                <input type="text" class="form-control py-2 my-2" name="cyst_of" placeholder="Cyst of" value="{{ old('cyst_of') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="tryphozoite_of" placeholder="Tryphozoite of" value="{{ old('tryphozoite_of') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="helmeinthic_parasite" placeholder="Helmeinthic Parasite" value="{{ old('helmeinthic_parasite') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="r_b_c" placeholder="R.B.C" value="{{ old('r_b_c') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="pus_cells" placeholder="Pus Cells" value="{{ old('pus_cells') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control py-2 my-2" name="undigested_food" placeholder="Undigested Food Particles" value="{{ old('undigested_food') }}" data-kt-search-element="input" />
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
                                <input type="text" class="form-control my-2" name="microscopic_others" placeholder="Others" value="{{ old('microscopic_others') }}" data-kt-search-element="input" />
                                @error('microscopic_others')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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