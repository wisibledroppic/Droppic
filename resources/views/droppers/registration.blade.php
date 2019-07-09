@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100">
            <div class="h-100 no-gutters row">
                <div
                    class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                        <div class="app-logo"></div>
                        <h4>
                            <div>Welcome,</div>
                            <span>It only takes a <span class="text-success">few seconds</span> to create your
                                account</span>
                        </h4>
                        <div>
                            <form method="POST" action="{{ route('dropper.createregistration') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleEmail"
                                                class=""><span class="text-danger">*</span> Email</label>
                                            <input name="email" id="email" value="{{ old('email') }}" required
                                                autocomplete="email" placeholder="Your Email"
                                                class="form-control input-mask-trigger"
                                                data-inputmask="'alias': 'email'" im-insert="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleName"
                                                class=""><span class="text-danger">*</span>Name</label><input
                                                name="dname" id="dname" placeholder="Name here..." type="text"
                                                class="form-control" value="{{ old('dname') }}" required
                                                autocomplete="dname"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleName"
                                                class=""><span class="text-danger">*</span>Contact</label><input name="dcontact" id="dcontact" value="{{ old('dcontact') }}" required
                                                autocomplete="dcontact" placeholder="Your Cell"
                                                class="form-control input-mask-trigger" data-inputmask="'mask': '+[99-]999-9999999'" im-insert="true"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleName"
                                                class=""><span class="text-danger">*</span>CNIC No </label><input name="dcnic" id="dcnic" value="{{ old('dcnic') }}" required
                                                autocomplete="dcnic" placeholder="Your NIC"
                                                class="form-control input-mask-trigger" data-inputmask="'mask': '[99999-]9999999-9'" im-insert="true"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="password"
                                                class=" col-form-label text-md-right"><span
                                                    class="text-danger">*</span>{{ __('Password') }}</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="password-confirm"
                                                class="col-form-label text-md-right"><span
                                                    class="text-danger">*</span>{{ __('Confirm Password') }}</label><input
                                                id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group col-md-6">
                                            <label for="ReCaptcha">Recaptcha:</label>
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 position-relative form-check"><input name="check" id="exampleCheck"
                                        type="checkbox" class="form-check-input"><label for="exampleCheck"
                                        class="form-check-label">Accept our <a href="javascript:void(0);">Terms
                                            and Conditions</a>.</label></div>
                                <div class="mt-4 d-flex align-items-center">
                                    <h5 class="mb-0">Already have an account? <a href="{{ route('dropper.showlogin') }}"
                                            class="text-primary">Sign in</a></h5>
                                    <div class="ml-auto">
                                        <button
                                            class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Create
                                            Account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-lg-flex d-xs-none col-lg-5">
                    <div class="slider-light">
                        <div class="slick-slider slick-initialized">
                            <div>
                                <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark"
                                    tabindex="-1">
                                    <div class="slide-img-bg"
                                    style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                    <div class="slider-content">
                                        <h3>Scalable, Modular, Consistent</h3>
                                        <p>Easily exclude the components you don't require. Lightweight, consistent
                                            Bootstrap based styles across all elements and components</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
