@php
    // Route mapping for test types
    $routes = [
        'general' => 'reports.generals',
        'systemic' => 'systemics',
        'hematology' => 'hematologies',
        'biochemistry' => 'biochemistries',
        'serology' => 'serologies',
        'urine' => 'urines',
        'other' => 'others',
        // 'kidney' => 'kidney-reports',
        // 'lipid' => 'lipid-profiles',
        // 'liver' => 'liver-reports',
        // 'mantoux' => 'mantoux-tests',
        // 'stool' => 'stool-reports',
        // 'xray' => 'xray-reports',
    ];
@endphp
<ul class="nav arrow-steps">
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'reports' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"
            href="{{ is_null($report) ? route('test-report.create') : route('test-report.edit', $report) }}">
            Applicant Details
        </a>
    </li>

    @foreach ($selectedTests as $key => $test)
        @php
            $routePrefix = $routes[$test];
            $isCurrent = Request::segment(1) == $routePrefix;
            $createRoute = route($routePrefix . '.create', $report);
            $editRoute = route($routePrefix . '.edit', $report);
        @endphp
        <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ $isCurrent ? 'current' : '' }}">
            <a class="nav-link overflow-hidden w-auto" href="{{ is_null($testData[$test]) ? $createRoute : $editRoute }}">
                {{ ucfirst($test) }}
            </a>
        </li>
    @endforeach
</ul>
