<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a class="d-flex align-items-center" href="{{ route('home') }}">
            <img alt="Logo" src="{{ Auth::User()->getFirstMediaUrl('images') }}"
                class="h-50px app-sidebar-logo-default" />
            {{--            <img alt="Logo" src="{{URL::asset('media/logos/logo.svg')}}" class="h-20px app-sidebar-logo-minimize"/> --}}
            <p class="text-white ms-4">UNIVERSAL DIAGNOSTIC CENTER PVT.LTD</p>
        </a>
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-7"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item here show menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-home"></i>
                        </span>
                        <a href="{{ route('home') }}" class="active">
                            <span class="menu-title">Dashboard</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                    </span>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Main Report</span>
                    </div>
                </div>
                <div class="menu-item menu-accordion">
                    <a href="{{ route('reports.create') }}" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-add-folder">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Create Report</span>
                    </a>
                </div>
                <div class="menu-item menu-accordion">
                    <a href="{{ route('test-report.create') }}" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-add-folder">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Create Test Report</span>
                    </a>
                </div>
                <div class="menu-item menu-accordion">
                    <a href="{{ route('reports.index') }}" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-update-folder">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">View Report</span>
                    </a>
                </div>
                <div class="menu-item menu-accordion">
                    <a href="{{ route('test-report.index') }}" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-update-folder">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">View Report</span>
                    </a>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Individual Reports</span>
                    </div>
                </div>
                {{--                @if (request()->is('home') != '1') --}}
                {{--                <div class="menu-item menu-accordion"> --}}
                {{--                    <a href="{{route('reports.generals.index', $general->report_id )}}" class="menu-link"> --}}
                {{--                        <span class="menu-icon"> --}}
                {{--                            <i class="ki-duotone ki-address-book fs-2"> --}}
                {{--                                <span class="path1"></span> --}}
                {{--                                <span class="path2"></span> --}}
                {{--                                <span class="path3"></span> --}}
                {{--                            </i> --}}
                {{--                        </span> --}}
                {{--                        <span class="menu-title">General Examination</span> --}}
                {{--                    </a> --}}
                {{--                </div> --}}

                {{--                <div class="menu-item menu-accordion"> --}}
                {{--                    <a href="{{route('systemics.index', $systemic->report_id)}}" class="menu-link"> --}}
                {{--                        <span class="menu-icon"> --}}
                {{--                            <i class="ki-duotone ki-address-book fs-2"> --}}
                {{--                                <span class="path1"></span> --}}
                {{--                                <span class="path2"></span> --}}
                {{--                                <span class="path3"></span> --}}
                {{--                            </i> --}}
                {{--                        </span> --}}
                {{--                        <span class="menu-title">Systemic Examination</span> --}}
                {{--                    </a> --}}
                {{--                </div> --}}
                {{--                <div class="menu-item menu-accordion"> --}}
                {{--                    <a href="{{route('hematologies.index', $hematology->report_id)}}" class="menu-link"> --}}
                {{--                        <span class="menu-icon"> --}}
                {{--                            <i class="ki-duotone ki-address-book fs-2"> --}}
                {{--                                <span class="path1"></span> --}}
                {{--                                <span class="path2"></span> --}}
                {{--                                <span class="path3"></span> --}}
                {{--                            </i> --}}
                {{--                        </span> --}}
                {{--                        <span class="menu-title">Hematology</span> --}}
                {{--                    </a> --}}
                {{--                </div> --}}
                {{--                @endif --}}
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-flask fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Blood Reports</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">

                        <div class="menu-item menu-accordion">
                            <a href="{{ route('blood-reports.index') }}" class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-pulse fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Hematology Report</span>
                            </a>
                        </div>

                        <div class="menu-item menu-accordion">
                            <a href="{{ route('biochemistry-reports.index') }}" class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-flask fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Biochemistry Test</span>
                            </a>
                        </div>

                        <div class="menu-item menu-accordion">
                            <a href="{{ route('liver-reports.index') }}" class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-capsule fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Liver Report</span>
                            </a>
                        </div>

                        <div class="menu-item menu-accordion">
                            <a href="{{ route('lipid-profiles.index') }}" class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-test-tubes fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Lipid Profile</span>
                            </a>
                        </div>

                        <div class="menu-item menu-accordion">
                            <a href="{{ route('serology-reports.index') }}" class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-drop fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Serology Test</span>
                            </a>
                        </div>

                        <div class="menu-item menu-accordion">
                            <a href="{{ route('kidney-reports.index') }}" class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-pill fs-2">
                                    </i>
                                </span>
                                <span class="menu-title">Kidney Report</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item menu-accordion">
                    <a href="{{ route('urine-reports.index') }}" class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-drop fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                        <span class="menu-title">Urine Examination</span>
                    </a>
                </div>
                
                <div class="menu-item menu-accordion">
                    <a href="{{ route('cannabies-pregnancy-tests.index') }}" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-drop fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Canabies/Pregnancy Test</span>
                    </a>
                </div>
                
                <div class="menu-item menu-accordion">
                    <a href="{{ route('stool-reports.index') }}" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-flask fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Stool Examination</span>
                    </a>
                </div>

                <div class="menu-item menu-accordion">
                    <a href="{{ route('xray-reports.index') }}" class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-flask fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                        <span class="menu-title">X-ray Report</span>
                    </a>
                </div>
                
                <div class="menu-item menu-accordion">
                    <a href="{{ route('mantoux-tests.index') }}" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-flask fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Mantoux Test</span>
                    </a>
                </div>
                
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-user">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Referrals</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('referrals.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Referrals</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('referrals.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add Referral</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-user">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">User Profile</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="pages/user-profile/overview.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Overview</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="pages/user-profile/projects.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Reports</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="pages/user-profile/documents.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Documents</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
        <a href="{{ route('logout') }}"
            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="btn-label">Logout</span>
            <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </div>
</div>
