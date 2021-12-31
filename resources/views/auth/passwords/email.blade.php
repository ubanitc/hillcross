<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Forgot-password | Hill Cross Records</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- style -->
    <!-- build:css ../assets/css/site.min.css -->
    <link rel="stylesheet" href="../libs/slick-carousel/slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="../libs/slick-carousel/slick/slick-theme.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/theme.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
    <!-- endbuild -->
</head>
<body class="layout-row bg-dark">
<div class="d-flex flex-column flex">
    <div class="row no-gutters h-100">
        <div class="col-md-6 bg-primary r-l" style="background-image:url(../assets/img/combo.jpg); background-repeat: round; ">
            <div class="p-3 p-md-5 d-flex flex-column h-100">
                <h4 class="mb-3 text-white">Hill Cross Records</h4>
                <div class="text-fade">Only the best music inside</div>
                <div class="d-flex flex align-items-center justify-content-center">
                </div>
                <div class="d-flex text-sm text-fade">
                    <a href="index.html" class="text-white">About</a>
                    <span class="flex"></span>
                    <a href="#" class="text-white mx-1">Terms</a>
                    <a href="#" class="text-white mx-1">Policy</a>
                </div>
            </div>
        </div>
        <div class="col-md-6" id="content-body">

            <div class="p-3 p-md-5">
                <div>
                    <h5>Forgot your password?</h5>
                    <p class="text-muted my-3">
                        Enter your email below, and we will send you instructions on how to change your password.
                    </p>
                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form name="reset" class=" my-md-5" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                </form>
                <div class="pt-1">
                    Return to
                    <a href="{{ route('login') }}" class="text-primary font-weight-bold">Sign in</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- build:js ../assets/js/site.min.js -->
<!-- jQuery -->
<script src="../libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ajax page -->
<script src="../libs/pjax/pjax.min.js"></script>
<script src="../assets/js/ajax.js"></script>
<!-- lazyload plugin -->
<script src="../assets/js/lazyload.config.js"></script>
<script src="../assets/js/lazyload.js"></script>
<script src="../assets/js/plugin.js"></script>
<!-- scrollreveal -->
<script src="../libs/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="../libs/slick-carousel/slick/slick.min.js"></script>
<!-- feather icons -->
<script src="../libs/feather-icons/dist/feather.min.js"></script>
<!-- theme -->
<script src="../assets/js/theme.js"></script>
<!-- endbuild -->
</body>
</html>






























{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
