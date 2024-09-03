<ul class="nav arrow-steps">
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'reports' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"
            href="{{ is_null($report) ? route('reports.create', $report) : route('reports.edit', $report) }}">
            Applicant Details
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step2' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"
            href="{{ is_null($general) ? route('reports.generals.create', $report) : route('reports.generals.edit', $report) }}">
            General
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step3' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"
            href="{{ is_null($systemic) ? route('systemics.create', $report) : route('systemics.edit', $report) }}">
            Systemic
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step4' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"
            href="{{ is_null($hematology) ? route('hematologies.create', $report) : route('hematologies.edit', $report) }}">
            Hematology
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step5' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"
            href="{{ is_null($biochemistry) ? route('biochemistries.create', $report) : route('biochemistries.edit', $report) }}">
            Biochemistry
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step6' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"
            href="{{ is_null($serology) ? route('serologies.create', $report) : route('serologies.edit', $report) }}">
            Serology
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step7' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"
            href="{{ is_null($urine) ? route('urines.create', $report) : route('urines.edit', $report) }}">
            Urine
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step8' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"
            href="{{ is_null($other) ? route('others.create', $report) : route('others.edit', $report) }}">
            Other
        </a>
    </li>
</ul>
