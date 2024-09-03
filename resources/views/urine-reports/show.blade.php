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
                <h3 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">PATHOLOGY REPORT</h3>
                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-0">
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Name: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0 border-end">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $urineReport->name }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Sex: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $urineReport->age }}/@if ($urineReport->sex === 'male')
                                M
                            @else
                                F
                            @endif
                        </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Patient ID: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0 border-end">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $urineReport->id }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $urineReport->medical_examination_date }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Referred by: </h6>
                    </div>
                    <div class="col-3 mt-0 border-end">
                        <h6 class="mb-0 ml-n4rem p-4">{{ !is_null($urineReport) ? $urineReport->referred_by : 'N/A' }}</h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Lab No: </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $urineReport->lab }}</h6>
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
                        <h6 class="mb-0 p-4">Urine</h6>
                    </div>
                    <div class="col-3 border border-start-0">
                        <h6 class="mb-0 p-4"></h6>
                    </div>
                </div>

                <div class="row gx-10 gy-8 w-lg-100 mx-0 mt-5">
                    <h4 class="text-center border border-dark bg-gray-100 py-4 mt-10 mb-0">Urine Examination Report</h4>
                </div>

 @if ($urineReport->color || $urineReport->transparency || $urineReport->sp_gravity)
                <h4 class="text-center border bg-gray-100 px-8 py-4 my-10">
                    PHYSICAL EXAMINATION
                </h4>
                <div class="row border gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-3">TEST NAME</h6>
                    </div>
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-3">RESULT</h6>
                    </div>

                    @if ($urineReport->color)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Color</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->color }}</p>
                        </div>
                    @endif

                    @if ($urineReport->transparency)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">Transparency</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->transparency }}</p>
                        </div>
                    @endif

                    @if ($urineReport->sp_gravity)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Sp. Gravity</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->sp_gravity }}</p>
                        </div>
                    @endif

                </div>
                @endif

@if (
                    $urineReport->reaction ||
                        $urineReport->albumine ||
                        $urineReport->sugar ||
                        $urineReport->urobilinogen != -1 ||
                        $urineReport->bile_salt != -1 ||
                        $urineReport->bile_pigment != -1)
                <h4 class="text-center border bg-gray-100 px-8 py-4 my-10">
                    CHEMICAL EXAMINATION
                </h4>
                <div class="row border gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0 border-bottom">
                        <h6 class="mb-0 py-3">TEST NAME</h6>
                    </div>
                    <div class="col-6 mt-0 border-bottom">
                        <h6 class="mb-0 py-3">RESULT</h6>
                    </div>

                    @if ($urineReport->reaction)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Reaction</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->reaction }}</p>
                        </div>
                    @endif

                    @if ($urineReport->albumin)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">Albumin</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->albumin }}</p>
                        </div>
                    @endif

                    @if ($urineReport->sugar)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Sugar</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->sugar }}
                            </p>
                        </div>
                    @endif

                                @if ($urineReport->urobilinogen != -1)
                                @if ($urineReport->urobilinogen == 1)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Urobilinogen</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">
                                    Positive
                            </p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">Urobilinogen</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">
                                    Negative
                            </p>
                        </div>
                        @endif
                        @endif

                                @if ($urineReport->bile_salt != -1)
                                @if ($urineReport->bile_salt == 1)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Bile Salt</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">
                                    Positive
                            </p>
                        </div>
                        @else
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Bile Salt</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">
                                    Negative
                            </p>
                        </div>
                        @endif
                        @endif

                                {{-- @if ($urineReport->bile_pigment != -1)
                                @if ($urineReport->bile_pigment == 1)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Bile Pigment</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">
                                    Positive
                            </p>
                        </div>
                        @else
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">Bile Pigment</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">
                                    Negative
                            </p>
                        </div>
                        @endif
                        @endif --}}

                </div>
                @endif

@if (
                    $urineReport->pus_cell ||
                        $urineReport->rbc ||
                        $urineReport->epithelial_cells ||
                        $urineReport->urates ||
                        $urineReport->casts ||
                        $urineReport->ca_oxalate ||
                        $urineReport->other)
                <h4 class="text-center border bg-gray-100 px-8 py-4 my-10">
                    MICROSCOPIC EXAMINATION
                </h4>
                <div class="row border gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-3">TEST NAME</h6>
                    </div>
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-3">RESULT</h6>
                    </div>

                    @if ($urineReport->pus_cell)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Pus Cell</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->pus_cell . '/hpf' }}</p>
                        </div>
                    @endif

                    @if ($urineReport->rbc)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">RBC</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->rbc . '/hpf' }}</p>
                        </div>
                    @endif

                    @if ($urineReport->epithelial_cells)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Epithelial Cell</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">
                                {{ $urineReport->epithelial_cells . '/hpf' }}</p>
                        </div>
                    @endif

                    @if ($urineReport->urates)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">Urates</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->urates . '/hpf' }}</p>
                        </div>
                    @endif

                    {{-- @if ($urineReport->casts)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Casts</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->casts . '/hpf' }}</p>
                        </div>
                    @endif --}}

                    @if ($urineReport->ca_oxalate)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">Ca. Oxalate</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->ca_oxalate . '/hpf' }}</p>
                        </div>
                    @endif

                    @if ($urineReport->other)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Other</p>
                        </div>
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $urineReport->other . '/hpf' }}</p>
                        </div>
                    @endif

                </div>
                @endif

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
