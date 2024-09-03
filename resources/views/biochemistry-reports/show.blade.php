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
                            {{ $user->address }},
                            {{ $user->phone }}
                        </span>
                        <p class="text-gray-800 fw-semibold letter-spacing">
                            <a href="mailto:{{ $user->email }}" class="text-decoration-none text-black">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                                           class="text-decoration-none text-black">{{ $user->website }}</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="table-responsive px-20 pt-0 pb-10 ">
                <h3 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">PATHOLOGY REPORT</h3>
                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-0">
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Name: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $biochemistryReport->name }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Sex:
                        </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $biochemistryReport->age }}/@if ($biochemistryReport->sex === 'male')
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
                        <h6 class="mb-0 ml-n4rem p-4">{{ $biochemistryReport->id }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $biochemistryReport->medical_examination_date }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Referred by: </h6>
                    </div>
                    <div class="col-3 border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">
                            {{ !is_null($biochemistryReport) ? $biochemistryReport->referred_by : 'N/A' }}
                        </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Lab No: </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">3</h6>
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
                    BIOCHEMISTRY TEST
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

                    @if ($biochemistryReport->blood_sugar_f)
                    @if ($biochemistryReport->blood_sugar_f > 110)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Blood Sugar (F)</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">
                                {{ $biochemistryReport->blood_sugar_f }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(70 - 110) mg/dl</p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Blood Sugar (F)</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">
                                {{ $biochemistryReport->blood_sugar_f }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">(70 - 110) mg/dl</p>
                        </div>
                        @endif
                    @endif

                    @if ($biochemistryReport->blood_sugar_pp)
                    @if ($biochemistryReport->blood_sugar_pp > 180)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Blood Sugar (PP)</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">
                                {{ $biochemistryReport->blood_sugar_pp }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(70 - 180) mg/dl</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">Blood Sugar (PP)</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">
                                {{ $biochemistryReport->blood_sugar_pp }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">(70 - 180) mg/dl</p>
                        </div>
                        @endif
                    @endif

                    @if ($biochemistryReport->blood_sugar_r)
                    @if ($biochemistryReport->blood_sugar_r > 140)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Blood Sugar (R)</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">
                                {{ $biochemistryReport->blood_sugar_r }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(80 - 140) mg/dl</p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Blood Sugar (R)</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">
                                {{ $biochemistryReport->blood_sugar_r }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">(80 - 140) mg/dl</p>
                        </div>
                        @endif
                    @endif

                    @if ($biochemistryReport->hba1c)
                    @if ($biochemistryReport->hba1c > 8)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">HbA1c</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">
                                {{ $biochemistryReport->hba1c }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(5 - 8)%</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">HbA1c</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">
                                {{ $biochemistryReport->hba1c }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">(5 - 8)%</p>
                        </div>
                        @endif
                    @endif

                    @if ($biochemistryReport->blood_urea)
                    @if ($biochemistryReport->blood_urea > 45)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Blood Urea</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">
                                {{ $biochemistryReport->blood_urea }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(15 - 45)mg/dl</p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Blood Urea</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">
                                {{ $biochemistryReport->blood_urea }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">(15 - 45)mg/dl</p>
                        </div>
                        @endif
                    @endif

                    @if ($biochemistryReport->s_ceratinine)
                    @if ($biochemistryReport->s_ceratinine > 1.5)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">S. Ceratinine</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">
                                {{ $biochemistryReport->s_ceratinine }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(0.8 - 1.5)mg%</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">S. Ceratinine</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">
                                {{ $biochemistryReport->s_ceratinine }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">(0.8 - 1.5)mg%</p>
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
