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
                            <a href="mailto:{{ $user->email }}" class="text-decoration-none text-black">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                                           class="text-decoration-none text-black">www.udclab.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="table-responsive px-20 pt-0 pb-10">
                <h3 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">PATHOLOGY REPORT</h3>
                <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Name: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0 border-end">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $lipidProfile->name }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Sex: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $lipidProfile->age }}/@if ($lipidProfile->sex === 'male')
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
                        <h6 class="mb-0 ml-n4rem p-4">{{ $lipidProfile->id }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $lipidProfile->medical_examination_date }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Referred by: </h6>
                    </div>
                    <div class="col-3 mt-0 border-end">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $lipidProfile->referred_by }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Lab No: </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $lipidProfile->lab }}</h6>
                    </div>
                </div>

                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-6">
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
                    LIPID PROFILE
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

                    @if ($lipidProfile->total_cholestrol)
                    @if ($lipidProfile->total_cholestrol > 250)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Total Cholesterol</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder"> {{ $lipidProfile->total_cholestrol }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(150-250) mg%</p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Total Cholesterol</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4"> {{ $lipidProfile->total_cholestrol }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">(150-250) mg%</p>
                        </div>
                        @endif
                    @endif

                    @if ($lipidProfile->hdl_cholestrol)
                    @if ($lipidProfile->hdl_cholestrol > 70)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">HDL Cholestrol</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder"> {{ $lipidProfile->hdl_cholestrol }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(30-70) mg%</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">HDL Cholestrol</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4"> {{ $lipidProfile->hdl_cholestrol }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">(30-70) mg%</p>
                        </div>
                        @endif
                    @endif

                    @if ($lipidProfile->ldl_cholestrol)
                    @if ($lipidProfile->ldl_cholestrol > 135)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">LDL Cholestrol</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder"> {{ $lipidProfile->ldl_cholestrol }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Upto 135 mg%</p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">LDL Cholestrol</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4"> {{ $lipidProfile->ldl_cholestrol }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Upto 135 mg%</p>
                        </div>
                        @endif
                    @endif

                    @if ($lipidProfile->triglyceride)
                    @if ($lipidProfile->triglyceride > 150)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Triglyceride</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder"> {{ $lipidProfile->triglyceride }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Upto 150 mg%</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">Triglyceride</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4"> {{ $lipidProfile->triglyceride }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">Upto 150 mg%</p>
                        </div>
                        @endif
                    @endif

                    @if ($lipidProfile->others)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Others</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-4"> {{ $lipidProfile->others }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                        </div>
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
