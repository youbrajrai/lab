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
            <div class="table-responsive px-20 pt-0 pb-10">
                <h3 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-10">BLOOD REPORT</h3>
                <div class="row border gx-10 gy-8 w-lg-100 mx-0 mt-0">
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Name: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $bloodReport->name }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Sample No: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ !is_null($bloodReport) ? $bloodReport->sample : 'N/A' }}</h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Age/Gender: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $bloodReport->age }}/@if ($bloodReport->sex === 'male')
                                M
                            @else
                                F
                            @endif
                        </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Date: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $bloodReport->medical_examination_date }}</h6>
                    </div>

                    {{-- <div class="col-2 mt-0">
                        <h6 class="mb-0 py-4">Passport No: </h6>
                    </div>
                    <div class="col-4 mt-0">
                        <h6 class="mb-0 ml-n4rem py-4">{{ $bloodReport->passport_number }}</h6>
                    </div> --}}

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Referred By: </h6>
                    </div>
                    <div class="col-3 border-bottom border-end mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $bloodReport->referred_by }}</h6>
                    </div>

                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 p-4">Specimen: </h6>
                    </div>
                    <div class="col-3 border-bottom mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">
                            {{ $bloodReport->specimen }}
                        </h6>
                    </div>

                    <div class="col-3 mt-0">
                        <h6 class="mb-0 p-4">Address: </h6>
                    </div>
                    <div class="col-3 mt-0">
                        <h6 class="mb-0 ml-n4rem p-4">{{ $bloodReport->address }}</h6>
                    </div>

                </div>

                <h4 class="text-center border bg-gray-100 px-8 py-4 my-8 mt-15">
                    C.B.C. (COMPLETE BLOOD COUNT)
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

                    @if ($bloodReport->wbc)
                    @if ($bloodReport->wbc > 11000)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">WBC</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->wbc }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">4000-11000/cu.mm<sup>3</sup></p>
                        </div>
                        @else
                                    <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">WBC</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->wbc }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">4000-11000/cu.mm<sup>3</sup></p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->rbc_male && $bloodReport->sex === 'male')
                     @if ($bloodReport->rbc_male > 6.5)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">RBC Male</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->rbc_male }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(4.5-6.5) million/cu.mm<sup>3</sup></p>
                        </div>
                        @else
                                    <div class="col-6 mt-0">
                            <p class="mb-0 py-3">RBC Male</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->rbc_male }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">(4.5-6.5) million/cu.mm<sup>3</sup></p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->rbc_female && $bloodReport->sex === 'female')
                    @if ($bloodReport->rbc_female > 5.5)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">RBC Female</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->rbc_female }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(3.5-5.5) million/cu.mm<sup>3</sup></p>
                        </div>
                        @else
                                    <div class="col-6 mt-0">
                            <p class="mb-0 py-3">RBC Female</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->rbc_female }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">(3.5-5.5) million/cu.mm<sup>3</sup></p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->hemoglobin)
                    @if ($bloodReport->hemoglobin > 16)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Hb%</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                             <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->hemoglobin }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(12-16) gm%</p>
                        </div>
                        @else
                                    <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Hb%</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                             <p class="mb-0 py-3">{{ $bloodReport->hemoglobin }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">(12-16) gm%</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->platelets)
                     @if ($bloodReport->platelets > 450000)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Platelets</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->platelets }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">150000-450000 mm<sup>3</sup></p>
                        </div>
                         @else
                                    <div class="col-6 mt-0">
                            <p class="mb-0 py-3">Platelets</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->platelets }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">150000-450000 mm<sup>3</sup></p>
                        </div>
                                @endif
                    @endif

                </div>

                <h4 class="text-center border bg-gray-100 px-8 py-4 mt-15 mb-8">
                    DIFFERENTIAL COUNT
                </h4>

                <div class="row border gx-10 gy-8 mx-0 mt-0">

                    @if ($bloodReport->neutrophils)
                    @if ($bloodReport->neutrophils > 75)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Neutrophils</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0 fw-bolder">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->neutrophils }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(40-75) %</p>
                        </div>
                        @else
                                    <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Neutrophils</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->neutrophils }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">(40-75) %</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->lymphocytes)
                     @if ($bloodReport->lymphocytes > 45)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Lymphocytes</p>
                        </div>
                        <div class="col-3 mt-0">
                             <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->lymphocytes }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(20-45) %</p>
                        </div>
                        @else
                                    <div class="col-6 mt-0">
                            <p class="mb-0 py-3">Lymphocytes</p>
                        </div>
                        <div class="col-3 mt-0">
                             <p class="mb-0 py-3">{{ $bloodReport->lymphocytes }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">(20-45) %</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->eosinophils)
                                @if ($bloodReport->eosinophils > 6)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Eosinophils</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->eosinophils }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(1-6) %</p>
                        </div>
                                @else
                                    <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Eosinophils</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->eosinophils }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">(1-6) %</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->monocytes)
                                @if ($bloodReport->monocytes > 10)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Monocytes</p>
                        </div>
                        <div class="col-3 mt-0">
                           <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->monocytes }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(2-10) %</p>
                        </div>
                                @else
                                    <div class="col-6 mt-0">
                            <p class="mb-0 py-3">Monocytes</p>
                        </div>
                        <div class="col-3 mt-0">
                           <p class="mb-0 py-3">{{ $bloodReport->monocytes }}</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">(2-10) %</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->basophils)
                                @if ($bloodReport->basophils > 1)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">Basophils</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->basophils }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(0-1) %</p>
                        </div>
                                @else
                                    <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">Basophils</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->basophils }}</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">(0-1) %</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->pcv)
                                @if ($bloodReport->pcv > 54)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">PCV (HCT)</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->pcv }}
                            </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(37-54) %</p>
                        </div>
                                @else
                                    <div class="col-6 mt-0">
                            <p class="mb-0 py-3">PCV (HCT)</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->pcv }}
                            </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">(37-54) %</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->mcv)
                                @if ($bloodReport->mcv > 100)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">MCV</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->mcv }}
                            </p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(80-100) fl</p>
                        </div>
                                @else
                              <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">MCV</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->mcv }}
                            </p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">(80-100) fl</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->mch)
                                @if ($bloodReport->mch > 34)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">MCH</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->mch }}
                            </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(27-34) pg</p>
                        </div>
                                @else
                              <div class="col-6 mt-0">
                            <p class="mb-0 py-3">MCH</p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->mch }}
                            </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">(27-34) pg</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->mchc)
                                @if ($bloodReport->mchc > 36)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">MCHC</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                           <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->mchc }}
                            </p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(32-36) g/dl</p>
                        </div>
                                @else
                                    <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">MCHC</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                           <p class="mb-0 py-3">{{ $bloodReport->mchc }}
                            </p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">(32-36) g/dl</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->pt)
                                @if ($bloodReport->pt > 16)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">PT</p>
                        </div>
                        <div class="col-3 mt-0">
                             <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->pt }}
                            </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(12-16) sec</p>
                        </div>
                                @else
                                    <div class="col-6 mt-0">
                            <p class="mb-0 py-3">PT</p>
                        </div>
                        <div class="col-3 mt-0">
                             <p class="mb-0 py-3">{{ $bloodReport->pt }}
                            </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">(12-16) sec</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->inr)
                                @if ($bloodReport->inr > 1.1)
                        <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">INR</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->inr }}
                            </p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(0.8-1.1)</p>
                        </div>
                                @else
                                    <div class="col-6 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">INR</p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->inr }}
                            </p>
                        </div>
                        <div class="col-3 bg-gray-100 mt-0">
                            <p class="mb-0 py-3">(0.8-1.1)</p>
                        </div>
                                @endif
                    @endif

                    @if ($bloodReport->esr)
                                @if ($bloodReport->esr > 20)
                        <div class="col-6 mt-0">
                            <p class="mb-0 py-3 fw-bolder">ESR</p>
                        </div>
                        <div class="col-3  mt-0">
                            <p class="mb-0 py-3 fw-bolder">{{ $bloodReport->esr }}
                            </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3 fw-bolder">(0-20) mm/hr</p>
                        </div>
                                @else
                              <div class="col-6 mt-0">
                            <p class="mb-0 py-3">ESR</p>
                        </div>
                        <div class="col-3  mt-0">
                            <p class="mb-0 py-3">{{ $bloodReport->esr }}
                            </p>
                        </div>
                        <div class="col-3 mt-0">
                            <p class="mb-0 py-3">(0-20) mm/hr</p>
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
