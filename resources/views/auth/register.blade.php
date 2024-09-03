@extends('layouts.auth')
@section('form')
<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
        <div class="w-lg-500px p-10">
            <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center mb-11">
                    <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Username" name="name" value="{{old('name')}}" autocomplete="off" class="form-control bg-transparent">
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Email" name="email"  value="{{old('email')}}" autocomplete="off" class="form-control bg-transparent">
                </div>

                <div class="fv-row mb-8" data-kt-password-meter="true">
                    <div class="mb-1">
                        <div class="position-relative mb-3">
                            <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" value="{{old('password')}}" autocomplete="off">
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="ki-duotone ki-eye-slash fs-2"></i>
                                <i class="ki-duotone ki-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                    </div>
                    <div class="text-muted">
                        Use 8 or more characters with a mix of letters, numbers &amp;
                        symbols.
                    </div>
                </div>
                <div class="fv-row mb-8">
                    <input placeholder="Confirm Password" name="password_confirmation" type="password" autocomplete="off" class="form-control bg-transparent">
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}" autocomplete="off" class="form-control bg-transparent">
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Company Name" name="company_name" value="{{old('company_name')}}" autocomplete="off" class="form-control bg-transparent">
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Address" name="address" value="{{old('address')}}" autocomplete="off" class="form-control bg-transparent">
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Gov/Regd No." name="regd_no" value="{{old('regd_no')}}" autocomplete="off" class="form-control bg-transparent">
                </div>
                <div class="fv-row mb-8">
                        <input type="text" placeholder="Website" name="website" value="{{ old('website') }}"
                            autocomplete="off" class="form-control bg-transparent">
                    </div>
                <div class="fv-row mb-8">
                    Company logo
                    <input type="file" id="image_logo" name="image" accept="image/*" class="form-control bg-transparent">
                </div>
                <div class="fv-row mb-8">
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="toc" value="1">
                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the <a href="#" class="ms-1 link-primary">Terms</a></span>
                    </label>
                </div>
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-primary" name="register_submit">
                        <span class="indicator-label">Sign up</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
                <div class="text-gray-500 text-center fw-semibold fs-6">
                    Already have an Account?
                    <a href="{{route('login')}}" class="link-primary fw-semibold">Sign in</a>
                </div>
            </form>
        </div>
    </div>
    <div class="w-lg-500px justify-content-end d-flex flex-stack px-10 mx-auto">
        <div class="d-flex fw-semibold text-primary fs-base gap-5">
            <a href="#" target="_blank">Terms</a>
            <a href="#" target="_blank">Plans</a>
            <a href="#" target="_blank">Contact Us</a>
        </div>
    </div>
</div>
    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(https://dev.nirvanstudio.com.np/udc/wp-content/themes/metronic/assets/media/misc/auth-bg.png)">
        <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
            <a href="#" class="mb-0 mb-lg-12">
                <img alt="Logo" src="https://dev.nirvanstudio.com.np/udc/wp-content/themes/metronic/assets/media/logos/custom-1.png" class="h-60px h-lg-75px">
            </a>
            <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="https://dev.nirvanstudio.com.np/udc/wp-content/themes/metronic/assets/media/misc/auth-screens.png" alt="">
            <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                Fast, Efficient and Productive
            </h1>
            <div class="d-none d-lg-block text-white fs-base text-center">
                In this kind of post,
                <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed <br>and provides some background information about
                <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their <br>work following this is a transcript of the interview.
            </div>
        </div>
    </div>
    @stop


