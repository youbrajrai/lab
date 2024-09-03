<div id="kt_app_header" class="app-header">
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{route('home')}}" class="d-lg-none">
            </a>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                    <div class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <a href="{{route('home')}}" class="menu-link active">
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </div>
                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <a href="{{route('reports.create')}}" class="menu-link">
                            <span class="menu-title">Create Report</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                    </div>
                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <a href="{{route('reports.index')}}" class="menu-link">
                            <span class="menu-title">View Report</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                    </div>
                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <a href="{{route('blood-reports.index')}}" class="menu-link">
                            <span class="menu-title">Blood Report</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                    </div>
                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <a href="{{route('liver-reports.index')}}" class="menu-link">
                            <span class="menu-title">Liver Report</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                <span class="menu-link">
                                    <span class="menu-title">User Profile</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                            <div class="menu-active-bg px-4 px-lg-0">
                                <div class="tab-content py-4 py-lg-8 px-lg-7">
                                    <div class="tab-pane active w-lg-150px" id="kt_app_header_menu_pages_pages">
                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                                        <div class="menu-item p-0 m-0">
                                            <a href="pages/user-profile/overview.html" class="menu-link">
                                                <span class="menu-title">Overview</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="pages/user-profile/projects.html" class="menu-link">
                                                <span class="menu-title">Reports</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="pages/user-profile/documents.html" class="menu-link">
                                                <span class="menu-title">Documents</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-navbar flex-shrink-0">
                <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
                    <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                <i class="ki-duotone ki-magnifier fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown px-6 py-3 w-325px w-md-375px">
                            <div data-kt-search-element="wrapper">
                                <form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
                                    <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input"/>
                                    <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                                                <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                            </span>
                                    <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                                                <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                </form>
                                <div data-kt-search-element="empty" class="text-center d-none">
                                    <div class="pt-10 pb-10">
                                        <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </div>
                                    <div class="pb-15 fw-semibold">
                                        <h3 class="text-gray-600 fs-5 mb-2">
                                            No result found
                                        </h3>
                                        <div class="text-muted fs-7">
                                            Please try again with a different query
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                            <span class="path8"></span>
                            <span class="path9"></span>
                            <span class="path10"></span>
                        </i>
                        <i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-night-day fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                            </i>
                                        </span>
                                <span class="menu-title">Light</span>
                            </a>
                        </div>
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-moon fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                <span class="menu-title">Dark</span>
                            </a>
                        </div>
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-screen fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                <span class="menu-title">System</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">

                        <img src="{{Auth::User()->getFirstMediaUrl('images')}}" alt="user" />
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{Auth::User()->getFirstMediaUrl('images')}}"/>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        {{Auth::user()->name}}
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-5">
                            <a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                        </div>
                        <div class="menu-item px-5">
                            <a href="{{route('reports.index')}}" class="menu-link px-5">
                                <span class="menu-text">My Reports</span>
                                <span class="menu-badge">
                                    <span class="badge badge-light-danger badge-circle fw-bold fs-7">{{\App\Models\Report::count()}}</span>
                                </span>
                            </a>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-5">
                            <a href="{{ route('logout') }}" class="menu-link px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
