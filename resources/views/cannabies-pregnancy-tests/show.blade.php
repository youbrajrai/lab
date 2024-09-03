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
                        <h1 class="text-uppercase">
                            {{ $user->company_name }}
                        </h1>

                        <span class="text-gray-600 fw-semibold letter-spacing">
                            {{ $user->address }},{{ $user->phone }}
                        </span>
                        <p class="text-gray-800 fw-semibold letter-spacing">
                            <a href="mailto:{{ $user->email }}" class="text-decoration-none text-gray-800">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                class="text-decoration-none text-gray-800">{{ $user->website }}</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="table-responsive px-20 pt-0 pb-10">
                <h3 class="text-center border bg-gray-200 px-8 py-4 mt-15 mb-10">PATHOLOGY REPORT</h3>
                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-0">

                    <div class="col-2 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Name: </h6>
                    </div>
                    <div class="col-4 border-bottom mt-0 border-end">
                        <h6 class="mb-0 p-4">{{ $cannabiesPregnancyTest->name }}</h6>
                    </div>

                    <div class="col-2 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Sex: </h6>
                    </div>
                    <div class="col-4 border-bottom mt-0">
                        <h6 class="mb-0 p-4">{{ $cannabiesPregnancyTest->age }}/@if ($cannabiesPregnancyTest->sex === 'male')
                                M
                            @else
                                F
                            @endif
                        </h6>
                    </div>

                    <div class="col-2 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Patient ID: </h6>
                    </div>
                    <div class="col-4 border-bottom mt-0 border-end">
                        <h6 class="mb-0 p-4">{{ $cannabiesPregnancyTest->id }}</h6>
                    </div>

                    <div class="col-2 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-4 border-bottom mt-0">
                        <h6 class="mb-0 p-4">{{ $cannabiesPregnancyTest->medical_examination_date }}</h6>
                    </div>

                    <div class="col-2 mt-0">
                        <h6 class="mb-0 p-4">Lab No: </h6>
                    </div>
                    <div class="col-4 border-end mt-0">
                        <h6 class="mb-0 p-4">{{ $cannabiesPregnancyTest->lab }}</h6>
                    </div>

                    <div class="col-2 mt-0">
                        <h6 class="mb-0 p-4">Referred by: </h6>
                    </div>
                    <div class="col-4 mt-0">
                        <h6 class="mb-0 p-4">
                            {{ !is_null($cannabiesPregnancyTest) ? $cannabiesPregnancyTest->referred_by : 'N/A' }}</h6>
                    </div>

                </div>

                <div class="row gx-10 gy-8 w-lg-100 mx-0 mt-10">
                    <div class="col-3 border border-end-0">
                        <h6 class="mb-0 p-4">Sample</h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 p-4"></h6>
                    </div>
                    <div class="col-3 border border-start-0 border-end-0">
                        <h6 class="mb-0 p-4">Urine</h6>
                    </div>
                    <div class="col-3 border border-start-0">
                        <h6 class="mb-0 p-4"></h6>
                    </div>
                </div>

                <div class="row border gx-10 gy-8 mx-0 mt-10">

                    <div class="col-6 mt-0 border-bottom">
                        <h6 class="mb-0 py-4">TEST NAME</h6>
                    </div>
                    <div class="col-6 mt-0 border-bottom">
                        <h6 class="mb-0 py-4">RESULT</h6>
                    </div>

                    @if ($cannabiesPregnancyTest->sex == 'female' && $cannabiesPregnancyTest->pregnancy_test != -1)
                        @if ($cannabiesPregnancyTest->pregnancy_test == 1)
                            <div class="col-6 bg-gray-200 mt-0">
                                <p class="mb-0 py-4 fw-bolder">Pregnancy Test</p>
                            </div>
                            <div class="col-6 bg-gray-200 mt-0">
                                <p class="mb-0 py-4 fw-bolder">
                                    Positive
                                </p>
                            </div>
                        @else
                            <div class="col-6 bg-gray-200 mt-0">
                                <p class="mb-0 py-4">Pregnancy Test</p>
                            </div>
                            <div class="col-6 bg-gray-200 mt-0">
                                <p class="mb-0 py-4">
                                    Negative
                                </p>
                            </div>
                        @endif
                    @endif

                    @if ($cannabiesPregnancyTest->cannabies_test != -1)
                        @if ($cannabiesPregnancyTest->cannabies_test == 1)
                            <div class="col-6 bg-gray-200 mt-0">
                                <p class="mb-0 py-4 fw-bolder">Cannabies Test</p>
                            </div>
                            <div class="col-6 bg-gray-200 mt-0">
                                <p class="mb-0 py-4 fw-bolder">
                                    Positive
                                </p>
                            </div>
                        @else
                            <div class="col-6 bg-gray-200 mt-0">
                                <p class="mb-0 py-4">Cannabies Test</p>
                            </div>
                            <div class="col-6 bg-gray-200 mt-0">
                                <p class="mb-0 py-4">
                                    Negative
                                </p>
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
