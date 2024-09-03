 <div id="kt_app_content" class="app-content flex-column-fluid pb-0">
     <div id="kt_app_content_container" class="app-container container-fluid">
         <div class="row g-5 g-xl-10">
             <div class="col-xxl-12">
                 <div class="card card-flush mb-8">
                     <div class="card-body px-20 py-10">
                         <div class="table-responsive px-10 pt-0 pb-10 ">
                             <h1 class="text-center px-8 py-1 mt-10 mb-0">PATHOLOGY REPORT</h1>
                             <form data-kt-search-element="form" class="w-100 position-relative mt-10" method="POST" action="{{ route('cannabies-pregnancy-tests.store') }}">
                                 @csrf

                                 <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">

                                     <div class="col-3 border-bottom mt-0">
                                         <h6 class="mb-0 py-5">Name:</h6>
                                     </div>
                                     <div class="col-3 border-bottom border-end mt-0">
                                         <input type="text" class="form-control my-2 py-2" name="name" value="{{ old('name') }}" placeholder="Patient's Name" data-kt-search-element="input" />
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
                                         <select name="sex" aria-label="Select an Option" data-control="select2" data-placeholder="Sex" class="form-select form-select-md form-select-solid my-2 py-2">
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
                                         <h6 class="mb-0 py-5">Date: </h6>
                                     </div>
                                     <div class="col-3 border-bottom mt-0">
                                         <input type="date" class="form-control my-2 py-2" name="medical_examination_date" value="<?php echo date('Y-m-d'); ?>" data-kt-search-element="input" />
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
                                         <input type="text" class="form-control my-2 py-2" name="address" placeholder="Address" value="{{ old('address') }}" data-kt-search-element="input" />
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
                                         <input type="text" class="form-control my-2 py-2" name="contact" placeholder="Contact No." value="{{ old('contact') }}" data-kt-search-element="input" />
                                         @error('contact')
                                         <span class="invalid-feedback d-block" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                         @enderror
                                     </div>

                                     <div class="col-3 mt-0">
                                         <h6 class="mb-0 py-5">Lab No: </h6>
                                     </div>
                                     <div class="col-3 mt-0 border-end">
                                         <input type="number" class="form-control my-2 py-2" name="lab" placeholder="Lab No." value="{{ old('lab') }}" data-kt-search-element="input" />
                                         @error('lab')
                                         <span class="invalid-feedback d-block" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                         @enderror
                                     </div>

                                     <div class="col-3 mt-0">
                                         <h6 class="mb-0 py-5">Referred by:</h6>
                                     </div>
                                     <div class="col-3 mt-0">
                                         <input type="text" class="form-control my-2 py-2" name="referred_by" placeholder="Referred by" value="{{ old('referred_by') }}" data-kt-search-element="input" />
                                         @error('referred_by')
                                         <span class="invalid-feedback d-block" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                         @enderror
                                     </div>

                                 </div>

                                 <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-10">
                                     <div class="col-3 border border-end-0">
                                         <h6 class="mb-0 py-4">Sample</h6>
                                     </div>
                                     <div class="col-3 border border-start-0 border-end-0">
                                         <h6 class="mb-0 py-4"></h6>
                                     </div>
                                     <div class="col-3 border border-start-0 border-end-0">
                                         <h6 class="mb-0 py-4">Urine</h6>
                                     </div>
                                     <div class="col-3 border border-start-0">
                                         <h6 class="mb-0 py-4"></h6>
                                     </div>
                                 </div>

                                 <div class="row gx-10 gy-8 mx-0 mt-10">

                                     <div class="col-6 mt-0">
                                         <h6 class="mb-0 py-4">TEST NAME</h6>
                                     </div>
                                     <div class="col-6 mt-0">
                                         <h6 class="mb-0 py-4">RESULT</h6>
                                     </div>

                                     <div class="col-6 my-2">
                                         <p class="mb-0 py-4">Urine for Pregnancy Test</p>
                                     </div>
                                     <div class="col-3 my-2">

                                         <select name="pregnancy_test" aria-label="Select an Option" data-control="" data-placeholder="Pregnancy Test" class="form-select form-select-md form-select-solid">
                                             <option value="-1">None</option>
                                             <option value="0">Negative</option>
                                             <option value="1">Positive</option>
                                         </select>

                                         @error('pregnancy_test')
                                         <span class="invalid-feedback d-block" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                         @enderror
                                     </div>

                                     <div class="col-6 my-2">
                                         <p class="mb-0 py-4">Cannabies Test</p>
                                     </div>
                                     <div class="col-3 my-2">

                                         <select name="cannabies_test" aria-label="Select an Option" data-control="" data-placeholder="Cannabies Test" class="form-select form-select-md form-select-solid">
                                             <option value="-1">None</option>
                                             <option value="0">Negative</option>
                                             <option value="1">Positive</option>
                                         </select>

                                         @error('cannabies_test')
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
 