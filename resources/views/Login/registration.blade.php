<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ URL::asset('assets/main.8d288f825d8dffbbe55e.css')}}" rel="stylesheet"></head>
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
                            {{Form::open(['url'=>'/login','class'=>'','id'=>'registrationform'])}}
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('username', 'Username') }}
                                            {{ Form::text('username', null, ['class'=>'form-control', 'placeholder'=>'Username', 'required']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('email', 'Email') }}
                                            {{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name', 'autofocus', 'required']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('password', 'Password') }}
                                            {{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'required']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('confirmpass', ' Confirm Password') }}
                                            {{ Form::password('confirmpass', ['class'=>'form-control', 'placeholder'=>'Confirm Password', 'required']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('contact', ' Contact') }}
                                            {{ Form::number('contact', null, ['class'=>'form-control', 'placeholder'=>'02223242113', 'required']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('cnic', ' CNIC') }}
                                            {{ Form::number('cnic', null, ['class'=>'form-control', 'placeholder'=>'0000000000000', 'required']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            {{ Form::label('role', 'Select Type') }}
                                            {{ Form::select('role', ['Dropper'=>'Dropper', 'Picker'=>'Picker'], 'Dropper', ['class'=>'form-control role']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 category" style="display: none">
                                        <div class="position-relative form-group">
                                            {{ Form::label('category', 'Select Category') }}
                                            {{ Form::select('category', ['Courier'=>'Courier', 'Other'=>'Other' ], 'Other', ['class'=>'form-control']) }}
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
                                <div class="mt-3 position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Accept our <a href="javascript:void(0);">Terms
                                            and Conditions</a>.</label></div>
                                <div class="mt-4 d-flex align-items-center">
                                    <h5 class="mb-0">Already have an account? <a href="/login" class="text-primary">Sign in</a></h5>
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
