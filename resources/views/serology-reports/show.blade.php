@extends('layouts.print')
@section('document')
    <div class="tab-content print_report">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
            <div class="row gx-10 gy-8 align-items-center justify-content-between pb-10 px-10">
                <div class="col-3">
                    <p class="mb-0">
                        Lab. Reg. No: BP-C-220</p>
                </div>
                <div class="offset-6 col-3">
                    <p class="mb-0 text-end">
                        Gov. Reg. No: {{ $user->regd_no }}</p>
                </div>
            </div>
            <div class="row gx-10 gy-8 align-items-center justify-content-center border-bottom border-dark px-10 pb-10">
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
                <h3 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">SEROLOGY REPORT</h3>

                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-0">
                    <div class="col-3 mt-0 border-bottom">
                        <h6 class="mb-0 p-4">Name : </h6>
                    </div>
                    <div class="col-3 mt-0 border-end border-bottom">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $serologyReport->name }}</h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Gender : </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $serologyReport->age }}/@if ($serologyReport->sex === 'male')
                                M
                            @else
                                F
                            @endif
                        </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Date &amp; Time : </h6>
                    </div>
                    <div class="col-3 border-end border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $serologyReport->medical_examination_date }}</h6>
                    </div>
                    <div class="col-3 mt-0 border-bottom">
                        <h6 class="mb-0 p-4">Address : </h6>
                    </div>
                    <div class="col-3 mt-0 border-bottom">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $serologyReport->address }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Phone No :</h6>
                    </div>
                    <div class="col-3 mt-0 border-end">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $serologyReport->contact }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Referred by : </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $serologyReport->referred_by }}</h6>
                    </div>
                </div>


                <h4 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">
                    SEROLOGY TEST
                </h4>

                <div class="row border gx-10 gy-8 mx-0 mt-0">

                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-4">TEST NAME</h6>
                    </div>
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-4">RESULT</h6>
                    </div>

                            @if ($serologyReport->hiv_test != -1)
                            @if ($serologyReport->hiv_test == 1)
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Anti-HIV (1&2)</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Positive</p>
                    </div>
                    @else
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">Anti-HIV (1&2)</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">Negative</p>
                    </div>
                    @endif
                    @endif

                            @if ($serologyReport->hcv != -1)
                            @if ($serologyReport->hcv == 1)
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Anti-HCV</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Positive</p>
                    </div>
                    @else
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">Anti-HCV</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">Negative</p>
                    </div>
                    @endif
                    @endif

                            @if ($serologyReport->hbs_ag != -1)
                            @if ($serologyReport->hbs_ag == 1)
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">HBs-Ag</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Positive</p>
                    </div>
                    @else
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">HBs-Ag</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">Negative</p>
                    </div>
                    @endif
                    @endif

                            @if ($serologyReport->vdrl != -1)
                            @if ($serologyReport->vdrl == 1)
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4 fw-bolder">VDRL</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Reactive</p>
                    </div>
                    @else
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">VDRL</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">Non-Reactive</p>
                    </div>
                    @endif
                    @endif

                            @if ($serologyReport->tpha != -1)
                            @if ($serologyReport->tpha == 1)
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">T.P.H.A.</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Positive</p>
                    </div>
                    @else
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">T.P.H.A.</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">Negative</p>
                    </div>
                    @endif
                    @endif

                            @if ($serologyReport->rheumatoid != -1)
                            @if ($serologyReport->rheumatoid == 1)
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Rheumatoid</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Positive</p>
                    </div>
                    @else
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">Rheumatoid</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">Negative</p>
                    </div>
                    @endif
                    @endif

                            @if ($serologyReport->crp != -1)
                            @if ($serologyReport->crp == 1)
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">CRP</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Positive</p>
                    </div>
                    @else
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">CRP</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">Negative</p>
                    </div>
                    @endif
                    @endif

                    {{-- <?php if(!empty($serologyReport->aso_titre)): ?>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">ASO Titre</p>
                    </div>
                    <div class="col-3 mt-0">
                        <p class="mb-0 py-4">{{ $serologyReport->aso_titre }} IU/ml</p>
                    </div>
                    <?php endif; ?>

                            @if ($serologyReport->sr_k39 == 1)
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Sr.K39</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Positive</p>
                    </div>
                    @else
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">Sr.K39</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">Negative</p>
                    </div>
                    @endif

                            @if ($serologyReport->optimal_test == 1)
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Optimal Test</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4 fw-bolder">Positive
                        </p>
                    </div>
                    @else
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">Optimal Test</p>
                    </div>
                    <div class="col-6 bg-gray-100 mt-0">
                        <p class="mb-0 py-4">Negative
                        </p>
                    </div>
                    @endif --}}

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
