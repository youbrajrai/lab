<div id="kt_app_content" class="app-content flex-column-fluid pb-0">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-10">
            <div class="col-xxl-12">
                <div class="card card-flush mb-8">
                    <div class="table-responsive px-10 pt-0 pb-10">
                        <h1 class="text-center px-8 py-1 mt-10 mb-0">PATHOLOGY REPORT</h1>

                        <h2 class="text-center px-8 py-1 mt-15 mb-3"><u>BIOCHEMISTRY TEST</u></h2>
                        <input type="hidden" name="test_type[]" value="biochemistry">
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

                            <!-- Existing Tests -->

                            <div class="col-6 mt-0">
                                <p class="mb-0 py-4">Blood Sugar (F)</p>
                            </div>
                            <div class="col-3 mt-0">
                                <input type="number" step="any" class="form-control my-2 py-2" name="biochemistry[blood_sugar_f]" value="{{ old('biochemistry.blood_sugar_f') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                @error('biochemistry.blood_sugar_f')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3 mt-0">
                                <p class="mb-0 py-4">(70 - 110) mg/dl</p>
                            </div>

                            <div class="col-6 mt-0">
                                <p class="mb-0 py-4">Blood Sugar (PP)</p>
                            </div>
                            <div class="col-3 mt-0">
                                <input type="number" step="any" class="form-control my-2 py-2" name="biochemistry[blood_sugar_pp]" value="{{ old('biochemistry.blood_sugar_pp') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                @error('biochemistry.blood_sugar_pp')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3 mt-0">
                                <p class="mb-0 py-4">(70 - 140) mg/dl</p>
                            </div>

                            <div class="col-6 mt-0">
                                <p class="mb-0 py-4">Blood Sugar (R)</p>
                            </div>
                            <div class="col-3 mt-0">
                                <input type="number" step="any" class="form-control my-2 py-2" name="biochemistry[blood_sugar_r]" value="{{ old('biochemistry.blood_sugar_r') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                @error('biochemistry.blood_sugar_r')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3 mt-0">
                                <p class="mb-0 py-4">(80 - 140) mg/dl</p>
                            </div>

                            <div class="col-6 mt-0">
                                <p class="mb-0 py-4">HbA1c</p>
                            </div>
                            <div class="col-3 mt-0">
                                <input type="number" step="any" class="form-control my-2 py-2" name="biochemistry[hba1c]" value="{{ old('biochemistry.hba1c') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                @error('biochemistry.hba1c')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3 mt-0">
                                <p class="mb-0 py-4">less than 5.7%</p>
                            </div>

                            <div class="col-6 mt-0">
                                <p class="mb-0 py-4">Blood Urea</p>
                            </div>
                            <div class="col-3 mt-0">
                                <input type="number" step="any" class="form-control my-2 py-2" name="biochemistry[blood_urea]" value="{{ old('biochemistry.blood_urea') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                @error('biochemistry.blood_urea')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3 mt-0">
                                <p class="mb-0 py-4">(20-45) mg/dl</p>
                            </div>

                            <div class="col-6 mt-0">
                                <p class="mb-0 py-4">S. Creatinine</p>
                            </div>
                            <div class="col-3 mt-0">
                                <input type="number" step="any" class="form-control my-2 py-2" name="biochemistry[s_ceratinine]" value="{{ old('biochemistry.s_ceratinine') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                @error('biochemistry.s_ceratinine')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3 mt-0">
                                <p class="mb-0 py-4">(0.4-1.4) mg/dl</p>
                            </div>

                            <!-- New Tests -->

                            <div class="col-6 mt-0">
                                <p class="mb-0 py-4">Serum Bilirubin</p>
                            </div>
                            <div class="col-3 mt-0">
                                <input type="number" step="any" class="form-control my-2 py-2" name="biochemistry[serum_bilirubin]" value="{{ old('biochemistry.serum_bilirubin') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                @error('biochemistry.serum_bilirubin')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3 mt-0">
                                <p class="mb-0 py-4">(0.2-1.2) mg/dl</p>
                            </div>

                            <div class="col-6 mt-0">
                                <p class="mb-0 py-4">Total Protein</p>
                            </div>
                            <div class="col-3 mt-0">
                                <input type="number" step="any" class="form-control my-2 py-2" name="biochemistry[total_protein]" value="{{ old('biochemistry.total_protein') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                @error('biochemistry.total_protein')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3 mt-0">
                                <p class="mb-0 py-4">(6-8) g/dl</p>
                            </div>

                            <div class="col-6 mt-0">
                                <p class="mb-0 py-4">Albumin</p>
                            </div>
                            <div class="col-3 mt-0">
                                <input type="number" step="any" class="form-control my-2 py-2" name="biochemistry[albumin]" value="{{ old('biochemistry.albumin') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                @error('biochemistry.albumin')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3 mt-0">
                                <p class="mb-0 py-4">(3.5-5.0) g/dl</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
