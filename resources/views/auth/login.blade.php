<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>Metronic | Login Page - 6</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

        <!--end::Web font -->

        <!--begin::Global Theme Styles -->
        <link href="{{asset('metronic/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
        <link href="{{asset('metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

        <!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="{{asset('metronic/assets/demo/default/media/img/logo/favicon.ico')}}" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-grid--hor-tablet-and-mobile m-login m-login--6" id="m_login">
                <div class="m-grid__item   m-grid__item--order-tablet-and-mobile-2  m-grid m-grid--hor m-login__aside " style="background-image: url(../../../assets/app/media/img//bg/bg-4.jpg);">
                    <div class="m-grid__item">
                        <div class="m-login__logo">
                            <a href="#">
                                <img src="{{asset('metronic/assets/app/media/img/logos/logo-4.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver">
                        <div class="m-grid__item m-grid__item--middle">
                            <span class="m-login__title">Whatever CTA's wave purpose important exit element</span>
                            <span class="m-login__subtitle">Lorem ipsum amet estudiat</span>
                        </div>
                    </div>
                    <div class="m-grid__item">
                        <div class="m-login__info">
                            <div class="m-login__section">
                                <a href="#" class="m-link">&copy 2018 Metronic</a>
                            </div>
                            <div class="m-login__section">
                                <a href="#" class="m-link">Privacy</a>
                                <a href="#" class="m-link">Legal</a>
                                <a href="#" class="m-link">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper">

                    <!--begin::Head-->
                    <div class="m-login__head">
                        <span>Don't have an account?</span>
                        <a href="#" class="m-link m--font-danger">Sign Up</a>
                    </div>

                    <!--end::Head-->

                    <!--begin::Body-->
                    <div class="m-login__body">

                        <!--begin::Signin-->
                        <div class="m-login__signin">
                            <div class="m-login__title">
                                <h3>Create Account</h3>
                            </div>

                            <!--begin::Form-->
                            <form class="m-login__form m-form" action="">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Username" name="username" autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                </div>
                            </form>

                            <!--end::Form-->

                            <!--begin::Action-->
                            <div class="m-login__action">
                                <a href="#" class="m-link">
                                    <span>Forgot Password ?</span>
                                </a>
                                <a href="#">
                                    <button id="m_login_signin_submit" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign In</button>
                                </a>
                            </div>

                            <!--end::Action-->

                            <!--begin::Divider-->
                            <div class="m-login__form-divider">
                                <div class="m-divider">
                                    <span></span>
                                    <span>OR</span>
                                    <span></span>
                                </div>
                            </div>

                            <!--end::Divider-->

                            <!--begin::Options-->
                            <div class="m-login__options">
                                <a href="#" class="btn btn-primary m-btn m-btn--pill  m-btn  m-btn m-btn--icon">
                                    <span>
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-info m-btn m-btn--pill  m-btn  m-btn m-btn--icon">
                                    <span>
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-danger m-btn m-btn--pill  m-btn  m-btn m-btn--icon">
                                    <span>
                                        <i class="fab fa-google"></i>
                                        <span>Google</span>
                                    </span>
                                </a>
                            </div>

                            <!--end::Options-->
                        </div>

                        <!--end::Signin-->
                    </div>

                    <!--end::Body-->
                </div>
            </div>
        </div>

        <!-- end:: Page -->

        <!--begin::Global Theme Bundle -->
        <script src="{{asset('metronic/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
        <script src="{{asset('metronic/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts -->
        <script src="{{asset('metronic/assets/snippets/custom/pages/user/login6.js')}}" type="text/javascript"></script>

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
