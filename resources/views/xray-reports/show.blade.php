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
                    <img src="{{ $user->getFirstMediaUrl('images') }}" alt=""/>
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
                                                           class="text-decoration-none text-gray-800">{{ $user->website }}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="table-responsive px-20 pt-0 pb-10">

                <h4 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">
                    X-ray Reporting form
                </h4>

                {{--                <h1 class="text-center py-8 mb-0"> --}}
                {{--                    @if ($xrayReport->defect_seen === 'normal') --}}
                {{--                        FIT --}}
                {{--                    @else --}}
                {{--                        --}}{{-- UNFIT --}}
                {{--                    @endif --}}
                {{--                </h1> --}}

                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-0">

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Name: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $xrayReport->name }}</h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Sex: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $xrayReport->age }}/@if ($xrayReport->sex === 'male')
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
                        <h6 class="mb-0 ml-n4rem p-4">{{ $xrayReport->id }}</h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Address: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $xrayReport->country }}</h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">X-ray requested for: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4"> {{ $xrayReport->requested_for }}</h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Clinical History: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        @if ($xrayReport->clinical_history !== 'Other')
                            <h6 class="mb-0 ml-n4rem p-4">{{ $xrayReport->clinical_history }}</h6>
                        @else
                            <h6 class="mb-0 ml-n4rem p-4">{{ $xrayReport->clinical_other }}</h6>
                        @endif
                    </div>

                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Requested by Dr. : </h6>
                    </div>
                    <div class="col-3 mt-0 border-end">
                        <h6 class="mb-0 ml-n4rem p-4">{{ !is_null($xrayReport) ? $xrayReport->requested_by : 'N/A' }}</h6>
                    </div>

                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $xrayReport->medical_examination_date }}</h6>
                    </div>
                </div>
                <?php
                // if(!empty($xrayReport->radiologist_opinion)):
                ?>
                <h2 id="radiologist-text" class="text-decoration-underline pt-2 pb-2 ps-0">Radiologist's Opinion</h2>
                {{-- <div class="px-0 mt-0">
                    <textarea class="form-control form-control-solid" rows="4" id="radiologist_opinion" name="radiologist_opinion">{{ $xrayReport->radiologist_opinion }}</textarea>
                </div> --}}

                <div class="mb-5 mt-0">
                    <ul class="lh-lg">
                        <li>Soft tissue and body cage is normal.</li>
                        <li>Trachea is central.</li>
                        <li>Hilar shadow is within normal limit.</li>
                        <li>Cardio and Costophrenic angles are clear bilaterally.</li>
                        <li>Cardiac silhouette within normal limit.</li>
                        <li>Cardio thoracic ratio is normal.</li>
                    </ul>
                </div>

                <?php
                // endif;
                ?>

                <div class="mt-10 row">
                    <div class="col-3 mt-10">
                        <h6 class="mb-0 py-4">Defect Seen: </h6>
                    </div>

                    @if ($xrayReport->defect_seen !== 'Other')
                        <div class="col-3 mt-10">
                            <h6 class="mb-0 py-4">{{ $xrayReport->defect_seen }}</h6>
                        </div>
                    @endif

                    @if ($xrayReport->defect_seen === 'Other')
                        <div class="col-3 mt-10">
                            <h6 class="mb-0 py-4">{{ $xrayReport->other }}</h6>
                        </div>
                    @endif
                </div>

                <div class="ms-auto w-50">
                    <div>
                        <p class="text-end sig-text">
                            ...........................................
                        </p>
                        <p class="text-end">
                            (Signature of Radiologist)
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
