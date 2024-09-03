@extends('layouts.print')
@section('document')
    <div class="tab-content print_report">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
            <div class="row gx-10 gy-8 align-items-center border-bottom border-dark py-5">
                <div class="offset-1 col-1">
                    <img style="width: 8rem; height: auto;" class="logo" src="{{Auth::User()->getFirstMediaUrl('images')}}" alt="">
                </div>
                <div class="col-7">
                    <h1 class="text-uppercase text-center">
                        {{$user->company_name}}
                    </h1>
                    <p class="mb-0 text-center">
                        (An authorized medical center by the
                            Government of Nepal)
                    </p>
                </div>
                <div class="col-2">
                    <p>Govt.Regd.License.No.20413/059/060</p>
                </div>
            </div>
            <div class="table-responsive px-20 pt-0 pb-10 ">
                <h1 class="text-center px-8 py-1 mt-12 mb-0">PATHOLOGY REPORT</h1>
                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <div class="col-3 border border-end-0">
                        <h6 class="mb-0 py-2">Name: {{$report->name}}</h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 py-2">Age/Sex: {{$report->age}}/@if($report->sex === 'male') M @else F @endif</h6>
                    </div>
                    <div class="col-3 border border-start-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 border border-end-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2">Patient ID: {{$report->id}}</h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2">Date: {{$report->medical_examination_date}}</h6>
                    </div>


                    <div class="col-3 border border-start-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 mt-0 border border-end-0 border-top-0">
                        <h6 class="mb-0 py-2">Referred by:{{!is_null($other)?$other->request_doctor: 'N/A'}}</h6>
                    </div>
                    <div class="col-3 mt-0 border border-start-0 border-end-0 border-top-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 mt-0 border border-start-0 border-end-0 border-top-0">
                        <h6 class="mb-0 py-2">Lab No: 3</h6>
                    </div>
                    <div class="col-3 mt-0 border border-start-0 border-top-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                </div>

                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <div class="col-3 border border-end-0">
                        <h6 class="mb-0 py-2">Sample</h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 py-2">Blood</h6>
                    </div>
                    <div class="col-3 border border-start-0">
                        <h6 class="mb-0 py-2">Urine</h6>
                    </div>
                </div>
                <h2 class="text-center px-8 py-1 mt-12 mb-0">
                    <u>L.F.T. (LIVER FUNCTION TEST)</u>
                </h2>
                <div class="row gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-2">TEST NAME</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">RESULT</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">NORMAL RANGE</h6>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Sr. Bilirubin Total</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2"> {{!is_null($biochemistry)?$biochemistry->sr_bilirubin_total:'N/A'}} mg%</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(0.4-1.0) mg%</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Sr. Bilirubin Direct</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sr_bilirubin_direct:'N/A'}} mg%</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(0.0-0.4) mg%</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Alkaline Phosphate</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->alkaline_phosphate: 'N/A'}} u/l</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(40-128) u/l</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">S.G.P.T (ALT)</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sgpt . 'u/l': 'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(5-35) u/l</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">S.G.O.T (AST)</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sgot. 'u/l': 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(8-40) u/l</p>
                    </div>
                </div>
                <h2 class="text-center px-8 py-1 mt-12 mb-0">
                    <u>KIDNEY FUNCTION TEST</u>
                </h2>
                <div class="row gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-2">TEST NAME</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">RESULT</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">NORMAL RANGE</h6>
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Urea</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->urea . 'mg/dl':'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(20-45) mg/dl</p>
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Creatinine</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->creatinine. 'mg/dl':'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(0.4-1.4) mg/dl</p>
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Sodium</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sodium.'mmol/L':'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(136-144) mmol/L</p>
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Pottasium</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->potassium . 'mmpl/L':'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(3.7-5.10) mmpl/L</p>
                    </div>
                </div>
                <h2 class="text-center px-8 py-1 mt-12 mb-0">
                    <u>LIPID PROFILE</u>
                </h2>
                <div class="row gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-2">TEST NAME</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">RESULT</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">NORMAL RANGE</h6>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Total Cholestrol</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2"> {{!is_null($other)?$other->total_cholestrol.'mg%': 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(150-250) mg%</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">HDL Cholestrol</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2"> {{!is_null($other)?$other->hdl_cholestrol.'mg%': 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(30-70) mg%</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">LDL Cholestrol</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2"> {{!is_null($other)?$other->ldl_cholestrol.'mg%': 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">Upto 135 mg%</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Triglyceride</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2"> {{!is_null($other)?$other->triglyceride.'mg%': 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">Upto 150 mg%</p>
                    </div>
                </div>
                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <h1 class="text-center px-8 py-1 mt-12 mb-0"><u>Urine Examination Report</u></h1>
                </div>
                <h2 class="text-center px-8 py-1 mt-12 mb-0">
                    <u>PHYSICAL EXAMINATION</u>
                </h2>
                <div class="row gx-10 gy-8 mx-0 mt-0">


                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-2">TEST NAME</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">RESULT</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<h6 class="mb-0 py-2">NORMAL RANGE</h6>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Colour</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->urine_color: 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(20-45) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Transparency</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->transparency: 'N/A'}} mg/dl</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(0.4-1.4) mg/dl</p>-->
                    </div>


                </div>


                <h2 class="text-center px-8 py-1 mt-12 mb-0">
                    <u>CHEMICAL EXAMINATION</u>
                </h2>
                <div class="row gx-10 gy-8 mx-0 mt-0">


                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-2">TEST NAME</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">RESULT</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<h6 class="mb-0 py-2">NORMAL RANGE</h6>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Reaction</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->reaction: 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(20-45) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Albumin</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->albumin:'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(0.4-1.4) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Urobilinogen</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->urobilinogen:'N/A'}} mg/dl</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(0.4-1.4) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Bile Salt</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->bile_salt:'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(0.4-1.4) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Bile Pigment</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->bile_pigment:'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(0.4-1.4) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Acetone</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->acetone:'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(0.4-1.4) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Ketone Bodies</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->ketone_bodies:'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(0.4-1.4) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Nitrite</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->nitrite:'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(0.4-1.4) mg/dl</p>-->
                    </div>


                </div>


                <h2 class="text-center px-8 py-1 mt-12 mb-0">
                    <u>MICROSCOPIC EXAMINATION</u>
                </h2>
                <div class="row gx-10 gy-8 mx-0 mt-0">


                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-2">TEST NAME</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">RESULT</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<h6 class="mb-0 py-2">NORMAL RANGE</h6>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Pus Cell</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->pus_cells:'N/A'}} /hpf</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(20-45) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">RBC</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->rbc_hpf:'N/A'}} /hpf</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(20-45) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Epithelial Cell</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->epithelial_cells:'N/A'}} /hpf</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(20-45) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Urates</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->urates:'N/A'}} /hpf</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(20-45) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Casts(Pus)</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->casts:'N/A'}} /hpf</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(20-45) mg/dl</p>-->
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Ca. Oxalate</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($urine)?$urine->ca_oxalate:'N/A'}} /hpf</p>
                    </div>
                    <div class="col-3 mt-0">
                        <!--<p class="mb-0 py-2">(20-45) mg/dl</p>-->
                    </div>
                </div>
                <h2 class="text-center px-8 py-1 mt-12 mb-0">
                    <u>BIOCHEMISTRY TEST</u>
                </h2>

                <div class="row gx-10 gy-8 mx-0 mt-0">


                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-2">TEST NAME</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">RESULT</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">NORMAL RANGE</h6>
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Blood Sugar</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->blood_sugar:'N/A'}} mg/dl</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(80 - 140) mg/dl</p>
                    </div>


                </div>
                <p class="text-end mt-20 mb-0">
                    ..................................................
                </p>

                <p class="text-end">
                    (Signature of Lab Technician)
                </p>

            </div>
        </div>
    </div>
@stop
