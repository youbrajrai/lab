 <div id="kt_app_content" class="app-content flex-column-fluid pb-0">
     <div id="kt_app_content_container" class="app-container container-fluid">
         <div class="row g-5 g-xl-10">
             <div class="col-xxl-12">
                 <div class="card card-flush mb-8">
                     <div class="card-body px-20 py-10">
                         <div class="table-responsive px-10 pt-0 pb-10">
                             <h1 class="text-center px-8 py-1 mt-12 mb-0">PATHOLOGY REPORT</h1>
                             <form data-kt-search-element="form" class="w-100 position-relative mt-10" method="POST" action="{{ route('kidney-reports.store') }}">
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

                                     {{-- <div class="col-3 border-bottom mt-0">
                                                    <h6 class="mb-0 py-5">Marital Status </h6>
                                                </div>
                                                <div class="col-3 border-bottom mt-0">
                                                    <select name="marital_status" aria-label="Select an Option"
                                                        data-control="select2" data-placeholder="Marital Status"
                                                        class="form-select form-select-md form-select-solid mb-0 py-2 my-2">
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
                                 <div class="col-3 border-bottom border-end mt-0">
                                     <input type="number" class="form-control my-2" name="lab" placeholder="Lab No." value="{{ old('lab') }}" data-kt-search-element="input" />
                                     @error('lab')
                                     <span class="invalid-feedback d-block" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                     @enderror
                                 </div>
                                 <div class="col-3 border-bottom mt-0">
                                     <h6 class="mb-0 py-5">Address: </h6>
                                 </div>
                                 <div class="col-3 border-bottom mt-0">
                                     <input type="text" class="form-control my-2" name="address" placeholder="Address" value="{{ old('address') }}" data-kt-search-element="input" />
                                     @error('address')
                                     <span class="invalid-feedback d-block" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                     @enderror
                                 </div>
                                 <div class="col-3 mt-0">
                                     <h6 class="mb-0 py-5">Contact: </h6>
                                 </div>
                                 <div class="col-3 border-end mt-0">
                                     <input type="text" class="form-control my-2" name="contact" placeholder="Contact No." value="{{ old('contact') }}" data-kt-search-element="input" />
                                     @error('contact')
                                     <span class="invalid-feedback d-block" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                     @enderror
                                 </div>

                                 <div class="col-3 mt-0">
                                     <h6 class="mb-0 py-5">Referred by:</h6>
                                 </div>
                                 <div class="col-3 mt-0">
                                     <input type="text" class="form-control my-2" name="referred_by" placeholder="Referred by" value="{{ old('referred_by') }}" data-kt-search-element="input" />
                                     @error('referred_by')
                                     <span class="invalid-feedback d-block" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                     @enderror
                                 </div>

                         </div>
                         <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                             <div class="col-3 border border-end-0">
                                 <h6 class="mb-0 py-4">Sample</h6>
                             </div>
                             <div class="col-3 border border-start-0 border-end-0">
                                 <h6 class="mb-0 py-4"></h6>
                             </div>
                             <div class="col-3 border border-start-0 border-end-0">
                                 <h6 class="mb-0 py-4">Blood</h6>
                             </div>
                             <div class="col-3 border border-start-0">
                                 <h6 class="mb-0 py-4"></h6>
                             </div>
                         </div>
                         <h2 class="text-center px-8 py-4 mt-12 mb-0"><u>KIDNEY FUNCTION TEST</u>
                         </h2>
                         <div class="row gx-10 gy-8 mx-0 mt-0">
                             <div class="col-6 mt-0">
                                 <h6 class="mb-0 py-4">TEST NAME</h6>
                             </div>
                             <div class="col-3 mt-0">
                                 <h6 class="mb-0 py-4">RESULT</h6>
                             </div>
                             <div class="col-3 mt-0">
                                 <h6 class="mb-0 py-4">NORMAL RANGE</h6>
                             </div>
                             <div class="col-6 mt-0">
                                 <p class="mb-0 py-4">Urea</p>
                             </div>
                             <div class="col-3 mt-0">
                                 <input type="number" step="any" class="form-control my-2 py-2" name="urea" value="{{ old('urea') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                 {{-- <span>mg/dl</span> --}}
                                 @error('urea')
                                 <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>
                             <div class="col-3 mt-0">
                                 <p class="mb-0 py-4">(20-45) mg/dl</p>
                             </div>
                             <div class="col-6 mt-0">
                                 <p class="mb-0 py-4">Creatinine</p>
                             </div>
                             <div class="col-3 mt-0">
                                 <input type="number" step="any" class="form-control my-2 py-2" name="creatinine" value="{{ old('creatinine') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                 {{-- <span>mg/dl</span> --}}
                                 @error('creatinine')
                                 <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>
                             <div class="col-3 mt-0">
                                 <p class="mb-0 py-4">(0.4-1.4) mg/dl</p>
                             </div>
                             <div class="col-6 mt-0">
                                 <p class="mb-0 py-4">Sodium</p>
                             </div>
                             <div class="col-3 mt-0">
                                 <input type="number" step="any" class="form-control my-2 py-2" name="sodium" value="{{ old('sodium') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                 {{-- <span>mmol/L</span> --}}
                                 @error('sodium')
                                 <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>
                             <div class="col-3 mt-0">
                                 <p class="mb-0 py-4">(136-144) mmol/L</p>
                             </div>
                             <div class="col-6 mt-0">
                                 <p class="mb-0 py-4">Potassium</p>
                             </div>
                             <div class="col-3 mt-0">
                                 <input type="number" step="any" class="form-control my-2 py-2" name="potassium" value="{{ old('potassium') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                 {{-- <span>mmpl/L</span> --}}
                                 @error('potassium')
                                 <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>
                             <div class="col-3 mt-0">
                                 <p class="mb-0 py-4">(3.7-5.10) mmpl/L</p>
                             </div>
                             <div class="col-6 mt-0">
                                 <p class="mb-0 py-4">Uric Acid Male</p>
                             </div>
                             <div class="col-3 mt-0">
                                 <input type="number" step="any" class="form-control py-2 my-2" name="uric_acid_male" value="{{ old('uric_acid_male') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                 {{-- <span>mg/dl</span> --}}
                                 @error('uric_acid_male')
                                 <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>
                             <div class="col-3 mt-0">
                                 <p class="mb-0 py-4">(3 - 7)mg/dl</p>
                             </div>
                             <div class="col-6 mt-0">
                                 <p class="mb-0 py-4">Uric Acid Female</p>
                             </div>
                             <div class="col-3 mt-0">
                                 <input type="number" step="any" class="form-control py-2 my-2" name="uric_acid_female" value="{{ old('uric_acid_female') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                 {{-- <span>mg/dl</span> --}}
                                 @error('uric_acid_female')
                                 <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>
                             <div class="col-3 mt-0">
                                 <p class="mb-0 py-4">(3 - 7)mg/dl</p>
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
