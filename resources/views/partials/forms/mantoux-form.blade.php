<div id="kt_app_content" class="app-content flex-column-fluid pb-0">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-10">
            <div class="col-xxl-12">
                <div class="card card-flush mb-8">
                    <div class="card-body px-20 py-10">

                        <div class="table-responsive px-10 pt-0 pb-10">
                            <h1 class="text-center px-8 py-1 mt-10 mb-0">{{ isset($mantoux) ? 'Edit' : 'Create' }} MANTOUX REPORT</h1>
                                <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">
                                    <div class="col-3 border-bottom mt-0">
                                        <h6 class="mb-0 py-5">Name Of Candidates:</h6>
                                    </div>
                                    <div class="col-3 border-bottom border-end mt-0">
                                        <input type="text" class="form-control py-2 my-2" name="name" value="{{ old('name', $mantoux->name ?? '') }}" placeholder="Patient's Name" data-kt-search-element="input" />
                                        @error('name')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-3 border-bottom mt-0">
                                        <h6 class="mb-0 py-5">Passport No:</h6>
                                    </div>
                                    <div class="col-3 border-bottom mt-0">
                                        <input type="text" class="form-control py-2 my-2" name="passport_no" value="{{ old('passport_no', $mantoux->passport_no ?? '') }}" placeholder="Patient's Name" data-kt-search-element="input" />
                                        @error('passport_no')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-3 border-bottom mt-0">
                                        <h6 class="mb-0 py-5">Age: </h6>
                                    </div>
                                    <div class="col-3 border-bottom border-end mt-0">
                                        <input type="number" class="form-control my-2 py-2" name="age" value="{{ old('age', $mantoux->age ?? '') }}" placeholder="Age" data-kt-search-element="input" />
                                        @error('age')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-3 border-bottom mt-0">
                                        <h6 class="mb-0 py-5">Sex: </h6>
                                    </div>
                                    <div class="col-3 border-bottom mt-0">
                                        <select name="sex" aria-label="Select an Option" data-control="select2" data-placeholder="Sex" class="form-select form-select-md form-select-solid py-2 my-2">
                                            <option value="male" {{ (old('sex', $mantoux->sex ?? '') == 'male') ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ (old('sex', $mantoux->sex ?? '') == 'female') ? 'selected' : '' }}>Female</option>
                                        </select>
                                        @error('sex')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-3 mt-0">
                                        <h6 class="mb-0 py-5">Address: </h6>
                                    </div>
                                    <div class="col-3 mt-0 border-end">
                                        <input type="text" class="form-control my-2" name="address" placeholder="Address" value="{{ old('address', $mantoux->address ?? '') }}" data-kt-search-element="input" />
                                        @error('address')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-3 mt-0">
                                        <h6 class="mb-0 py-5">Date: </h6>
                                    </div>

                                </div>

                                <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-15">
                                    <div class="col-4 mt-0 border-bottom border-end">
                                        <h6 class="mb-0 py-5">Name of Test </h6>
                                    </div>
                                    <div class="col-4 mt-0 border-bottom border-end">
                                        <h6 class="mb-0 py-5">Result </h6>
                                    </div>
                                    <div class="col-4 mt-0 border-bottom">
                                        <h6 class="mb-0 py-5">Normal Value </h6>
                                    </div>

                                    <div class="col-4 mt-0 border-end">
                                        <h6 class="mb-0 py-5 fw-bolder">MANTOUX TEST</h6>
                                    </div>
                                    <div class="col-4 mt-0 border-end">
                                        <textarea name="result" rows="3" class="form-control my-2" style="resize: none;">{{ old('result', $mantoux->result ?? '') }}</textarea>
                                        @error('result')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-4 mt-0">
                                        <h6 class="mb-0 py-2 fw-bolder">&lt;10mm: Low risk group</h6>
                                        <h6 class="mb-0 py-2 fw-bolder">&gt;10mm: High risk group</h6>
                                        <h6 class="mb-0 py-2 fw-bolder">&gt;10mm: Extremely high risk group</h6>
                                    </div>
                                </div>

                                <div class="row border gx-10 gy-8 w-lg-50 ms-0 mt-15">
                                    <div class="col-6 mt-0">
                                        <h6 class="mb-0 py-5">Note: Injected side</h6>
                                    </div>
                                    <div class="col-6 mt-0">
                                        <input type="text" class="form-control my-2" name="injected_side" placeholder="Injected Side" value="{{ old('injected_side', $mantoux->injected_side ?? '') }}" data-kt-search-element="input" />
                                        @error('injected_side')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-6 mt-0">
                                        <h6 class="mb-0 py-5">Volume</h6>
                                    </div>
                                    <div class="col-6 mt-0">
                                        <input type="text" class="form-control my-2" name="volume" placeholder="Volume" value="{{ old('volume', $mantoux->volume ?? '') }}" data-kt-search-element="input" />
                                        @error('volume')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>