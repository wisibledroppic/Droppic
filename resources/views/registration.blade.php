<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Droppic Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ URL::asset('css/main.8d288f825d8dffbbe55e.css')}}" rel="stylesheet"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100">
            <div class="h-100 no-gutters row">
                <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                        <div class="app-logo"></div>
                        <h4>
                            <div>Welcome,</div>
                            <span>It only takes a <span class="text-success">few seconds</span> to create your account</span></h4>
                        <div>
                            {{Form::open(['url'=>'/signup','class'=>'','id'=>'registrationform'])}}
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('name', 'Name') }}
                                            <input
                                                name="name" id="name" placeholder="Name here..." type="text"
                                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required
                                                autocomplete="name">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('email', 'Email') }}
                                            <input name="email" id="email" value="{{ old('email') }}" required
                                                autocomplete="email" placeholder="Your Email"
                                                class="form-control input-mask-trigger @error('email') is-invalid @enderror"
                                                data-inputmask="'alias': 'email'" im-insert="true">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('password', 'Password') }}
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('confirmpass', ' Confirm Password') }}
                                            <input
                                                id="confirmpass" type="password" class="form-control @error('confirmpass') is-invalid @enderror"
                                                name="confirmpass" required autocomplete="new-password">
                                            @error('confirmpass')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('contact', ' Contact') }}
                                            <input name="contact" id="contact" value="{{ old('contact') }}" required
                                                autocomplete="contact" placeholder="Your Cell"
                                                class="form-control input-mask-trigger @error('contact') is-invalid @enderror" data-inputmask="'mask': '9999-9999999'" im-insert="true">
                                                @error('contact')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('cnic', ' CNIC') }}
                                            <input name="cnic" id="cnic" value="{{ old('cnic') }}" required
                                                autocomplete="cnic" placeholder="Your NIC"
                                                class="form-control input-mask-trigger @error('cnic') is-invalid @enderror" data-inputmask="'mask': '99999-9999999-9'" im-insert="true">
                                                @error('cnic')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('role', 'Select Type') }}
                                            {{ Form::select('role', ['Dropper'=>'Dropper', 'Picker'=>'Picker'], 'Dropper', ['class'=>'form-control role']) }}
                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 category" style="display: none">
                                        <div class="position-relative form-group">
                                            {{ Form::label('category', 'Select Category') }}
                                            {{ Form::select('category', ['3'=>'Courier', '2'=>'Seller' ], 'Seller', ['class'=>'form-control']) }}
                                            @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <script>
                                        $(function() {
                                            $(".role").on("change",function() {
                                                if($('.role').val()=='Picker'){
                                                    $('.category').show();
                                                }
                                                else{
                                                    $('.category').hide();
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            @include('layouts.flash-messages')
                                <div class="mt-3 position-relative form-check"><input name="check" id="check" value="{{ old('check') }}" required
                                    autocomplete="check" type="checkbox"
                                    class="form-check-input input-mask-trigger " required ><label for="exampleCheck" class="form-check-label">Accept our <a href="javascript:void(0);">Terms
                                            and Conditions</a>.</label></div>

                                        <div class="form-group col-md-6">
                                            <label for="ReCaptcha">Recaptcha:</label>
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                            @error('g-recaptcha-response')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                <div class="mt-4 d-flex align-items-center">
                                    <h5 class="mb-0">Already have an account? <a href="/signin"  class="text-primary">Sign in</a></h5>
                                    <div class="ml-auto">
                                        {{ Form::submit('Create Account', ['class'=>'btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg']) }}
                                    </div>
                                </div>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
                <div class="d-lg-flex d-xs-none col-lg-5">
                    <div class="slider-light">
                        <div class="slick-slider slick-initialized">
                            <div>
                                <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                    <div class="slide-img-bg" style="background-image: url({{ URL::asset('assets/images/originals/citynights.jpg')}});"></div>
                                    <div class="slider-content"><h3>Scalable, Modular, Consistent</h3>
                                        <p>Easily exclude the components you don't require. Lightweight, consistent Bootstrap based styles across all elements and components</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('assets/scripts/main.8d288f825d8dffbbe55e.js')}}"></script></body>
</html>
