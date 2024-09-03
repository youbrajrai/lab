@extends('layouts.print')
@section('document')
    <div class="tab-content print_report">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
            <div class="row gx-10 gy-8 align-items-center justify-content-center border-bottom border-dark py-5 px-10">
                <div class="offset-1 col-1 mt-0 me-10">
                    <img src="{{ $user->getFirstMediaUrl('images') }}" alt="" />
                </div>
                <div class="col-9 mt-0 me-10">
                    <div class="print-header me-15">
                        <h1 class="text-center">
                            {{ $user->company_name }}
                        </h1>
                        <p class="mb-0 text-center">Pingalasthan-8 Gaushala Kathmandu, Nepal,
                            Phone: +977-1-5913695, 4580410</p>
                    </div>
                </div>
            </div>
            <div class="table-responsive px-20 pt-0 pb-10">
                <h2 class="text-center px-8 py-1 mb-8">
                    SEROLOGY REPORT
                </h2>

                <div class="row border gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <div class="col-3 mt-0 border-end border-bottom">
                        <h6 class="mb-0 py-4">Name : </h6>
                    </div>
                    <div class="col-3 mt-0 border-end border-bottom">
                        <h6 class="mb-0 py-4">{{ $bloodReport->name }}</h6>
                    </div>
                    <div class="col-3 mt-0 border-end border-bottom">
                        <h6 class="mb-0 py-4">Sample No. : </h6>
                    </div>
                    <div class="col-3 mt-0 border-bottom">
                        <h6 class="mb-0 py-4">{{ $bloodReport->sample }}</h6>
                    </div>
                    <div class="col-3 border-end border-bottom mt-0">
                        <h6 class="mb-0 py-4">Age/Gender : </h6>
                    </div>
                    <div class="col-3 border-end border-bottom mt-0">
                        <h6 class="mb-0 py-4">{{ $bloodReport->age }}/@if ($bloodReport->sex === 'male')
                                M
                            @else
                                F
                            @endif
                        </h6>
                    </div>
                    <div class="col-3 border-end border-bottom mt-0">
                        <h6 class="mb-0 py-4">Date &amp; Time : </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 py-4">{{ $bloodReport->medical_examination_date }}</h6>
                    </div>
                    <div class="col-3 mt-0 border-end border-bottom">
                        <h6 class="mb-0 py-4">Address : </h6>
                    </div>
                    <div class="col-3 mt-0 border-end border-bottom">
                        <h6 class="mb-0 py-4">{{ $bloodReport->address }}</h6>
                    </div>
                    <div class="col-3 mt-0 border-end border-bottom">
                        <h6 class="mb-0 py-4">Phone No :</h6>
                    </div>
                    <div class="col-3 mt-0 border-bottom">
                        <h6 class="mb-0 py-4">{{ $bloodReport->contact }}</h6>
                    </div>
                    <div class="col-3 mt-0 border-end">
                        <h6 class="mb-0 py-4">Referred by : </h6>
                    </div>
                    <div class="col-3 mt-0 border-end">
                        <h6 class="mb-0 py-4">{{ $bloodReport->referred_by }}</h6>
                    </div>
                </div>

                <h6 class="mt-20 mb-15 text-center text-decoration-underline">SEROLOGY TEST</h6>
                <div class="row border border-dark gx-10 gy-8 w-lg-100 ms-0">
                    <div class="col-3 mt-0 border-bottom border-dark">
                        <h6 class="mb-0 py-4">Test</h6>
                    </div>
                    <div class="col-3 mt-0 border-bottom border-dark">
                        <h6 class="mb-0 py-4">Result</h6>
                    </div>
                    <div class="col-3 mt-0 border-bottom border-dark">
                        <h6 class="mb-0 py-4">Unit</h6>
                    </div>
                    <div class="col-3 mt-0 border-bottom border-dark">
                        <h6 class="mb-0 py-4">Ref.Range</h6>
                    </div>

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">HCV</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">{{ $bloodReport->anti_hcv ? 'Reactive' : 'None Reactive' }}</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">HIV I &amp; II</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">{{ $bloodReport->anti_hiv ? 'Reactive' : 'None Reactive' }}</p>
                    </div>

                    @if (!empty($bloodReport->hbs_ag))
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">HBsAg</p>
                        </div>
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-4">{{ $bloodReport->hbs_ag }}</p>
                        </div>
                    @endif

                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">TPHA</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">{{ $bloodReport->tpha == 1 ? 'Positive' : 'Negative' }}</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">VDRL</p>
                    </div>
                    <div class="col-6 mt-0">
                        <p class="mb-0 py-4">{{ $bloodReport->vdrl ? 'Reactive' : 'None Reactive' }}</p>
                    </div>
                </div>

                <p class="text-end sig-text">
                    ..................................................
                </p>
                <p class="text-end">
                    (Signature of Lab Technician)
                </p>
            </div>
        </div>
    </div>
@stop
