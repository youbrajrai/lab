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
            <div class="table-responsive px-5">
                <div class="row gx-10 gy-8">
                    <div class="col-6">
                        <p>C.No: {{ $report->id }} </p>
                    </div>
                    <div class="col-6 text-end">
                        <span>Gov. Reg. No: {{ $user->regd_no }}</span>
                        <span>PAN No.: 301214463</span>
                    </div>
                </div>
                <div class="row gx-10 gy-8 align-items-center border-bottom border-dark py-5">
                    <div class="offset-1 col-1">
                        <img style="width: 8rem; height: auto;" class="logo" src="{{ $user->getFirstMediaUrl('images') }}"
                            alt="" />
                    </div>
                    <div class="col-9">
                        <h1 class="text-uppercase text-center">
                            {{ $user->company_name }}
                        </h1>
                        <p class="mb-0 text-center">
                            {{ $user->address }}, Phone: {{ $user->phone }}
                        </p>
                    </div>
                </div>
                <div class="row gx-10 gy-8 w-lg-100 ms-0 mt-0">
                    <div class="col-6 mt-3">
                        <p class="mb-0 py-2">Name : {{ $salutation }} {{ $report->name }}</p>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="row">
                            <div class="col-6">
                                <p class="mb-0 py-2">C.N.O : {{ $report->cno }}</p>
                            </div>
                            <div class="col-6">
                                <p class="mb-0 py-2">Date : {{ $report->medical_examination_date }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <p class="mb-0 py-2">Age/Sex : {{ $report->age }}/{{ $report->sex === 'male' ? 'M' : 'F' }}</p>
                    </div>
                    
                    <div class="col-6 mt-3">
                        <p class="mb-0 py-2">Contact : {{ $report->contact }}</p>
                    </div>
                    
                    <div class="col-6 mt-3">
                        <p class="mb-0 py-2">Job Applied for : {{ $report->job_title }}</p>
                    </div>
                    
                    <div class="col-6 mt-3">
                        <p class="mb-0 py-2">Married Status :
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
                    
                    <div class="col-6 mt-3">
                        <p class="mb-0 py-2">Passport No : {{ $report->passport_number }} </p>
                    </div>
                    
                    <div class="col-6 mt-3">
                        <div class="row">
                            <div class="col-4">
                                <p class="mb-0 py-2">Height : {{ !is_null($general) ? $general->height : '' }}</p>
                            </div>
                            <div class="col-8">
                                <p class="mb-0 py-2">cm</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-6 mt-3">
                        <p class="mb-0 py-2">Date & Place of Issue :
                        @if ($report->passport_expiry && $report->passport_issue_place)
                                {{ $report->passport_expiry }} / {{ $report->passport_issue_place }}
                            @endif
                        </p>
                    </div>
                    
                    <div class="col-6 mt-3">
                        <div class="row">
                            <div class="col-4">
                                <p class="mb-0 py-2">Weight : {{ !is_null($general) ? $general->weight : '' }}</p>
                            </div>
                            <div class="col-8">
                                <p class="mb-0 py-2">Kg.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-6 mt-3">
                        <p class="mb-0 py-2">
                            Recruiting Agency :
                        </p>
                    </div>
                    
                    <div class="col-6 mt-3">
                        <div class="row">
                            <div class="col-4">
                                <p class="mb-0 py-2">B.P. : {{ !is_null($general) ? $general->blood_pressure : '' }}</p>
                            </div>
                            <div class="col-8">
                                <p class="mb-0 py-2">L.M.P.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 mt-3">
                        <p class="mb-0 py-2">Complains : </p>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="mb-0 py-2">
                            History : (Specifically TB, Family History of TB, HTN, DM, Any Surgery, Drugs, Allergy):
                        </p>
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
                    <div class="col-6 mt-0 px-2">
                        <table class="table border table-row-dashed align-middle gs-0 gy-3 my-1">
                            <thead>
                                <tr>
                                    <th class="border-end py-2">
                                        <p class="fw-bold">Type of Medical Examination</p>
                                    </th>
                                    <th class="py-2">
                                        <p class="fw-bold text-center"> Result</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Cardiovascular</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Pulmonary</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Gastroenterology</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Neurology</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Musculoskeletal</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Genitourinary</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Oro - Dental</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Extremities / Deformities</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Varicose Veins</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Hernia</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Hydrocele</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr class="multi-row">
                                    <td class="border-end py-2">
                                        <p>Eye (Vision)</p>
                                    </td>
                                    <td class="row">
                                        <div class="col-6 px-0">
                                            <div class="border-end border-bottom py-2">
                                                <p class="text-center">R.Eye</p>
                                            </div>
                                            <div class="border-end py-2">
                                                <p class="text-center">L.Eye</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="py-2">
                                                <p></p>
                                            </div>
                                            <div class="py-2">
                                                <p></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="multi-row">
                                    <td class="border-end py-2">
                                        <p>Ear</p>
                                    </td>
                                    <td class="row">
                                        <div class="col-6 px-0">
                                            <div class="border-end border-bottom py-2">
                                                <p class="text-center">R.Ear</p>
                                            </div>
                                            <div class="border-end py-2">
                                                <p class="text-center">L.Ear</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="py-2">
                                                <p></p>
                                            </div>
                                            <div class="py-2">
                                                <p></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Others</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2">
                                        <p>Radiological (Chest X-Ray)</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                                <tr style="height: 2.6rem;">
                                    <td class="border-end py-2">
                                        {{-- <p>ECG</p> --}}
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-end py-2" style="height: 7rem;">
                                        <p>CLINICAL IMPRESSION</p>
                                    </td>
                                    <td class="py-2">
                                        <p></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="px-4 py-6">
                            <p class="mb-5">DEAR SIR,</p>
                            <p>
                                The above mentioned medical report is of Mr/Mrs./Miss
                                <br /><br />
                                ..............................................................................................
                                <br />
                                is fit for the mentioned job.
                            </p>
                        </div>
                        <div class="px-4 py-6 mt-9 ps-text">
                            <span class="mb-5">Format Recommended by Ministry of Health and Population, Government of
                                Nepal</span>
                        </div>
                    </div>
                    <div class="col-6 mt-0 pt-1">
                        <div class="row border align-items-center">
                            <div class="col-1">
                                <h6 class="text-vertical">
                                    HEMATOLOGY
                                </h6>
                            </div>
                            <div class="col-11 px-0">
                                <table class="table border-start table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <thead>
                                        <tr>
                                            <th class="border-end py-2">
                                                <p class="fw-bold">Blood
                                                    Examination</p>
                                            </th>
                                            <th class="border-end py-2">
                                                <p class="fw-bold text-center">Result</p>
                                            </th>
                                            <th class="border-end py-2">
                                                <p class="fw-bold text-center">Reference
                                                    Range</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Total WBC Count</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
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
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>45-74%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Lymphocytes</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>25-40%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Eosinophils</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>1-6%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Monocytes</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>0-8%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Basophils</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>0-3%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>ESR</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>M: &lt; 10 <br> F: &lt; 20</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Hemoglobin</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>
                                                    M: 16 &plusmn; 2 gm% <br> F: 14
                                                    &plusmn; 2 gm%
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Malaria Parasite</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Micro Filaris</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row border align-items-center">
                            <div class="col-1">
                                <h6 class="text-vertical">
                                    BIOCHEMISTRY
                                </h6>
                            </div>
                            <div class="col-11 px-0">
                                <table class="table border-start table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <thead>
                                        <tr>
                                            <th class="border-end py-1">
                                                <p>Random Blood Sugar</p>
                                            </th>
                                            <th class="border-end py-1">
                                                <p></p>
                                            </th>
                                            <th>
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
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>20-45 mg%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Creatinine</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>0.4-1.4 mg%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Bilirubin (Total/Direct)</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>0.4-1.2 mg%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>SGPT</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>upto 40 U/L</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>SGOT</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>upto 40 U/L</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row border align-items-center">
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
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>HBs-Ag</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Anti-HCV</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>VDRL/RPR</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>TPHA</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Blood Group (ABO/Rh)</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row border align-items-center">
                            <div class="col-1">
                                <h6 class="text-vertical">URINE</h6>
                            </div>
                            <div class="col-11 px-0">
                                <table class="table border-start table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <tbody>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>RBC</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Pus Cells</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Epithelial Cells</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Pregnancy Test(If Female)</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row border align-items-center">
                            {{-- <div class="col-1">
                                <h6 class="text-vertical">OTHER</h6>
                            </div> --}}
                            <div class="col-11 px-0">
                                <table class="table border-start table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <tbody>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Other</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p>Eg. Opiates</p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Cannabies</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end py-1">
                                                <p>Mantoux Test</p>
                                            </td>
                                            <td class="border-end py-1">
                                                <p></p>
                                            </td>
                                            <td>
                                                <p></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-7">
                            <div class="col-6 px-15">
                                <p class="text-start mt-10 mb-0">
                                    ....................................
                                </p>
                                <p class="text-start">
                                    Authorized Signature
                                </p>
                            </div>
                            <div class="col-6 px-15">
                                <p class="text-end mt-10 mb-0">
                                    ..................................
                                </p>
                                <p class="text-end">
                                    Physician Signature
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Tap pane-->
    </div>
@stop
