  <div id="kt_app_content" class="app-content flex-column-fluid pb-0">
      <div id="kt_app_content_container" class="app-container container-fluid">
          <div class="row g-5 g-xl-10">
              <div class="col-xxl-12">
                  <div class="card card-flush mb-8">
                      <div class="card-body px-20 py-10">
                          <div class="table-responsive px-10 pt-0 pb-10 ">
                              <h1 class="text-center px-8 py-1 mt-10 mb-0">PATHOLOGY REPORT</h1>
                              <form data-kt-search-element="form" class="w-100 position-relative mt-10" method="POST" action="{{ route('urine-reports.store') }}">
                                  @csrf
                                  <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
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

                                  <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-10">
                                      <h2 class="text-center border border-dark border-3 pt-2 pb-2">Urine
                                          Examination Report</h2>
                                  </div>

                                  <h2 class="text-center px-8 py-1 mt-10 mb-3">
                                      <u>PHYSICAL EXAMINATION</u>
                                  </h2>
                                  <div class="row gx-10 gy-8 mx-0 mt-0">

                                      <div class="col-6 mt-0">
                                          <h6 class="mb-0 py-4">TEST NAME</h6>
                                      </div>
                                      <div class="col-3 mt-0">
                                          <h6 class="mb-0 py-4">RESULT</h6>
                                      </div>
                                      <div class="col-3 mt-0">
                                          <!--<h6 class="mb-0 py-2">NORMAL RANGE</h6>-->
                                      </div>

                                      <div class="col-6 mt-0">
                                          <p class="mb-0 py-4">Colour</p>
                                      </div>
                                      <div class="col-6 mt-0">
                                          <input type="text" step="any" class="form-control my-2 py-2" name="color" value="{{ old('color') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                          @error('color')
                                          <span class="invalid-feedback d-block" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                      <div class="col-6 mt-0">
                                          <p class="mb-0 py-4">Transparency</p>
                                      </div>
                                      <div class="col-6 mt-0">
                                          <input type="text" step="any" class="form-control my-2 py-2" name="transparency" value="{{ old('transparency') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                          @error('transparency')
                                          <span class="invalid-feedback d-block" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                      <div class="col-6 mt-0">
                                          <p class="mb-0 py-4">Sp. Gravity</p>
                                      </div>
                                      <div class="col-6 mt-0">
                                          <input type="text" step="any" class="form-control my-2 py-2" name="sp_gravity" value="{{ old('sp_gravity') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                          @error('sp_gravity')
                                          <span class="invalid-feedback d-block" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                  </div>

                                  <h2 class="text-center px-8 py-1 mt-10 mb-3">
                                      <u>CHEMICAL EXAMINATION</u>
                                  </h2>
                                  <div class="row gx-10 gy-8 mx-0 mt-0">

                                      <div class="col-6 mt-0">
                                          <h6 class="mb-0 py-4">TEST NAME</h6>
                                      </div>
                                      <div class="col-6 mt-0">
                                          <h6 class="mb-0 py-4">RESULT</h6>
                                      </div>

                                      <div class="col-6 mt-0">
                                          <p class="mb-0 py-4">Reaction</p>
                                      </div>
                                      <div class="col-6 mt-0">
                                          <input type="text" step="any" class="form-control my-2 py-2" name="reaction" value="{{ old('reaction') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                          @error('reaction')
                                          <span class="invalid-feedback d-block" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                      <div class="col-6 mt-0">
                                          <p class="mb-0 py-4">Albumin</p>
                                      </div>
                                      <div class="col-6 mt-0">
                                          <input type="text" step="any" class="form-control my-2 py-2" name="albumin" value="{{ old('albumin') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                          @error('albumin')
                                          <span class="invalid-feedback d-block" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                      <div class="col-6 mt-0">
                                          <p class="mb-0 py-4">Sugar</p>
                                      </div>
                                      <div class="col-6 mt-0">
                                          <input type="text" step="any" class="form-control my-2 py-2" name="sugar" value="{{ old('sugar') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                                          @error('sugar')
                                          <span class="invalid-feedback d-block" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                      <div class="col-6 mt-0">
                                          <p class="mb-0 py-4">Urobilinogen</p>
                                      </div>
                                      <div class="col-3 mt-3">

                                          {{-- <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="urobilinogen" value="{{ old('urobilinogen') }}"
                                          data-kt-search-element="input"
                                          style="width:50%; display: inline;"> --}}

                                          <select name="urobilinogen" aria-label="Select an Option" data-control="" data-placeholder="Urobilinogen" class="form-select form-select-md form-select-solid">
                                              <option value="-1">None</option>
                                              <option value="0">Negative</option>
                                              <option value="1">Positive</option>
                                          </select>

                                          @error('urobilinogen')
                                          <span class="invalid-feedback d-block" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                      <div class="col-6 mt-0">
                                          <p class="mb-0 py-4">Bile Salt</p>
                                      </div>
                                      <div class="col-3 mt-3">

                                          {{-- <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="bile_salt" value="{{ old('bile_salt') }}"
                                          data-kt-search-element="input"
                                          style="width:50%; display: inline;"> --}}

                                          <select name="bile_salt" aria-label="Select an Option" data-control="" data-placeholder="Bile Salt" class="form-select form-select-md form-select-solid">
                                              <option value="-1">None</option>
                                              <option value="0">Negative</option>
                                              <option value="1">Positive</option>
                                          </select>

                                          @error('bile_salt')
                                          <span class="invalid-feedback d-block" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>

                                      {{-- <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Bile Pigment</p>
                                                </div>
                                                <div class="col-3 mt-3">

                                                    <select name="bile_pigment" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Bile Pigment"
                                                        class="form-select form-select-md form-select-solid">
                                                        <option value="-1">None</option>
                                                        <option value="0">Negative</option>
                                                        <option value="1">Positive</option>
                                                    </select>

                                                    @error('bile_pigment')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                  </div> --}}

                                  {{-- <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Urine for Pregnancy Test</p>
                                                </div>
                                                <div class="col-3 mt-3">

                                                    <select name="pregnancy_test" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Pregnancy Test"
                                                        class="form-select form-select-md form-select-solid">
                                                         <option value="-1">None</option>
                                                        <option value="0">Negative</option>
                                                        <option value="1">Positive</option>
                                                    </select>

                                                    @error('pregnancy_test')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                          </div> --}}

                          {{-- <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Cannabies Test</p>
                                                </div>
                                                <div class="col-3 mt-3">

                                                    <select name="cannabies_test" aria-label="Select an Option"
                                                        data-control="" data-placeholder="Cannabies Test"
                                                        class="form-select form-select-md form-select-solid">
                                                         <option value="-1">None</option>
                                                        <option value="0">Negative</option>
                                                        <option value="1">Positive</option>
                                                    </select>

                                                    @error('cannabies_test')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div> --}}

                      {{-- <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Acetone</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="acetone" value="{{ old('acetone') }}"
                      data-kt-search-element="input"
                      style="width:50%; display: inline;">
                      @error('acetone')
                      <span class="invalid-feedback d-block" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>

                  <div class="col-6 mt-0">
                      <p class="mb-0 py-4">Ketone Bodies</p>
                  </div>
                  <div class="col-6 mt-0">
                      <input type="text" step="any" class="form-control my-2 py-2" name="ketone_bodies" value="{{ old('ketone_bodies') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                      @error('ketone_bodies')
                      <span class="invalid-feedback d-block" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>

                  <div class="col-6 mt-0">
                      <p class="mb-0 py-4">Nitrite</p>
                  </div>
                  <div class="col-6 mt-0">
                      <input type="text" step="any" class="form-control my-2 py-2" name="nitrite" value="{{ old('nitrite') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                      @error('nitrite')
                      <span class="invalid-feedback d-block" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div> --}}

              </div>

              <h2 class="text-center px-8 py-1 mt-10 mb-3">
                  <u>MICROSCOPIC EXAMINATION</u>
              </h2>
              <div class="row gx-10 gy-8 mx-0 mt-0">

                  <div class="col-6 mt-0">
                      <h6 class="mb-0 py-4">TEST NAME</h6>
                  </div>
                  <div class="col-6 mt-0">
                      <h6 class="mb-0 py-4">RESULT</h6>
                  </div>

                  <div class="col-6 mt-0">
                      <p class="mb-0 py-4">Pus Cell</p>
                  </div>
                  <div class="col-6 mt-0">
                      <input type="text" step="any" class="form-control my-2 py-2" name="pus_cell" value="{{ old('pus_cell') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                      {{-- <span> /hpf</span> --}}
                      @error('pus_cell')
                      <span class="invalid-feedback d-block" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>

                  <div class="col-6 mt-0">
                      <p class="mb-0 py-4">RBC</p>
                  </div>
                  <div class="col-6 mt-0">
                      <input type="text" step="any" class="form-control my-2 py-2" name="rbc" value="{{ old('rbc') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                      {{-- <span> /hpf</span> --}}
                      @error('rbc')
                      <span class="invalid-feedback d-block" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>

                  <div class="col-6 mt-0">
                      <p class="mb-0 py-4">Epithelial Cell</p>
                  </div>
                  <div class="col-6 mt-0">
                      <input type="text" step="any" class="form-control my-2 py-2" name="epithelial_cells" value="{{ old('epithelial_cells') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                      {{-- <span> /hpf</span> --}}
                      @error('epithelial_cells')
                      <span class="invalid-feedback d-block" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>

                  <div class="col-6 mt-0">
                      <p class="mb-0 py-4">Urates</p>
                  </div>
                  <div class="col-6 mt-0">
                      <input type="text" step="any" class="form-control my-2 py-2" name="urates" value="{{ old('urates') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                      {{-- <span> /hpf</span> --}}
                      @error('urates')
                      <span class="invalid-feedback d-block" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>

                  {{-- <div class="col-6 mt-0">
                                                    <p class="mb-0 py-4">Casts</p>
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <input type="text" step="any" class="form-control my-2 py-2"
                                                        name="casts" value="{{ old('casts') }}"
                  data-kt-search-element="input"
                  style="width:50%; display: inline;">

                  @error('casts')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div> --}}

              <div class="col-6 mt-0">
                  <p class="mb-0 py-4">Ca. Oxalate</p>
              </div>
              <div class="col-6 mt-0">
                  <input type="text" step="any" class="form-control my-2 py-2" name="ca_oxalate" value="{{ old('ca_oxalate') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                  {{-- <span> /hpf</span> --}}
                  @error('ca_oxalate')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>

              <div class="col-6 mt-0">
                  <p class="mb-0 py-4">Other</p>
              </div>
              <div class="col-6 mt-0">
                  <input type="text" step="any" class="form-control my-2 py-2" name="other" value="{{ old('other') }}" data-kt-search-element="input" style="width:50%; display: inline;">
                  {{-- <span> /hpf</span> --}}
                  @error('other')
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
