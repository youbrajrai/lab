@include('includes.header')
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        @include('includes.nav')
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            @include('includes.sidebar')
            @yield('content')
            <!--end:::Main-->

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
@include('includes.footer')
