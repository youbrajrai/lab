            <div id="kt_app_content" class="app-content flex-column-fluid pb-0">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="row g-5 g-xl-10">
                        <div class="col-xxl-12">
                            <div class="card card-flush mb-8">
                                <div class="card-body px-20 py-10">
                                    <div class="table-responsive px-10 pt-0 pb-10">
                                        <h1 class="text-center px-8 py-1 mt-10 mb-0">SEROLOGY REPORT</h1>
                                        <form data-kt-search-element="form" class="w-100 position-relative mt-10"
                                            method="POST" action="{{ route('serology-reports.store') }}">
                                            @csrf
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
