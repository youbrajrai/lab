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
                        <h6 class="mb-0 py-2">Referred by:{{!is_null($other)?$other->request_doctor:'N/A'}}</h6>
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
                        <h6 class="mb-0 py-2"></h6>
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
                        <p class="mb-0 py-2"> {{!is_null($biochemistry)?$biochemistry->sr_bilirubin_total. 'mg%':'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(0.4-1.0) mg%</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Sr. Bilirubin Direct</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sr_bilirubin_direct. 'mg%':'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(0.0-0.4) mg%</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Alkaline Phosphate</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->alkaline_phosphate . 'u/l' : 'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(40-128) u/l</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">S.G.P.T (ALT)</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sgpt . 'u/l' : 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(5-35) u/l</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">S.G.O.T (AST)</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sgot . 'u/l' : 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(8-40) u/l</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Total Protein</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->totalprotein . 'u/l' : 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(8-40) gm/dl</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Serum Albumin</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->serumalbumin . 'u/l' : 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(8-40) gm/dl</p>
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
