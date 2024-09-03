@php
// Mapping of test types to partials
$partials = [
'general' => 'partials.forms.general-form',
'systemic' => 'partials.forms.systemic-form',
'hematology' => 'partials.forms.hematology-form',
'biochemistry' => 'partials.forms.biochemistry-form',
'serology' => 'partials.forms.serology-form',
'urine' => 'partials.forms.urine-form',
'kidney' => 'partials.forms.kidney-form',
'lipid' => 'partials.forms.lipid-form',
'liver' => 'partials.forms.liver-form',
'mantoux' => 'partials.forms.mantoux-form',
'pregnancy' => 'partials.forms.pregnancy-form',
'stool' => 'partials.forms.stool-form',
'xray' => 'partials.forms.xray-form',
'other' => 'partials.forms.other-form'
];
@endphp
<form action="{{ route('tests.process') }}" method="POST">
    @csrf
    @foreach ($selectedTests as $index => $test)
    @php
    $partial = $partials[$test] ?? null;
    @endphp
    @if ($partial && view()->exists($partial))
    <div class="m-0">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <div class="d-flex flex-column flex-column-fluid">
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 collapsible toggle active" data-bs-toggle="collapse" data-bs-target="#kt_job_4_{{ $index }}" aria-expanded="true">
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                Insert {{ ucfirst($test) }} Test Details
                            </h1>
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <li class="breadcrumb-item text-muted">Create {{ ucfirst($test) }} Test</li>
                            </ul>
                        </div>
                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                            <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1"><span class="path1"></span><span class="path2"></span></i>
                            <i class="ki-duotone ki-plus-square toggle-off fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </div>
                    </div>
                </div>
                <div id="kt_job_4_{{ $index }}" class="fs-6 ms-1 collapse show">
                    @include($partial)
                </div>
            </div>
        </div>
    </div>
    @else
    <p>Unknown or missing partial for test type: {{ $test }}</p>
    @endif
    @endforeach

    <div class="col-3 mt-10">
        <a href="{{ route('home') }}" class="btn btn-sm fw-bold btn-danger me-4">Cancel</a>

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
        <button type="submit" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Save
        </button>
    </div>
</form>
@stop