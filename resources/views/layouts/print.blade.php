<!DOCTYPE html>
<html lang="en">

<head id="head_id">
    <title>Medical Examination Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ URL::asset('/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/css/print.css?ver=2.2') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="sticky-panel">
        <a href="{{ route('home') }}" class="btn btn-sm fw-bold btn-primary">Home</a>
        <button class="btn btn-sm fw-bold btn-primary" onclick="printReport()">Print Report</button>
        @if (request()->routeIs('reports.show'))
            <a href="{{ route('reports.edit', $report) }}" class="btn btn-sm fw-bold btn-primary">Edit Report</a>
            <a href="{{ route('reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
        @elseif(request()->routeIs('liver-reports.show'))
            <a href="{{ route('liver-reports.edit', $liverReport) }}" class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('liver-reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
        @elseif(request()->routeIs('kidney-reports.show'))
            <a href="{{ route('kidney-reports.edit', $kidneyReport) }}" class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('kidney-reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
        @elseif(request()->routeIs('blood-reports.show'))
            <a href="{{ route('blood-reports.edit', $bloodReport) }}" class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('blood-reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
        @elseif(request()->routeIs('lipid-profiles.show'))
            <a href="{{ route('lipid-profiles.edit', $lipidProfile) }}" class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('lipid-profiles.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
        @elseif(request()->routeIs('urine-reports.show'))
            <a href="{{ route('urine-reports.edit', $urineReport) }}" class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('urine-reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
        @elseif(request()->routeIs('biochemistry-reports.show'))
            <a href="{{ route('biochemistry-reports.edit', $biochemistryReport) }}"
                class="btn btn-sm fw-bold btn-primary">Edit Report</a>
            <a href="{{ route('biochemistry-reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
        @elseif (request()->routeIs('xray-reports.show'))
            <a href="{{ route('xray-reports.edit', $xrayReport) }}" class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('xray-reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
        @elseif (request()->routeIs('serology-reports.show'))
            <a href="{{ route('serology-reports.edit', $serologyReport) }}" class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('serology-reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
            @elseif (request()->routeIs('stool-reports.show'))
            <a href="{{ route('stool-reports.edit', $stoolReport) }}" class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('stool-reports.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
            @elseif (request()->routeIs('mantoux-tests.show'))
            <a href="{{ route('mantoux-tests.edit', $mantouxTest) }}" class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('mantoux-tests.create') }}" class="btn btn-sm fw-bold btn-primary">New Report</a>
            @elseif (request()->routeIs('cannabies-pregnancy-tests.show'))
            <a href="{{ route('cannabies-pregnancy-tests.edit', $cannabiesPregnancyTest) }}"
                class="btn btn-sm fw-bold btn-primary">Edit
                Report</a>
            <a href="{{ route('cannabies-pregnancy-tests.create') }}" class="btn btn-sm fw-bold btn-primary">New
                Report</a>
        @endif
    </div>

    <div class="container">
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid">
                            <div id="kt_app_content" class="app-content flex-column-fluid pb-0">
                                <div id="kt_app_content_container" class="app-container container-fluid">
                                    <div class="row g-5 g-xl-10">
                                        <div class="col-xxl-12">
                                            @if (request()->routeIs('reports.show'))
                                                @php $class = 'main-report'; @endphp
                                            @elseif(request()->routeIs('reports.preliminary'))
                                                @php $class = 'second-report'; @endphp
                                            @else
                                                @php $class ='single-report' ; @endphp
                                            @endif
                                            <div id="print_id" class="card card-flush mb-10 {{ $class }}">
                                                <div class="card-body px-5 py-8">
                                                    @yield('document')
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
        </div>
    </div>
</body>
<script type="text/javascript">
    function printReport() {
        window.print();
    }
</script>
<script src="{{ URL::asset('/js/scripts.bundle.js') }}"></script>

</html>
