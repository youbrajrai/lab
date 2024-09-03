<ul class="nav arrow-steps">
    @php 
    $statement = DB::select("SHOW TABLE STATUS LIKE 'reports'");
    $report = $statement[0]->Auto_increment;
    @endphp
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'reports' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"  href="{{Route::has('reports.create', $report)?route('reports.create', $report):''}}">
            Applicant Details
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step2' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"  href="{{Route::has('reports.generals.create', $report)?route('reports.generals.create', $report):''}}">
            General
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step3'? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"  href="{{Route::has('systemics.create', $report)?route('systemics.create', $report): ''}}">
            Systemic
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step4' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"  href="{{Route::has('hematologies.create', $report)?route('hematologies.create', $report):''}}">
            Hematology
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step5'? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"   href="{{Route::has('biochemistries.create', $report)?route('biochemistries.create', $report):''}}">
            Biochemistry
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step6' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto"  href="{{Route::has('serologies.create', $report)?route('serologies.create', $report):''}}">
            Serology
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{ Request::segment(1) == 'step7' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto" href="{{Route::has('     urines.create', $report)?route('urines.create', $report):''}}">
            Urine
        </a>
    </li>
    <li class="nav-item mb-3 me-3 me-lg-6 h-50px step select {{Request::segment(1) == 'step8' ? 'current' : '' }}">
        <a class="nav-link overflow-hidden w-auto" href="{{Route::has('others.create', $report)?route('others.create', $report):''}}">
            Other
        </a>
    </li>
</ul>
