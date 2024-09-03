@extends('layouts.app');
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Referrals
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="/" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Referrals</li>
                        </ul>
                    </div>

                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        {{-- <a href="" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Print Report</a> --}}
                        <a href="{{ route('referrals.create') }}" class="btn btn-sm fw-bold btn-primary">Add New</a>
                    </div>

                </div>
            </div>
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <div class="col-xxl-12">
                            <div class="card card-flush h-xl-100">
                                <div class="card-body p-15 pe-0 pb-0">
                                    <div class="table-responsive h-550px pe-15">

                                        {{-- @foreach ($reports as $keys => $report)
                                            <p>{{ $report->referred_by }}</p>
                                        @endforeach --}}

                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">

                                                    <th class="p-0 pb-3 min-w-150px text-start">
                                                        #
                                                    </th>

                                                    <th class="p-0 pb-3 min-w-150px text-center">
                                                        Name
                                                    </th>

                                                    <th class="p-0 pb-3 min-w-150px text-center">
                                                        Email
                                                    </th>

                                                    <th class="p-0 pb-3 min-w-150px text-center">
                                                        Address
                                                    </th>

                                                    <th class="p-0 pb-3 min-w-150px text-center">
                                                        Contact
                                                    </th>

                                                    <th class="p-0 pb-3 min-w-150px text-center">
                                                        Referral Count
                                                    </th>

                                                    <th rowspan="2" class="p-0 pb-3 w-50px text-end">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($referrals as $key => $referral)
                                                    <tr>

                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <p
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                                                    {{ $key + 1 }}
                                                                </p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    {{ $referral->name }}
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <p
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                                                    {{ $referral->email }}
                                                                </p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <p
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                                                    {{ $referral->address }}
                                                                </p>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="d-flex align-items-center justify-content-center
                                                                <p class="text-gray-800
                                                                fw-bold text-hover-primary mb-1 fs-6">
                                                                {{ $referral->contact }}
                                                                </p>
                                                            </div>

                                                        </td>

                                                        <td>

                                                            <div class="d-flex align-items-center justify-content-center">

                                                                @php
                                                                    if (isset($referralCounts[$referral->id])):
                                                                        $referralCount = $referralCounts[$referral->id];
                                                                        echo '<p class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 ">' . $referralCount . '</p>';
                                                                    endif;
                                                                @endphp

                                                            </div>

                                                        </td>

                                                        <td class="text-end">
                                                            <a target=""
                                                                href="{{ route('referrals.show', $referral) }}"
                                                                class="btn btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                Detail
                                                            </a>
                                                        </td>
                                                        <td class="text-end">
                                                            <a target=""
                                                                href="{{ route('referrals.edit', $referral) }}"
                                                                class="btn btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                Edit
                                                            </a>
                                                        </td>

                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="3">No record found.</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center gap-2 gap-lg-3">
                                {{ $referrals->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
