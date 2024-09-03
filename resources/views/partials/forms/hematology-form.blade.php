<div id="kt_app_content" class="app-content flex-column-fluid pb-0">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-10">
            <div class="col-xxl-12">
                <div class="card card-flush mb-8">
                    <div class="card-body px-20 py-10">
                        <div class="table-responsive px-10 pt-0 pb-10">
                            <h1 class="text-center px-8 py-10 mb-0">BLOOD REPORT</h1>
                            <h3 class="text-center px-8 py-1 mt-12 mb-4">
                                <u>C.B.C. (Complete Blood Count)</u>
                            </h3>
                            <input type="hidden" name="test_type[]" value="hematology">
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
                                    <input type="number" step="any" class="form-control my-2 py-2"
                                        name="hematology[wbc]" value="{{ old('hematology.wbc') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;" />
                                    @error('hematology.wbc')
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
                                    <input type="number" step="any" class="form-control my-2 py-2"
                                        name="hematology[rbc_male]" value="{{ old('hematology.rbc_male') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;" />
                                    @error('hematology.rbc_male')
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
                                        name="hematology[rbc_female]" value="{{ old('hematology.rbc_female') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;" />
                                    @error('hematology.rbc_female')
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
                                        name="hematology[hemoglobin]" value="{{ old('hematology.hemoglobin') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;" />
                                    @error('hematology.hemoglobin')
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
                                    <input type="number" step="any" class="form-control my-2 py-2"
                                        name="hematology[platelets]" value="{{ old('hematology.platelets') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;" />
                                    @error('hematology.platelets')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-3 mt-0">
                                    <p class="my-2 py-2">150000-450000 mm<sup>3</sup></p>
                                </div>
                            </div>

                            <h3 class="text-center px-8 py-1 mt-12 mb-5"><u>DIFFERENTIAL COUNT</u></h3>

                            <div class="row gx-10 gy-8 mx-0 mt-0">
                                <div class="col-6 mt-0">
                                    <p class="my-2 py-2">Neutrophils</p>
                                </div>
                                <div class="col-3 mt-0">
                                    <input type="number" step="any" class="form-control my-2 py-2"
                                        name="hematology[neutrophils]" value="{{ old('hematology.neutrophils') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                    @error('hematology.neutrophils')
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
                                        name="hematology[lymphocytes]" value="{{ old('hematology.lymphocytes') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                    @error('hematology.lymphocytes')
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
                                        name="hematology[eosinophils]" value="{{ old('hematology.eosinophils') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                    @error('hematology.eosinophils')
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
                                        name="hematology[monocytes]" value="{{ old('hematology.monocytes') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                    @error('hematology.monocytes')
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
                                        name="hematology[basophils]" value="{{ old('hematology.basophils') }}"
                                        data-kt-search-element="input" style="width:50%; display:inline;">
                                    @error('hematology.basophils')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-3 mt-0">
                                    <p class="my-2 py-2">(0-1) %</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
