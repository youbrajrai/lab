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
                                class="text-decoration-none text-gray-800">{{ $user->website }}</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="table-responsive px-20 pt-0 pb-10">
                <h3 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">PATHOLOGY REPORT</h3>

                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-0">

                    <div class="col-3 mt-0 border-bottom">
                        <h6 class="mb-0 p-4">Name : </h6>
                    </div>
                    <div class="col-3 mt-0 border-end border-bottom">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $stoolReport->name }}</h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Gender : </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $stoolReport->age }}/@if ($stoolReport->sex === 'male')
                                M
                            @else
                                F
                            @endif
                        </h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Contact : </h6>
                    </div>
                    <div class="col-3 border-end border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $stoolReport->contact }}</h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $stoolReport->medical_examination_date }}</h6>
                    </div>

                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Lab No. : </h6>
                    </div>
                    <div class="col-3 border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $stoolReport->lab }}</h6>
                    </div>

                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Referred by : </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $stoolReport->referred_by }}</h6>
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
                        <h6 class="mb-0 p-4">Stool</h6>
                    </div>
                    <div class="col-3 border border-start-0">
                        <h6 class="mb-0 p-4"></h6>
                    </div>
                </div>


                <h4 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">
                    STOOL EXAMINATION REPORT
                </h4>

                <div class="border">
                    <div class="row gx-10 gy-8 mx-0 mt-0 border-bottom">
                        <div class="col-6 mt-0 border-end border-bottom px-5 py-2">
                            <h6 class="mb-0 py-2">PHYSICAL EXAM</h6>
                        </div>
                        <div class="col-6 mt-0 border-bottom px-5 py-2">
                            <h6 class="mb-0 py-2">CHEMICAL EXAM</h6>
                        </div>

                        <div class="col-3 mt-0 px-5 py-2 bg-gray-100">
                            <p class="mb-0 py-2">Consistency</p>
                        </div>
                        <div class="col-3 mt-0 border-end bg-gray-100">
                            <p class="mb-0 py-4">{{ $stoolReport->consistency }}</p>
                        </div>

                        <div class="col-3 mt-0 px-5 py-2 bg-gray-100">
                            <p class="mb-0 py-2">Reaction</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">{{ $stoolReport->reaction }}</p>
                        </div>

                        <div class="col-3 mt-0 px-5 py-2">
                            <p class="mb-0 py-2">Colour</p>
                        </div>
                        <div class="col-3 mt-0 border-end">
                            <p class="mb-0 py-4">{{ $stoolReport->colour }}</p>
                        </div>

                        <div class="col-3 mt-0 px-5 py-2">
                            <p class="mb-0 py-2">Ocult Blood</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">{{ $stoolReport->ocult_blood }}</p>
                        </div>

                        <div class="col-3 mt-0 px-5 py-2 bg-gray-100">
                            <p class="mb-0 py-2">Blood</p>
                        </div>
                        <div class="col-3 mt-0 border-end bg-gray-100">
                            <p class="mb-0 py-4">{{ $stoolReport->blood }}</p>
                        </div>

                        <div class="col-3 mt-0 px-5 py-2 bg-gray-100">
                            <p class="mb-0 py-2">R.S.</p>
                        </div>
                        <div class="col-3 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">{{ $stoolReport->r_s }}</p>
                        </div>

                        <div class="col-3 mt-0 px-5 py-2">
                            <p class="mb-0 py-2">Mucus</p>
                        </div>
                        <div class="col-3 mt-0 border-end">
                            <p class="mb-0 py-4">{{ $stoolReport->mucus }}</p>
                        </div>

                        <div class="col-3 mt-0 px-5 py-2">
                            <p class="mb-0 py-2">Others</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-4">{{ $stoolReport->chemical_others }}</p>
                        </div>
                    </div>

                    <h6 class="text-center border-bottom px-8 py-4 mb-0">
                        MICROSCOPIC EXAM
                    </h6>

                    <div class="row gx-10 gy-8 mx-0 mt-0">

                        <div class="col-4 bg-gray-100 mt-0">
                            <p class="mb-0 py-4">Protozoal Parasite</p>
                        </div>

                        <div class="col-4 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">Cyst of</p>
                        </div>
                        <div class="col-4 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">{{ $stoolReport->cyst_of }}</p>
                            {{-- <p class="mb-0 py-2">...... Seen</p> --}}
                        </div>
                        <div class="offset-4 col-4 mt-0">
                            <p class="mb-0 py-4">Tryphozoite of</p>
                        </div>
                        <div class="col-4 mt-0">
                            <p class="mb-0 py-4">{{ $stoolReport->tryphozoite_of }}</p>
                            {{-- <p class="mb-0 py-2">...... Seen</p> --}}
                        </div>
                        <div class="col-8 mt-0 ps-5 bg-gray-100">
                            <p class="mb-0 py-4">Helmeinthic Parasite</p>
                        </div>
                        <div class="col-4 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">{{ $stoolReport->helmeinthic_parasite }}</p>
                            {{-- <p class="mb-0 py-2">..............</p> --}}
                        </div>
                        <div class="col-8 mt-0 ps-5">
                            <p class="mb-0 py-4">R.B.C.</p>
                        </div>
                        <div class="col-4 mt-0">
                            <p class="mb-0 py-4">{{ $stoolReport->r_b_c }}</p>
                            {{-- <p class="mb-0 py-2">.............. /hpf</p> --}}
                        </div>
                        <div class="col-8 mt-0 ps-5 bg-gray-100">
                            <p class="mb-0 py-4">Pus Cells</p>
                        </div>
                        <div class="col-4 mt-0 bg-gray-100">
                            <p class="mb-0 py-4">{{ $stoolReport->pus_cells }}</p>
                            {{-- <p class="mb-0 py-2">.............. /hpf</p> --}}
                        </div>
                        <div class="col-8 mt-0 ps-5">
                            <p class="mb-0 py-4">Undigested food particles</p>
                        </div>
                        <div class="col-4 mt-0">
                            <p class="mb-0 py-4">{{ $stoolReport->undigested_food }}</p>
                            {{-- <p class="mb-0 py-2">.............. Seen</p> --}}
                        </div>
                        <div class="col-8 mt-0 ps-5  bg-gray-100">
                            <p class="mb-0 py-4">Others</p>
                        </div>
                        <div class="col-4 mt-0  bg-gray-100">
                            <p class="mb-0 py-4">{{ $stoolReport->microscopic_others }}</p>
                            {{-- <p class="mb-0 py-2">.............. Seen</p> --}}
                        </div>

                    </div>
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
