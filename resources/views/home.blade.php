@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Insights
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('home')}}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Medical Reports</li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="{{route('reports.create')}}" class="btn btn-sm fw-bold btn-primary">New Report</a>
                    </div>
                </div>
            </div>
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-25 mb-5 mb-xl-10" style="background-color: #f1416c; background-image: url('{{URL::asset('media/patterns/vector-1.png')}}');">
                                <div class="card-header pt-5">
                                    <div class="card-title d-flex flex-column">
                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{\App\Models\Report::query()->where('user_id', Auth::user()->id)->count()}}</span>
                                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Reports</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-flush h-md-75">
                                <div class="card-header">
                                    <h3 class="card-title text-gray-800 fw-bold">Create Report</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex flex-stack">
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step2/3/create" class="text-primary fw-semibold fs-6 me-2">General Report</a>
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step6/3/create" type="button" class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end ml-auto">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </div>
                                    <div class="separator separator-dashed my-2"></div>
                                    <div class="d-flex flex-stack">
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step3/3/create" class="text-primary fw-semibold fs-6 me-2">Systemic Report</a>
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step6/3/create" type="button" class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end ml-auto">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </div>
                                    <div class="separator separator-dashed my-2"></div>
                                    <div class="d-flex flex-stack">
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step4/3/create" class="text-primary fw-semibold fs-6 me-2">Hematology Report</a>
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step6/3/create" type="button" class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end ml-auto">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </div>
                                    <div class="separator separator-dashed my-2"></div>
                                    <div class="d-flex flex-stack">
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step5/3/create" class="text-primary fw-semibold fs-6 me-2">Biochemistry Report</a>
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step6/3/create" type="button" class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end ml-auto">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </div>
                                    <div class="separator separator-dashed my-2"></div>
                                    <div class="d-flex flex-stack">
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step6/3/create" class="text-primary fw-semibold fs-6 me-2">Serology Report</a>
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step6/3/create" type="button" class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end ml-auto">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </div>
                                    <div class="separator separator-dashed my-2"></div>
                                    <div class="d-flex flex-stack">
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step7/3/create" class="text-primary fw-semibold fs-6 me-2">Urine Report</a>
                                        <a href="https://dev.nirvanstudio.com.np/medicalreport/public/step6/3/create" type="button" class="btn btn-icon btn-sm btn-color-gray-400 btn-active-color-primary justify-content-end ml-auto">
                                            <i class="ki-duotone ki-exit-right-corner fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card h-md-100 mb-5">
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
                                        <span class="text-muted fw-semibold fs-7">More than 100 new reports</span>
                                    </h3>
                                </div>
                                <div class="card-body pb-0">
                                    <div id="kt_charts_widget_1_chart" style="height: 400px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="card card-flush h-md-100">
                                <div class="card-header pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Reports</span>
                                    </h3>
                                </div>
                                <div class="card-body pt-6">
                                    <ul class="nav nav-pills nav-pills-custom mb-3">
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-auto h-85px pt-5 pb-2 active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1">
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-duotone ki-category fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </div>
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">General</span>
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-auto h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2">
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-duotone ki-abstract-26 fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Systemic</span>
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-auto h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3">
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-duotone ki-pulse fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Hematology</span>
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-auto h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4">
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-duotone ki-flask fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Biochemistry</span>
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-auto h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5">
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-duotone ki-drop fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Serology</span>
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                            <div class="table-responsive">
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">NAME</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($reports as $report)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                @if($report->getFirstMedia())
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{$report->getFirstMediaUrl()}}" class="" alt=""/>
                                                                </div>
                                                                @else
                                                                <?php $avatar =  URL::asset('media/avatars/300-1.jpg') ; ?>
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="" class="" alt=""/>
                                                                    </div>
                                                                @endif
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="{{(is_null($general))?route('reports.generals.create', $report):route('reports.general.edit', $report)}}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{$report->name}}</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="{{route('reports.show', $report)}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan = "2">No Records Found</td>
                                                    </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_2">
                                            <div class="table-responsive">
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">NAME</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($reports as $report)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    @if($report->getFirstMedia())
                                                                        <div class="symbol symbol-50px me-3">
                                                                            <img src="{{$report->getFirstMediaUrl()}}" class="" alt=""/>
                                                                        </div>
                                                                        @else
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="{{URL::asset('media/avatars/300-1.jpg')}}" class="" alt=""/>
                                                                    </div>
                                                                    @endif
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{(is_null($systemic))?route('systemics.create', $report):route('systemics.edit', $report)}}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{$report->name}}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{route('reports.show', $report)}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan = "2">No Records Found</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_3">
                                            <div class="table-responsive">
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">NAME</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($reports as $report)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    @if($report->getFirstMedia())
                                                                        <div class="symbol symbol-50px me-3">
                                                                            <img src="{{$report->getFirstMediaUrl()}}" class="" alt=""/>
                                                                        </div>
                                                                        @else
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="{{URL::asset('media/avatars/300-1.jpg')}}" class="" alt=""/>
                                                                    </div>
                                                                    @endif
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{(is_null($hematology))?route('hematologies.create', $report):route('hematologies.edit', $report)}}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{$report->name}}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{route('reports.hematology', $report)}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan = "2">No Records Found</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_4">
                                            <div class="table-responsive">
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($reports as $report)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    @if($report->getFirstMedia())
                                                                        <div class="symbol symbol-50px me-3">
                                                                            <img src="{{$report->getFirstMediaUrl()}}" class="" alt=""/>
                                                                        </div>
                                                                        @else
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="{{URL::asset('media/avatars/300-1.jpg')}}" class="" alt=""/>
                                                                    </div>
                                                                    @endif
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{(is_null($biochemistry))?route('biochemistries.create', $report):route('biochemistries.edit', $report)}}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{$report->name}}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{route('reports.biochemistry', $report)}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan = "2">No Records Found</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_5">
                                            <div class="table-responsive">
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($reports as $report)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    @if($report->getFirstMedia())
                                                                        <div class="symbol symbol-50px me-3">
                                                                            <img src="{{$report->getFirstMediaUrl()}}" class="" alt=""/>
                                                                        </div>
                                                                        @else
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="{{URL::asset('media/avatars/300-1.jpg')}}" class="" alt=""/>
                                                                    </div>
                                                                    @endif
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{(is_null($serology))?route('serologies.create', $report):route('serologies.edit', $report)}}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{$report->name}}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{route('reports.hematology', $report)}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan = "2">No Records Found</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        @include('includes.footer');--}}
    </div>
@stop
