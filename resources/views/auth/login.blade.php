@extends('layouts.lay-admin')


@section('content')


<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100">
            <div class="h-100 no-gutters row">
                <div class="d-none d-lg-block col-lg-4">
                    <div class="slider-light">
                        <div class="slick-slider">
                            <div>
                                <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate"
                                    tabindex="-1">
                                    <div class="slide-img-bg"
                                        style="background-image: url('assets/images/originals/city.jpg');"></div>
                                    <div class="slider-content">
                                        <h3>Perfect Balance</h3>
                                        <p>ArchitectUI is like a dream. Some think it's too good to be true! Extensive
                                            collection of unified React Boostrap Components and Elements.</p>
                                    </div>
                                </div>
                            </div>
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
                            <div>
                                <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning"
                                    tabindex="-1">
                                    <div class="slide-img-bg"
                                        style="background-image: url('assets/images/originals/citydark.jpg');"></div>
                                    <div class="slider-content">
                                        <h3>Complex, but lightweight</h3>
                                        <p>We've included a lot of components that cover almost all use cases for any
                                            type of application.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                        <div class="app-logo"></div>
                        <h4 class="mb-0">
                            <span class="d-block">Welcome back,</span>
                            <span>Please sign in to your account.</span></h4>
                        <h6 class="mt-3">No account? <a href="{{ route('register') }}" class="text-primary">Sign up now</a>
                        </h6>
                        <div class="divider row"></div>
                        <div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleEmail"
                                                class="">Email</label><input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="examplePassword"
                                                class="">Password</label><input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror</div>
                                    </div>
                                </div>
                                <div class="position-relative form-check"><input class="form-check-input"
                                        type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>Keep me logged in</label></div>
                                <div class="divider row"></div>
                                <div class="d-flex align-items-center">
                                    <div class="ml-auto">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="btn-lg btn btn-link">Recover
                                            Password</a>
                                        @endif
                                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
