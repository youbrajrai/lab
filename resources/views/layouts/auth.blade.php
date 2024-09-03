@include('includes.header')
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            @yield('form')
        </div>
    </div>
    <script src="{{URL::asset('plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{URL::asset('js/scripts.bundle.js')}}"></script>
    <script src="{{URL::asset('plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{URL::asset('plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{URL::asset('js/widgets.bundle.js')}}"></script>
    <script src="{{URL::asset('js/custom/widgets.js')}}"></script>
    <script src="{{URL::asset('js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{URL::asset('js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{URL::asset('js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{URL::asset('js/custom/utilities/modals/new-target.js')}}"></script>
    <script src="{{URL::asset('js/custom/utilities/modals/users-search.js')}}"></script>

</body>
</html
