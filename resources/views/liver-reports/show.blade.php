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
                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-0">
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Name: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $liverReport->name }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Sex: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $liverReport->age }}/@if ($liverReport->sex === 'male')
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
                        <h6 class="mb-0 ml-n4rem p-4">{{ $liverReport->id }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $liverReport->medical_examination_date }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Referred by: </h6>
                    </div>
                    <div class="col-3 mt-0 border-end">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $liverReport->referred_by }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Lab No: </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $liverReport->lab }}</h6>
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
                    L.F.T. (LIVER FUNCTION TEST)
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

                    @if ($liverReport->sr_bilirubin_total)
                    @if ($liverReport->sr_bilirubin_total > 1.0)
                        <div class="col-6 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">Sr. Bilirubin Total</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder"> {{ $liverReport->sr_bilirubin_total }}</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">(0.4-1.0) mg%</p>
                        </div>
                        @else
                        <div class="col-6 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">Sr. Bilirubin Total</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4"> {{ $liverReport->sr_bilirubin_total }}</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">(0.4-1.0) mg%</p>
                        </div>
                        @endif
                    @endif

                    @if ($liverReport->sr_bilirubin_direct)
                    @if ($liverReport->sr_bilirubin_direct > 0.4)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Sr. Bilirubin Direct</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">{{ $liverReport->sr_bilirubin_direct }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(0.0-0.4) mg%</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">Sr. Bilirubin Direct</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">{{ $liverReport->sr_bilirubin_direct }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">(0.0-0.4) mg%</p>
                        </div>
                        @endif
                    @endif

                    @if ($liverReport->alkaline_phosphate)
                    @if ($liverReport->alkaline_phosphate > 128)
                        <div class="col-6 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">Alkaline Phosphatase</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">{{ $liverReport->alkaline_phosphate }} </p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">(40-128) u/l</p>
                        </div>
                        @else
                        <div class="col-6 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">Alkaline Phosphatase</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">{{ $liverReport->alkaline_phosphate }} </p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">(40-128) u/l</p>
                        </div>
                        @endif
                    @endif

                    @if ($liverReport->sgpt)
                    @if ($liverReport->sgpt > 35)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">S.G.P.T (ALT)</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">{{ $liverReport->sgpt }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(5-35) u/l</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">S.G.P.T (ALT)</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">{{ $liverReport->sgpt }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">(5-35) u/l</p>
                        </div>
                        @endif
                    @endif

                    @if ($liverReport->sgot)
                    @if ($liverReport->sgot > 40)
                        <div class="col-6 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">S.G.O.T (AST)</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">{{ $liverReport->sgot }}</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">(8-40) u/l</p>
                        </div>
                        @else
                        <div class="col-6 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">S.G.O.T (AST)</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">{{ $liverReport->sgot }}</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">(8-40) u/l</p>
                        </div>
                        @endif
                    @endif

                    @if ($liverReport->total_protein)
                    @if ($liverReport->total_protein > 8)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4 fw-bolder">Total Protein</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">{{ $liverReport->total_protein }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4 fw-bolder">(6-8) gm/dl</p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">Total Protein</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">{{ $liverReport->total_protein }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">(6-8) gm/dl</p>
                        </div>
                        @endif
                    @endif

                    @if ($liverReport->serum_albumin)
                    @if ($liverReport->serum_albumin > 5.0)
                        <div class="col-6 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">Serum Albumin</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">{{ $liverReport->serum_albumin }}</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4 fw-bolder">(3.5-5.0) gm/dl</p>
                        </div>
                        @else
                        <div class="col-6 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">Serum Albumin</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">{{ $liverReport->serum_albumin }}</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">(3.5-5.0) gm/dl</p>
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
