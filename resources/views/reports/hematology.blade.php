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
                <h1 class="text-center px-8 py-1 mt-12 mb-0">
                    BLOOD REPORT
                </h1>
                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <div class="col-3 border border-bottom-0 border-end-0">
                        <h6 class="mb-0 py-2">Name: {{$report->name}}</h6>
                    </div>
                    <div class="col-3 border border-start-0 border-bottom-0 border-end-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 border border-start-0 border-bottom-0 border-end-0">
                        <h6 class="mb-0 py-2">Sample No:{{!is_null($hematology)?$hematology->id:'N/A'}}</h6>
                    </div>
                    <div class="col-3 border border-start-0 border-bottom-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 border border-end-0 border-bottom-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2">Age/Gender:  {{$report->age}}/@if($report->sex === 'male') M @else F @endif</h6>
                    </div>
                    <div class="col-3 border border-start-0 border-bottom-0 border-end-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 border border-start-0 border-bottom-0 border-end-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2">Date: {{$report->medical_examination_date}}</h6>
                    </div>
                    <div class="col-3 border border-start-0 border-bottom-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 mt-0 border border-end-0 border-bottom-0 border-top-0">
                        <h6 class="mb-0 py-2">Address: {{$report->address}} </h6>
                    </div>
                    <div class="col-3 mt-0 border border-start-0 border-bottom-0 border-end-0 border-top-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 mt-0 border border-start-0 border-bottom-0 border-end-0 border-top-0">
                        <h6 class="mb-0 py-2">Passport No: {{$report->passport_number}}</h6>
                    </div>


                    <div class="col-3 mt-0 border border-start-0 border-bottom-0 border-top-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                    <div class="col-3 mt-0 border border-end-0 border-top-0">
                        <h6 class="mb-0 py-2">Specimen:</h6>
                    </div>
                    <div class="col-9 mt-0 border border-start-0 border-top-0">
                        <h6 class="mb-0 py-2"></h6>
                    </div>
                </div>

                <h3 class="text-center px-8 py-1 mt-12 mb-5">
                    <u>C.B.C. (Complete Blood Count)</u>
                </h3>

                <div class="row gx-10 gy-8 mx-0 mt-0">


                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-2">TEST NAME</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">RESULT/UNIT</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-2">NORMAL RANGE</h6>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">WBC</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">  {{!is_null($hematology)?$hematology->wbc. '/ cu.mm':'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">4000-11000/cu.mm</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">RBC Male</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">  {{!is_null($hematology)?$hematology->rbc. '/ cu.mm':'N/A'}} / cu.mm</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(4-5) million/cu.mm</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">RBC Female</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">value for rbc female</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(4-5) million/cu.mm</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Hb%</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2"> {{!is_null($hematology)?$hematology->hemoglobin . 'gm/dl': 'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(12-16) gm/dl</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Platelets</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->platelets . '/cu.mm':'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">1500000-450000/cu.mm</p>
                    </div>



                </div>

                <h3 class="text-center px-8 py-1 mt-12 mb-5">
                    <u>DIFFERENTIAL COUNT</u>
                </h3>

                <div class="row gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Neutrophils</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->neutrophils.'%':'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(40-75) %</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Lymphocytes</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->lymphocytes.'%':'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(20-45) %</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Eosinophils</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->eosinophils.'%':'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(1-6) %</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Monocytes</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->monocytes.'%':'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(2-10) %</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">Basophils</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->basophils.'%': 'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(0-1) %</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">PCV (HCT)</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->pcv.'%':'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(37-54) %</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">MCV</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->mcv . 'fl':'N/A'}} </p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(80-100)fl</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">MCH</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->mch.'pg':'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(27-34) pg</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">MCHC</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">{{!is_null($hematology)?$hematology->mchc . 'g/dl':'N/A'}}</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">(32-36) g/dl</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">PT</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">pt value</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">Dont know</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-2">INR</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">inr value</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-2">Dont know</p>
                    </div>
                </div>

                <h3 class="text-center px-8 py-1 mt-12 mb-5">
                    <u>BIOCHEMISTRY REPORT</u>
                </h3>

                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">


                    <div class="col-4 border border-end-0 mt-0">
                        <h6 class="mb-0 py-2">Test Name</h6>
                    </div>
                    <div class="col-4 border border-start-0 border-end-0 mt-0">
                        <h6 class="mb-0 py-2">Result</h6>
                    </div>
                    <div class="col-4 border border-start-0 mt-0">
                        <h6 class="mb-0 py-2">Normal Range</h6>
                    </div>
                    <div class="col-4 border border-top-0 border-end-0 mt-0">
                        <h6 class="mb-0 py-2">Fasting Blood Sugar</h6>
                    </div>
                    <div class="col-4 border border-top-0 border-start-0 border-end-0 mt-0">
                        <h6 class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->fasting_blood_sugar . 'mg/dl':'N/A'}} </h6>
                    </div>
                    <div class="col-4 border border-top-0 border-start-0 mt-0">
                        <h6 class="mb-0 py-2">70-110 mg/dl</h6>
                    </div>
                    <div class="col-4 border border-top-0 border-end-0 mt-0">
                        <h6 class="mb-0 py-2">Blood Urea</h6>
                    </div>
                    <div class="col-4 border border-start-0 border-top-0 border-end-0 mt-0">
                        <h6 class="mb-0 py-2">{{!is_null($biochemistry)?$biochemistry->blood_urea . 'mg/dl': 'N/A'}}</h6>
                    </div>
                    <div class="col-4 border border-start-0 border-top-0 mt-0">
                        <h6 class="mb-0 py-2">20-45 mg/dl</h6>
                    </div>


                </div>

                <div class="row gx-10 gy-8 mx-0 mt-10">
                    <div class="col-2 mt-0">
                        <h6 class="mb-0 py-2"><u>SEROLOGY</u></h6>
                    </div>
                    <div class="col-4 mt-0">


                        <p class="mb-0 py-2">HBsAg: @if(!is_null($serology)) @if($serology->hbs_ag === 1) Positive @else Negative @endif @endif</p>
                        <p class="mb-0 py-2">Anti-HIV(1&amp;2): @if(!is_null($serology)) @if($serology->anti_hiv === 1) Reactive @else None Reactive @endif @endif</p>
                        <p class="mb-0 py-2">Anti-HCV: @if(!is_null($serology)) @if($serology->anti_hcv === 1) Positive @else Negative @endif @endif</p>
                        <p class="mb-0 py-2">VDRL/RPR: @if(!is_null($serology)) @if($serology->vdrl === 1) Reactive @else None Reactive @endif @endif</p>
                        <p class="mb-0 py-2">TPHA: @if(!is_null($serology))@if($serology->tpha === 1) Reactive @else None Reactive @endif @endif</p>
                        <p class="mb-0 py-2">Malarial Parasites: @if(!is_null($serology)) @if($serology->malaria_parasite === 1) Present @else Absent @endif @endif</p>


                    </div>
                </div>

                <p class="text-end mt-10 mb-0">
                    ..................................................
                </p>
                <p class="text-end">
                    (Signature of Lab Technician)
                </p>
            </div>
        </div>
    </div>
@stop
