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

            <div
                class="row gx-10 gy-8 align-items-center justify-content-center border-bottom border-dark px-10 pb-10">
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
                            <a href="mailto:{{ $user->email }}"
                               class="text-decoration-none text-gray-800">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                                           class="text-decoration-none text-gray-800">{{ $user->website }}</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="table-responsive px-20 pt-0 pb-10">
                <h3 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">MANTOUX TEST</h3>

                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-0">
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Name Of Candidate: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        @if ($mantouxTest->sex == 'male')
                            <h6 class="mb-0 ml-n4rem p-4">MR. {{ $mantouxTest->name }}</h6>
                        @elseif ($mantouxTest->sex == 'female')
                            <h6 class="mb-0 ml-n4rem p-4">MS. {{ $mantouxTest->name }}</h6>
                        @endif
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Passport No: </h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $mantouxTest->passport_no }}</h6>
                    </div>

                    <div class="col-3 mt-0 border-bottom">
                        <h6 class="mb-0 p-4">Address: </h6>
                    </div>
                    <div class="col-3 mt-0 border-bottom border-end">
                        <h6 class="mb-0 ml-n4rem p-4"> {{ $mantouxTest->address }}</h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Sex: </h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $mantouxTest->age }}
                            years/{{ $mantouxTest->sex }}</h6>
                    </div>

                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-3 border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $mantouxTest->date }}</h6>
                    </div>
                </div>

                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-15">
                    <div class="col-4 mt-0 border-bottom border-end">
                        <p class="mb-0 py-5">Name of Test </p>
                    </div>
                    <div class="col-4 mt-0 border-bottom border-end ">
                        <p class="mb-0 py-5">Result </p>
                    </div>
                    <div class="col-4 mt-0 border-bottom">
                        <p class="mb-0 py-5">Normal Value </p>
                    </div>

                    <div class="col-4 mt-0 border-end">
                        <h6 class="mb-0 py-5 fw-bolder">MANTOUX TEST</h6>
                    </div>
                    <div class="col-4 mt-0 border-end">
                        <p class="mb-0 py-4"> {{ $mantouxTest->result }}</p>
                    </div>
                    <div class="col-4 mt-0 ">
                        <h6 class="mb-0 py-2 fw-bolder">&lt;10mm: Low risk group</h6>
                        <h6 class="mb-0 py-2 fw-bolder">&gt;10mm: High risk group</h6>
                        <h6 class="mb-0 py-2 fw-bolder">&gt;15mm: Extremely high risk group
                        </h6>
                    </div>
                </div>

                <div class="row border gx-10 gy-8 w-lg-50 ms-0 mt-15">
                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-5">Note: Injected side </h6>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4"> {{ $mantouxTest->injected_side }}</p>
                    </div>

                    <div class="col-6 mt-0">
                        <h6 class="mb-0 py-5">Volume </h6>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4"> {{ $mantouxTest->volume }}</p>
                    </div>
                </div>

                <div class="ms-auto w-50">
                    <div>
                        <p class="text-end sig-text">
                            .................................................
                        </p>
                        <p class="text-end">
                            (Signature of Lab Technician)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
