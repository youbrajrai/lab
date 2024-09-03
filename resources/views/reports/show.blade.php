@extends('layouts.print')
@section('document')
    @if ($report->sex == 'male')
        @php
            $gender = 'SIR';
            $salutation = 'MR.';
            $pronoun = 'HIM';
        @endphp
    @else
        @php
            $gender = 'MAM';
            $pronoun = 'HER';
        @endphp
        @if ($report->marital_status === 'married')
            @php
                $salutation = 'MRS.';
            @endphp
        @else
            @php
                $salutation = 'MS.';
            @endphp
        @endif
    @endif
    <div class="tab-content">
        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
            <div class="table-responsive border p-10">
                <div class="row gx-10 gy-8">
                    <div class="offset-3 col-6">
                        <div class="text-center">
                            <h3 class="fw-bold text-uppercase">{{ $user->company_name }}</h3>
                            <p class="mb-0">(An authorized medical center by the Government of Nepal)</p>
                            <p class="mb-0">{{ $user->address }}, {{ $user->phone }}</p>
                            <p>
                                <a href="mailto:{{ $user->email }}" class="text-decoration-none text-black">
                                {{ $user->email }}</a>, <a href="https://udclab.com/"
                                class="text-decoration-none text-black">udclab.com</a>
                            </p>
                            <h6 class="mt-4">(Affiliated to Nepal Medical Occupational Organization)</h6>
                            <h4 class="border bg-black text-white w-fit mx-auto px-8 py-2 my-3">MEDICAL EXAMINATION REPORT
                            </h4>
                            <h2 class="border border-dark w-fit px-8 py-2 m-auto">FIT</h2>
                        </div>
                    </div>
                    <div class="col-3 subject-img text-end">
                        <p>Gov. Reg. No: {{ $user->regd_no }}</p>
                        @if ($report->getFirstMedia())
                            <img class="mt-4" src="{{ $report->getFirstMediaUrl() }}" />
                        @else
                            <img class="mt-4" src="{{ URL::asset('media/avatars/300-1.jpg') }}" />
                        @endif
                    </div>
                </div>
                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <div class="col-1 border border-end-0 mt-3">
                        <p class="mb-0 py-1">Name</p>
                    </div>
                    <div class="col-3 border border-end-0 mt-3">
                        <p class="mb-0 py-1 text-uppercase">{{ $salutation }} {{ $report->name }}</p>
                    </div>
                    <div class="col-1 border border-end-0 mt-3">
                        <p class="mb-0 py-1">Age</p>
                    </div>
                    <div class="col-1 border border-end-0 mt-3">
                        <p class="mb-0 py-1">{{ $report->age }}</p>
                    </div>
                    <div class="col-1 border border-end-0 mt-3">
                        <p class="mb-0 py-1">Sex</p>
                    </div>
                    <div class="col-1 border border-end-0 mt-3">
                        <p class="mb-0 py-1">
                            @if ($report->sex === 'male')
                                M
                            @else
                                F
                            @endif
                        </p>
                    </div>
                    <div class="col-2 border border-end-0 mt-3">
                        <p class="mb-0 py-1">Marital Status</p>
                    </div>
                    <div class="col-2 border mt-3">
                        <p class="mb-0 py-1 text-uppercase">
                            @if ($report->marital_status === 'single')
                                Single
                            @elseif($report->marital_status === 'married')
                                Married
                            @elseif($report->marital_status === 'widow')
                                Widow
                            @else
                                Divorced
                            @endif
                        </p>
                    </div>

                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Passport No.</p>
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">{{ $report->passport_number }}</p>
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">PP. Expired On</p>
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">{{ \Carbon\Carbon::parse($report->passport_expiry)->format('d-M-Y') }}</p>
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Passport issue place</p>
                    </div>
                    <div class="col-2 mt-0 border border-top-0">
                        <p class="mb-0 py-1 text-uppercase">{{ $report->passport_issue_place }}</p>
                    </div>
                    <div class="col-3 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Medical Examination Date</p>
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">{{ $report->medical_examination_date }}</p>
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Job Applied For</p>
                    </div>
                    <div class="col-1 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1 text-uppercase">{{ $report->job_title }}</p>
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Nationality</p>
                    </div>
                    <div class="col-2 mt-0 border border-top-0 text-capitalize">
                        <p class="mb-0 py-1 text-uppercase">{{ $report->nationality }}</p>
                    </div>
                </div>
                <h6 class="border bg-black text-white w-fit px-8 py-2 mt-4">GENERAL EXAMINATION</h6>
                @if (!is_null($general))
                    <p class="mt-3 mb-0">1. Past history of serious illness, Major surgery, and significant psychological
                        problem including (Epilepsy and Depression) : @if ($general->serious_illness === 1)
                            Present
                        @else
                            None
                        @endif
                    </p>
                    <p class="mb-0">2. Past history of allergy : @if ($general->allergy_history === 1)
                            Present
                        @else
                            None
                        @endif
                    </p>
                @endif
                <div class="row gx-10 gy-8 mx-0 mt-0">
                    <div class="col-2 border border-end-0 mt-4">
                        <p class="mb-0 py-1">Height</p>
                    </div>
                    <div class="col-1 border border-end-0 mt-4">
                        <p class="mb-0 py-1">{{ !is_null($general) ? $general->height : 'N/A' }} cm</p>
                    </div>
                    <div class="col-2 border border-end-0 mt-4">
                        <p class="mb-0 py-1">Weight</p>
                    </div>
                    <div class="col-1 border border-end-0 mt-4">
                        <p class="mb-0 py-1">{{ !is_null($general) ? $general->weight . 'kg' : 'N/A' }} </p>
                    </div>
                    <div class="col-1 border border-end-0 mt-4">
                        <p class="mb-0 py-1">Pulse</p>
                    </div>
                    <div class="col-2 border border-end-0 mt-4">
                        <p class="mb-0 py-1">{{ !is_null($general) ? $general->pulse . '/min' : 'N/A' }}</p>
                    </div>
                    <div class="col-2 border border-end-0 mt-4">
                        <p class="mb-0 py-1">Temperature</p>
                    </div>
                    <div class="col-1 border mt-4">
                        @php
                            $str = '&deg;';
                            $str = html_entity_decode($str);
                        @endphp
                        <p class="mb-0 py-1">{{ !is_null($general) ? $general->temperature . $str.'F' : 'N/A' }}</p>
                    </div>
                    <div class="col-1 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">B.P.</p>
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">{{ !is_null($general) ? $general->blood_pressure .' mm of Hg' : 'N/A' }}</p>
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Jaundice</p>
                    </div>

                    <div class="col-1 mt-0 border border-end-0 border-top-0">
                        @if (!is_null($general))
                            <p class="mb-0 py-1">
                                @if ($general->jaundice === 0)
                                    Absent
                                @else
                                    Present
                                @endif
                            </p>
                        @endif
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Paller</p>
                    </div>
                    <div class="col-1 mt-0 border border-end-0 border-top-0">
                        @if (!is_null($general))
                            <p class="mb-0 py-1">
                                @if ($general->paller === 0)
                                    Absent
                                @else
                                    Present
                                @endif
                            </p>
                        @endif
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Cynosis</p>
                    </div>
                    <div class="col-1 mt-0 border border-top-0">
                        @if (!is_null($general))
                            <p class="mb-0 py-1">
                                @if ($general->cynosis === 0)
                                    Absent
                                @else
                                    Present
                                @endif
                            </p>
                        @endif
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Clubbing</p>
                    </div>
                    <div class="col-1 mt-0 border border-end-0 border-top-0">
                        @if (!is_null($general))
                            <p class="mb-0 py-1">
                                @if ($general->clubbing === 0)
                                    Absent
                                @else
                                    Present
                                @endif
                            </p>
                        @endif
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Oedema</p>
                    </div>
                    <div class="col-1 mt-0 border border-end-0 border-top-0">
                        @if (!is_null($general))
                            <p class="mb-0 py-1">
                                @if ($general->odema === 0)
                                    Absent
                                @else
                                    Present
                                @endif
                            </p>
                        @endif
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Ascitis</p>
                    </div>
                    <div class="col-1 mt-0 border border-end-0 border-top-0">
                        @if (!is_null($general))
                            <p class="mb-0 py-1">
                                @if ($general->ascitis === 0)
                                    Absent
                                @else
                                    Present
                                @endif
                            </p>
                        @endif
                    </div>
                    <div class="col-2 mt-0 border border-end-0 border-top-0">
                        <p class="mb-0 py-1">Lymph Node</p>
                    </div>
                    <div class="col-1 mt-0 border border-top-0">
                        @if (!is_null($general))
                            <p class="mb-0 py-1">
                                @if ($general->lymph_node === 0)
                                    Absent
                                @else
                                    Present
                                @endif
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0">
                        <h6 class="border bg-black text-white w-fit px-8 py-2 mt-4 mb-0">SYSTEMIC EXAMINATION</h6>
                    </div>
                    <div class="col-6 mt-0">
                        <h6 class="border bg-black text-white w-fit px-8 py-2 mt-4 mb-0">LABORATORY EXAMINATION</h6>
                    </div>
                </div>
                <div class="row gx-10 gy-8 mx-0 mt-0">
                    <div class="col-6 mt-0 border border-right-0 px-2">
                        <table class="table border table-row-dashed align-middle gs-0 gy-3 my-1">
                            <thead>
                                <tr>
                                    <th colspan="2" class="border-end py-1">
                                        <p class="fw-bold">Type of Medical Examination</p>
                                    </th>
                                    <th colspan="3" class="py-1">
                                        <p class="fw-bold">Result</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Cardiovascular</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->cardiovascular : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Pulmonary</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->pulmonary : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Gastroenterology</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->gastroenterology : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Neurology</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->neurology : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Musculoskeletal</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->musculoskeletal : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Genitourinary</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->genitourinary : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Oro - Dental</p>
                                    </td>
                                    @if (!is_null($systemic))
                                        <td colspan="2" class="py-1">
                                            <p>
                                                @if ($systemic->dental === 1)
                                                    Normal
                                                @else
                                                    Infected
                                                @endif
                                            </p>
                                        </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Extremities / Deformities</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->extremities_deformities : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Varicose Veins</p>
                                    </td>
                                    @if (!is_null($systemic))
                                        <td colspan="2" class="py-1">
                                            <p>
                                                @if ($systemic->varicose_veins === 1)
                                                    Present
                                                @else
                                                    Absent
                                                @endif
                                            </p>
                                        </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Hernia</p>
                                    </td>
                                    @if (!is_null($systemic))
                                        <td colspan="2" class="py-1">
                                            <p>
                                                @if ($systemic->hernia === 1)
                                                    Present
                                                @else
                                                    Absent
                                                @endif
                                            </p>
                                        </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Hydrocele</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->hydrocele : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2" colspan="2" class="border-end py-1">
                                        <p>Eye (Vision)</p>
                                    </td>
                                    <td colspan="2" class="border-end py-1">
                                        <p>R.Eye</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->right_eye : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>L.Eye</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->left_eye : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2" colspan="2" class="border-end py-1">
                                        <p>Ear</p>
                                    </td>
                                    <td colspan="2" class="border-end py-1">
                                        <p>R.Ear</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        @if (!is_null($systemic))
                                            <p>
                                                @if ($systemic->right_ear === 1)
                                                    Normal
                                                @else
                                                    Bad
                                                @endif
                                            </p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>L.Ear</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        @if (!is_null($systemic))
                                            <p>
                                                @if ($systemic->left_ear === 1)
                                                    Normal
                                                @else
                                                    Bad
                                                @endif
                                            </p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p>Others</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        <p>{{ !is_null($systemic) ? $systemic->others : 'N/A' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p class="fw-bold">Radiological (Chest X-Ray)</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        @if (!is_null($systemic))
                                            <p>
                                                @if ($systemic->chest_x_ray === 1)
                                                    Normal
                                                @else
                                                    Bad
                                                @endif
                                            </p>
                                        @endif
                                    </td>
                                </tr>
                                <tr style="height:2rem;">
                                    <td colspan="2" class="border-end py-1"><p class="fw-bold">ECG</p></td>
                                    <td colspan="2" class="py-1">@if (!is_null($systemic))<p>@if ($systemic->ecg === 1) Normal @else Bad @endif</p>@endif</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-end py-1">
                                        <p class="fw-bold">CLINICAL IMPRESSION</p>
                                    </td>
                                    <td colspan="2" class="py-1">
                                        @if (!is_null($systemic))
                                            <p>
                                                @if ($systemic->clinical_impression === 1)
                                                    Normal
                                                @else
                                                    Bad
                                                @endif
                                            </p>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="px-4 py-6">
                            <p class="mb-5 fw-bold">DEAR {{ $gender }} ,</p>
                            <h5>THIS IS TO CERTIFY THAT {{ $salutation }} {{ strtoupper($report->name) }} IS CLINICALLY
                                AND MENTALLY FIT AND THERE IS NO EVIDENCE OF COMMUNICABLE DISEASE IN {{ $pronoun }}.
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between align-items-end px-5 h-375px">
                            <div>
                                <p class="text-end mt-8 mb-0">...............................................</p>
                                <span class="text-end">(Stamp of Health Care Organization)</span>
                            </div>
                            <div>
                                <p class="text-end mt-8 mb-0">...........................................</p>
                                <span class="text-end">(Stamp & Signature of Physician)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-0 border pt-1">
                        <div class="row border align-items-center">
                            <div class="col-1">
                                <h6 class="text-vertical">HEMATOLOGY</h6>
                            </div>
                            <div class="col-11 px-0">
                                <table class="table border-start table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <thead>
                                        <tr>
                                            <th class="border-end py-1">
                                                <p class="fw-bold">Blood Examination</p>
                                            </th>
                                            <th class="border-end py-1">
                                                <p class="fw-bold text-center">Result</p>
                                            </th>
                                            <th class="py-1">
                                                <p class="fw-bold text-center">Reference Range</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Total WBC Count</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($hematology) ? $hematology->wbc : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>4000-11000</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Differential Count</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Neutrophils</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($hematology) ? $hematology->neutrophils : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>45-74%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Lymphocytes</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($hematology) ? $hematology->lymphocytes : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>25-40%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Eosinophils</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($hematology) ? $hematology->eosinophils : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>1-6%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Monocytes</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($hematology) ? $hematology->monocytes : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>0-8%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Basophils</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($hematology) ? $hematology->basophils : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>0-3%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>ESR</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($hematology) ? $hematology->esr : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>M: &lt; 10 <br> F: &lt; 20</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Hemoglobin</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($hematology) ? $hematology->hemoglobin : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>M: 16 &plusmn; 2 gm % <br> F: 14 &plusmn; 2 gm %</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Malaria Parasite</p>
                                            </td>
                                            <td class="py-1">
                                                @if (!is_null($hematology))
                                                    <p>
                                                        @if ($hematology->malaria_parasite === 1)
                                                            Found
                                                        @else
                                                            Not Found
                                                        @endif
                                                    </p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Micro Filaria</p>
                                            </td>
                                            <td class="py-1">
                                                @if (!is_null($hematology))
                                                    <p>
                                                        @if ($hematology->micro_filaria === 1)
                                                            Found
                                                        @else
                                                            Not Found
                                                        @endif
                                                    </p>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row border border-top-0 align-items-center">
                            <div class="col-1">
                                <h6 class="text-vertical">BIOCHEMISTRY</h6>
                            </div>
                            <div class="col-11 px-0">
                                <table
                                    class="table border-start border-end-0 table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <thead>
                                        <tr>
                                            <th class="border-end py-1">
                                                <p>Random Blood Sugar</p>
                                            </th>
                                            <th class="border-end py-1">
                                                <p>{{ !is_null($biochemistry) ? $biochemistry->blood_sugar : 'N/A' }}</p>
                                            </th>
                                            <th class="py-1">
                                                <p>80-120 mg%</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Urea</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($biochemistry) ? $biochemistry->urea : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>20-45 mg%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Creatinine</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($biochemistry) ? $biochemistry->creatinine : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>0.4-1.4 mg%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Bilirubin (Total/Direct)</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($biochemistry) ? $biochemistry->sr_bilirubin_total_direct : 'N/A' }}
                                                </p>
                                            </td>
                                            <td class="py-1">
                                                <p>0.4-1.2 mg%(<1.2/<0.4)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>SGPT</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($biochemistry) ? $biochemistry->sgpt : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>upto 40 U/L</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>SGOT</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>{{ !is_null($biochemistry) ? $biochemistry->sgot : 'N/A' }}</p>
                                            </td>
                                            <td class="py-1">
                                                <p>upto 40 U/L</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row border border-top-0 align-items-center">
                            <div class="col-1">
                                <h6 class="text-vertical">SEROLOGY</h6>
                            </div>
                            <div class="col-11 px-0">
                                <table class="table border-start table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <tbody>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Anti-HIV (1&2)</p>
                                            </td>
                                            <td class="py-1">
                                                @if (!is_null($serology))
                                                    <p>
                                                        @if ($serology->anti_hiv === 1)
                                                            Reactive
                                                        @else
                                                            None Reactive
                                                        @endif
                                                    </p>
                                                    @else
                                                    <p>N/A</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>HBs-Ag</p>
                                            </td>
                                            <td class="py-1">
                                                @if (!is_null($serology))
                                                    <p>
                                                        @if ($serology->hbs_ag === 1)
                                                            Positive
                                                        @else
                                                            Negative
                                                        @endif
                                                    </p>
                                                    @else
                                                    <p>N/A</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Anti-HCV</p>
                                            </td>
                                            <td class="py-1">
                                                @if (!is_null($serology))
                                                    <p>
                                                        @if ($serology->anti_hcv === 1)
                                                            Positive
                                                        @else
                                                            Negative
                                                        @endif
                                                    </p>
                                                    @else
                                                    <p>N/A</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>VDRL/RPR</p>
                                            </td>
                                            <td class="py-1">
                                                @if (!is_null($serology))
                                                    <p>
                                                        @if ($serology->vdrl === 1)
                                                            Reactive
                                                        @else
                                                            None Reactive
                                                        @endif
                                                    </p>
                                                    @else
                                                    <p>N/A</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>TPHA</p>
                                            </td>
                                            <td class="py-1">
                                                @if (!is_null($serology))
                                                    <p>
                                                        @if ($serology->tpha === 1)
                                                            Reactive
                                                        @else
                                                            None Reactive
                                                        @endif
                                                    </p>
                                                    @else
                                                    <p>N/A</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>ABO-Blood Group & Rh-type</p>
                                            </td>
                                            <td class="py-1">
                                                @if (!is_null($serology))
                                                    <p>
                                                        @if ($serology->blood_group)
                                                            {{ $serology->blood_group }}
                                                        @else
                                                            N/A
                                                        @endif
                                                    </p>
                                                    @else
                                                    <p>N/A</p>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row border border-top-0 align-items-center">
                            <div class="col-1">
                                <h6 class="text-vertical">URINE</h6>
                            </div>
                            <div class="col-11 px-0">
                                <table class="table border-start table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <tbody>
                                        <tr>
                                            <td class="border-end py-1"><p>Albumin/Sugar</p></td>
                                            <td class="py-1"><p>{{ !is_null($urine) ? $urine->albumin_sugar : 'Nil' }}</p></td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>RBCs /hpf</p>
                                            </td>
                                            <td class="py-1">
                                                
                                                @if (!is_null($urine))
                                                <p>
                                                @if ($urine->rbc_hpf)
                                                    {{ $urine->rbc_hpf }}
                                                @else
                                                    Nil
                                                @endif
                                                </p>
                                            @else
                                                <p>Nil</p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Pus Cells /hpf</p>
                                            </td>
                                            <td class="py-1">
                                                
                                                @if (!is_null($urine))
                                                <p>
                                                @if ($urine->pus_cells)
                                                    {{ $urine->pus_cells }}
                                                @else
                                                    Nil
                                                @endif
                                                </p>
                                            @else
                                                <p>Nil</p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Epithelial cells /hpf</p>
                                            </td>
                                            <td class="py-1">
                                                
                                                @if (!is_null($urine))
                                                <p>
                                                @if ($urine->epithelial_cells)
                                                    {{ $urine->epithelial_cells }}
                                                @else
                                                    Nil
                                                @endif
                                                </p>
                                            @else
                                                <p>Nil</p>
                                            @endif
                                            </td>
                                        </tr>
                                        
                                        @if($report->sex === 'female')
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Urine Pregnancy Test (for female)</p>
                                            </td>
                                            <td class="py-1">
                                                @if (!is_null($other))
                                                    <p>
                                                        @if ($other->urine_pregnancy_test === 1)
                                                            Positive
                                                        @else
                                                            Negative
                                                        @endif
                                                    </p>
                                                    @else
    <p>Negative</p>
                                                @endif
                                            </td>
                                        </tr>
                                        @endif
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row border border-top-0 align-items-center">
                            <!--<div class="col-1">-->
                            <!--    <h6 class="text-vertical">OTHER</h6>-->
                            <!--</div>-->
                            <div class="col-12 px-0">
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <tbody>
                                        <tr>
                                            <!--<td class="border-end py-1">-->
                                            <!--    <p>Other</p>-->
                                            <!--</td>-->
                                            <td class="border-end py-1">
                                                <p>Opiates</p>
                                            </td>
                                            <td class=" py-1">
    @if (!is_null($other))
    <p>
    @if ($other->opiates === 1)
    Positive
@else
    Negative
    @endif
    </p>
    @else
    <p>Negative</p>
    @endif
    </td>
                                            <td class="py-1"></td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Cannabies</p>
                                            </td>
                                            <td class=" py-1">
    @if (!is_null($other))
    <p>
    @if ($other->cannabies === 1)
    Positive
@else
    Negative
    @endif
    </p>
    @else
    <p>Negative</p>
    @endif
    </td>
                                            <td class=" py-1"></td>
                                            <td class=" py-1">
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Mantoux Test</p>
                                            </td>
                                            <td class=" py-1">
    @if (!is_null($other))
    <p>
    @if ($other->mantoux_test === 1)
    Positive
@else
    Negative
    @endif
    </p>
    @else
    <p>Negative</p>
    @endif
    </td>
                                            <td class=" py-1"></td>
                                            <td class="py-1">
                                                <p></p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p class="text-end mt-20 pt-5 mb-0">.............................................</p>
                        <span class="text-end text-sign">(Signature of Lab Technician)</span>
                        <div class="row border align-items-center mx-n5">
                            <div class="col-12 bg-gray-400">
                                <h6 class="text-center pt-3">This Report is valid for Two months from the date of Medical
                                    Examination</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
