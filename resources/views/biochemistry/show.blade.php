@extends('layouts.print')
@section('document')
    <div class="tab-content print_report">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
            <div class="d-flex justify-content-center align-items-center mt-10 mb-5">
                <img class="w-125px" src="{{Auth::User()->getFirstMediaUrl('images')}}">
                <div class="text-center">
                    <h2 class="fw-bold text-head">
                        {{$user->company_name}}
                    </h2>
                    <p class="mb-0">
                        (An authorized medical center by the
                        Government of Nepal)
                    </p>
                </div>
            </div>
            <div class="table-responsive px-20 pt-0 pb-10 ">
                <h1 class="text-center px-8 py-1 mt-12 mb-0">PATHOLOGY REPORT</h1>
                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <div class="col-lg-3 border border-end-0">
                        <h6 class="mb-0 py-2">Name: {{$report->name}}</h6>
                    </div>
                    <div class="col-lg-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-lg-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 py-2">Age/Sex: {{$report->age}}/@if($report->sex === 'male') M @else F @endif</h6>
                    </div>
                    <div class="col-lg-3 border border-start-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-lg-3 border border-end-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2">Patient ID: {{$report->id}}</h6>
                    </div>
                    <div class="col-lg-3 border border-start-0 border-end-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-lg-3 border border-start-0 border-end-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2">Date: {{$report->medical_examination_date}}</h6>
                    </div>


                    <div class="col-lg-3 border border-start-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-lg-3 mt-0 border border-end-0 border-top-0">
                        <h6 class="mb-0 py-2">Referred by: </h6>
                    </div>
                    <div class="col-lg-3 mt-0 border border-start-0 border-end-0 border-top-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-lg-3 mt-0 border border-start-0 border-end-0 border-top-0">
                        <h6 class="mb-0 py-2">Lab No: 3</h6>
                    </div>
                    <div class="col-lg-3 mt-0 border border-start-0 border-top-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                </div>

                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <div class="col-lg-3 border border-end-0">
                        <h6 class="mb-0 py-2">Sample</h6>
                    </div>
                    <div class="col-lg-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-lg-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 py-2">Blood</h6>
                    </div>
                    <div class="col-lg-3 border border-start-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                </div>
                <h2 class="text-center px-8 py-1 mt-12 mb-0">
                    <u>L.F.T. (LIVER FUNCTION TEST)</u>
                </h2>
                <div class="row gx-10 gy-8 mx-0 mt-0">
                    <div class="col-lg-6 mt-0">
                        <h6 class="mb-0 py-2">TEST NAME</h6>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <h6 class="mb-0 py-2">RESULT</h6>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <h6 class="mb-0 py-2">NORMAL RANGE</h6>
                    </div>
                    <div class="col-lg-6 mt-0">
                        <p class="mb-0 py-2">Sr. Bilirubin Total</p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2"> {{!is_null($biochemistry)?$biochemistry->sr_bilirubin_total. 'mg%':'N/A'}}</p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2">(0.4-1.0) mg%</p>
                    </div>
                    <div class="col-lg-6 mt-0">
                        <p class="mb-0 py-2">Sr. Bilirubin Direct</p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sr_bilirubin_direct. 'mg%':'N/A'}}</p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2">(0.0-0.4) mg%</p>
                    </div>
                    <div class="col-lg-6 mt-0">
                        <p class="mb-0 py-2">Alkaline Phosphate</p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->alkaline_phosphate . 'u/l' : 'N/A'}} </p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2">(40-128) u/l</p>
                    </div>
                    <div class="col-lg-6 mt-0">
                        <p class="mb-0 py-2">S.G.P.T (ALT)</p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sgpt . 'u/l' : 'N/A'}}</p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2">(5-35) u/l</p>
                    </div>
                    <div class="col-lg-6 mt-0">
                        <p class="mb-0 py-2">S.G.O.T (AST)</p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->sgot . 'u/l' : 'N/A'}}</p>
                    </div>
                    <div class="col-lg-3 mt-0">
                        <p class="mb-0 py-2">(8-40) u/l</p>
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
