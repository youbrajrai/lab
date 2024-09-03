 <div id="kt_app_content" class="app-content flex-column-fluid pb-0">
     <div id="kt_app_content_container" class="app-container container-fluid">
         <div class="row g-5 g-xl-10">
             <div class="col-xxl-12">
                 <div class="card card-flush mb-8">
                     <div class="card-body px-20 py-10">
                         <div class="table-responsive px-10 pt-0 pb-10">
                             <h2 class="text-center px-8 py-1 mt-10 mb-0">
                                 X-ray Reporting form
                             </h2>

                             <form data-kt-search-element="form" class="w-100 position-relative mt-10" method="POST" action="{{ route('xray-reports.store') }}">
                                 @csrf

                                 <h2 class="py-1 mt-12 mb-3"><u>Radiologist's Opinion</u></h2>

                                 <div class="gx-10 gy-8 mx-0 mt-2">

                                     {{-- <div class="mb-5 mt-0">
                                                    <textarea class="form-control form-control-solid" rows="4" id="radiologist_opinion"
                                                        name="radiologist_opinion"></textarea>
                                                </div> --}}

                                     <div class="mb-5 mt-0">
                                         <ul class="fs-3 lh-lg">
                                             <li>Soft tissue and body cage is normal.</li>
                                             <li>Trachea is central.</li>
                                             <li>Hilar shadow is within normal limit.</li>
                                             <li>Cardio and Costophrenic angles are clear bilaterally.</li>
                                             <li>Cardiac silhouette within normal limit.</li>
                                             <li>Cardio thoracic ratio is normal.</li>
                                         </ul>
                                     </div>

                                     <div class="row align-items-center mt-10 mb-5">
                                         <div class="col-3 mt-0">
                                             <h6 class="mb-0 py-5">Defects Seen: </h6>
                                         </div>
                                         <div class="col-3 mt-0">
                                             <select name="defect_seen" aria-label="Select an Option" data-control="select2" data-placeholder="Defect Seen" class="form-select form-select-md form-select-solid py-2" onchange='OtherOption(this.value);'>
                                                 <option value="Normal">Normal
                                                 </option>
                                                 <option value="Calcification">Calcification</option>
                                                 <option value="Pleural thickening">Pleural thickening
                                                 </option>
                                                 <option value="Fibrosis">Fibrosis</option>
                                                 <option value="Fibrocalcification">Fibrocalcification</option>
                                                 <option value="Other">Other</option>
                                             </select>

                                             <input type="text" class="form-control py-2 my-2" name="other" id="other_defect" value="{{ old('other') }}" data-kt-search-element="input" style="display: none;" />

                                             @error('defect_seen')
                                             <span class="invalid-feedback d-block" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                         </div>
                                     </div>

                                     <script type="text/javascript">
                                         function OtherOption(val) {
                                             var element = document.getElementById('other_defect');
                                             if (val == 'Other')
                                                 element.style.display = 'block';
                                             else
                                                 element.style.display = 'none';
                                         }
                                     </script>


                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 