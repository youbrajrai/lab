@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Reports
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="/" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Reports</li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="{{ route('reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
                    </div>
                </div>
            </div>
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <div class="col-xxl-12">
                            <div class="card card-flush h-xl-100">
                                <div class="card-body ps-15 pe-0 pt-15 pb-0">
                                    <div class="table-responsive h-650px pe-15">
                                        <table
                                            class="table table-row-dashed table-column-dashed align-middle rounded-6 gs-0 gy-3 my-0">
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                    <th class="p-0 py-3 min-w-auto text-center">
                                                        SN
                                                    </th>
                                                    <th class="p-0 py-3 min-w-auto text-start ps-3">
                                                        Name
                                                    </th>
                                                    <th class="p-0 py-3 min-w-auto text-center ps-2">
                                                        Age
                                                    </th>
                                                    <th class="p-0 py-3 min-w-auto text-center">
                                                        Gender
                                                    </th>

                                                    {{-- <th class="p-0 py-3 min-w-auto text-center">
                                                Pathology
                                            </th>
                                            <th class="p-0 py-3 min-w-auto text-center">
                                                Hematology
                                            </th>
                                            <th class="p-0 py-3 min-w-auto text-center">
                                                Biochemistry
                                            </th>
                                            <th class="p-0 py-3 min-w-auto text-center">
                                                Kidney
                                            </th>
                                            <th class="p-0 py-3 min-w-auto text-center">
                                                Liver
                                            </th>
                                            <th class="p-0 py-3 min-w-auto text-center">
                                                Lipid
                                            </th> --}}

                                                    <th class="p-0 py-3 min-w-auto text-center">
                                                        Generate Form
                                                    </th>
                                                    <th colspan="2" class="p-0 py-3 w-50px text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($reports as $key => $report)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <p class="text-gray-800 fw-bold text-hover-primary fs-6">
                                                                    {{ $key+1 }}
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="d-flex justify-content-start flex-column text-gray-800">
                                                                    {{ $report->name }}
                                                                    <!--<span class="text-gray-400 fw-semibold d-block fs-7">{{ $report->nationality }}</span>-->
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p
                                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-center">
                                                                {{ $report->age }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p
                                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-center">
                                                                @if ($report->sex === 'female')
                                                                    F
                                                                @else
                                                                    M
                                                                @endif
                                                            </p>
                                                    </td>

                                                        <td class="text-center">
                                                            <a target="_blank"
                                                                href="{{ route('reports.preliminary', $report) }}"
                                                                class="btn btn-icon btn-active-color-primary w-auto h-30px">
                                                                Generate
                                                            </a>
                                                        </td>

                                                        <td class="text-center">
                                                            <a target="_blank" href="{{ route('reports.show', $report) }}"
                                                                class="btn btn-icon btn-active-color-primary w-auto h-30px">
                                                                Print
                                                            </a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ route('test-report.edit', $report) }}"
                                                                class="btn btn-icon btn-active-color-primary w-auto h-30px">
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
                            <div class="d-flex justify-content-center align-items-center gap-2 gap-lg-3 mt-5">
                                {{ $reports->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
