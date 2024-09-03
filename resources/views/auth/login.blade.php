@extends('layouts.auth')
@section('form')
    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
        <div class="w-lg-500px p-10">
            <div class="d-flex flex-column flex-center py-7 py-lg-10 px-5 px-md-10 w-100">
                <a href="#" class="mb-0 mb-lg-6">
                    <img alt="Logo" src="{{URL::asset('storage/1/custom-2.svg')}}" class="h-60px h-lg-75px">
                </a>
                <h1 class="d-none d-lg-block fs-2qx fw-bolder text-center text-dark">
                    UNIVERSAL DIAGNOSTIC CENTER PVT. LTD.
                </h1>
            </div>
            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="" action="{{route('login')}}" method="post">
                @csrf
                <div class="text-center mb-11">
                    <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                </div>
                <div class="fv-row mb-8">
                    <input type="email" placeholder="E-mail" name="email" autocomplete="off"  class="form-control bg-transparent" required="" value="{{old('email')}}">
                </div>
                <div class="fv-row mb-3">
                    <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" required="">
                </div>

                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    <div></div>
                    <a href="#" class="link-primary">Forgot Password ?</a>
                </div>
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary" name="login_submit">
                        <span class="indicator-label">Sign In</span>
                        <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                    </button>
                </div>
                <div class="text-gray-500 text-center fw-semibold fs-6">
                    Not a Member yet?
                    <a href="{{route('register')}}" class="link-primary">Sign up</a>
                </div>
            </form>
        </div>
    </div>
    <div class="w-lg-500px d-flex justify-content-end flex-stack px-10 mx-auto">
        <div class="d-flex fw-semibold text-primary fs-base gap-5">
            <a href="#" target="_blank">About us</a>
            <a href="#" target="_blank">Support</a>
        </div>
    </div>
    </div>
    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url({{URL::asset('media/misc/auth-bg.jpg')}})">
    </div>
@stop
