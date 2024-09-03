@extends('layouts.print')
@section('document')
    <div class="tab-content print_report">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
            <div class="row gx-10 gy-8 align-items-center justify-content-between pb-6 px-10">
                <div class="col-3">
                    <p class="mb-0">
                        Lab. Reg. No: BP-C-220</p>
                </div>
                <div class="offset-6 col-3">
                    <p class="mb-0 text-end">
                        Gov. Reg. No: {{ $user->regd_no }}</p>
                </div>
            </div>
            <div class="row gx-10 gy-8 align-items-center justify-content-center border-bottom border-dark px-10 pb-8">
                <div class="col-1 me-10">
                    <img src="{{ $user->getFirstMediaUrl('images') }}" alt="" />
                </div>
                <div class="col-10 me-10">
                    <div class="print-header text-center me-15">
                        <h1>
                            {{ $user->company_name }}
                        </h1>

                        <span class="text-gray-600 fw-semibold letter-spacing">
                            {{ $user->address }},{{ $user->phone }}
                        </span>
                        <p class="text-gray-800 fw-semibold letter-spacing">
                            <a href="mailto:{{ $user->email }}" class="text-decoration-none text-gray-800">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                                           class="text-decoration-none text-gray-800">www.udclab.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="table-responsive px-20 pt-0 pb-10">
                <h3 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">PATHOLOGY REPORT</h3>
                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-10">
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Name: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $kidneyReport->name }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Sex: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $kidneyReport->age }}/@if ($kidneyReport->sex === 'male')
                                M
                            @else
                                F
                            @endif
                        </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Patient ID: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $kidneyReport->id }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $kidneyReport->medical_examination_date }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Referred by: </h6>
                    </div>
                    <div class="col-3 mt-0 border-end">
                        <h6 class="mb-0 ml-n4rem p-4">{{ !is_null($kidneyReport) ? $kidneyReport->referred_by : 'N/A' }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Lab No: </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $kidneyReport->lab }}</h6>
                    </div>
                </div>

                <div class="row gx-10 gy-8 w-lg-100 mx-0 mt-6">
                    <div class="col-3 border border-end-0">
                        <h6 class="mb-0 p-4">Sample</h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 p-4"></h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 p-4">Blood</h6>
                    </div>
                    <div class="col-3 border border-start-0">
                        <h6 class="mb-0 p-4"></h6>
                    </div>
                </div>
                <h4 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">
                    KIDNEY FUNCTION TEST
                </h4>
                <div class="row border gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-4">TEST NAME</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-4">RESULT</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 py-4">NORMAL RANGE</h6>
                    </div>

                    @if ($kidneyReport->urea)
                    @if ($kidneyReport->urea > 45 || $kidneyReport->urea < 20)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Urea</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">{{ $kidneyReport->urea }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(20-45) mg/dl</p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 ">Urea</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 ">{{ $kidneyReport->urea }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 ">(20-45) mg/dl</p>
                        </div>
                        @endif
                    @endif

                    @if ($kidneyReport->creatinine)
                    @if ($kidneyReport->creatinine > 1.4 || $kidneyReport->creatinine < 0.4)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Creatinine</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">{{ $kidneyReport->creatinine }} </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(0.4-1.4) mg/dl</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">Creatinine</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">{{ $kidneyReport->creatinine }} </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">(0.4-1.4) mg/dl</p>
                        </div>
                        @endif
                    @endif

                    @if ($kidneyReport->sodium)
                    @if($kidneyReport->sodium > 144 || $kidneyReport->sodium < 136)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Sodium</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">{{ $kidneyReport->sodium }} </p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(136-144) mmol/L</p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Sodium</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">{{ $kidneyReport->sodium }} </p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">(136-144) mmol/L</p>
                        </div>
                        @endif
                    @endif

                    @if ($kidneyReport->potassium)
                    @if ($kidneyReport->potassium > 5.10 || $kidneyReport->potassium < 3.7)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Potassium</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">{{ $kidneyReport->potassium }} </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(3.7-5.10) mmpl/L</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">Potassium</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">{{ $kidneyReport->potassium }} </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">(3.7-5.10) mmpl/L</p>
                        </div>
                        @endif
                    @endif

                    @if ($kidneyReport->uric_acid_male && $kidneyReport->sex === 'male')
                    @if ($kidneyReport->uric_acid_male > 7 || $kidneyReport->uric_acid_male < 3)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Uric Acid Male</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">{{ $kidneyReport->uric_acid_male }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(3 - 7 mg)/dl</p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Uric Acid Male</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">{{ $kidneyReport->uric_acid_male }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">(3 - 7 mg)/dl</p>
                        </div>
                        @endif
                    @endif

                    @if ($kidneyReport->uric_acid_female && $kidneyReport->sex === 'female')
                    @if ($kidneyReport->uric_acid_female > 6 || $kidneyReport->uric_acid_female < 2)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Uric Acid Female</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">{{ $kidneyReport->uric_acid_female }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(2 - 6 mg)/dl</p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Uric Acid Female</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">{{ $kidneyReport->uric_acid_female }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">(2 - 6 mg)/dl</p>
                        </div>
                        @endif
                    @endif

                </div>

                <div class="d-flex ms-auto w-50 justify-content-between">
                    <div>
                        <p class="text-end sig-text">
                            ..................................................
                        </p>
                        <p class="text-end">
                            (Signature of Lab Technician)
                        </p>
                    </div>
                    <div>
                        <p class="text-end sig-text">
                            ...........................................
                        </p>
                        <p class="text-end">
                            (Signature of Pathologist)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
