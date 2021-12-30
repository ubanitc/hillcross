<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Signup | HillCross Records</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- style -->
    <!-- build:css assets/css/site.min.css -->
    <link rel="stylesheet" href="/libs/slick-carousel/slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="/libs/slick-carousel/slick/slick-theme.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/theme.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
    <!-- endbuild -->
    <style>
        input[type="date"]:before{
            color:lightgray;
            content:attr(placeholder);
        }

        input[type="date"].full:before {
            color:black;
            content:""!important;
        }
    </style>

</head>
<body class="layout-row bg-dark">
<div class="d-flex flex-column flex">
    <div class="row no-gutters h-100">
        <div class="col-md-6 bg-dark bg-img" style="background-image:url(assets/img/rode.jpg)">
            <div class="p-3 p-md-5 d-flex flex-column h-100">
                <h4 class="mb-3 text-white">HillCross</h4>
                <div class="text-fade">Bring yout music to life</div>
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
                <h5>Welcome to HillCross Records</h5>
                <p>
                    <small class="text-muted">Fill in the form below to join the contest</small>
                </p>
                <div class="">
                    <form name="form" method="post" action="{{ route('register') }}">
                        @csrf
                        {{--                        <div>--}}
                        {{--                            <a href="#" class="btn btn-icon btn-rounded indigo text-white">--}}
                        {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 264 512">--}}
                        {{--                                    <path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229" class=""></path>--}}
                        {{--                                </svg>--}}
                        {{--                            </a>--}}
                        {{--                            <a href="#" class="btn btn-icon btn-rounded cyan text-white">--}}
                        {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">--}}
                        {{--                                    <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"--}}
                        {{--                                          class=""></path>--}}
                        {{--                                </svg>--}}
                        {{--                            </a>--}}
                        {{--                            <a href="#" class="btn btn-icon btn-rounded red text-white">--}}
                        {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 640 512">--}}
                        {{--                                    <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"--}}
                        {{--                                          class=""></path>--}}
                        {{--                                </svg>--}}
                        {{--                            </a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="my-3 text-muted text-sm text-muted">--}}
                        {{--                            OR--}}
                        {{--                        </div>--}}
                        <div class="form-group">
                            <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" autofocus autocomplete="name" value="{{ old('name') }}" placeholder="Full Name" required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" @error('email') is-invalid @enderror name="email" autocomplete="email" value="{{ old('email') }}" placeholder="Email Address" required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <div class="form-group">
                            <input type="date" id="myel" onfocus="(this.placeholder='')" placeholder="date of birth" class="form-control" name="date_of_birth" id="dateofbirth" value="{{ old('date_of_birth') }}" required  @error('date_of_birth') is-invalid @enderror>
                            {{--                            <input type="text" onclick="(this.type='date')" onfocus="(this.type='date')"  class=" form-control" name="date_of_birth" placeholder="Date of Birth" value="{{ old('date_of_birth') }}" required  @error('date_of_birth') is-invalid @enderror>--}}

                            @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select class=" form-control" aria-label="Default select example" name="state_of_origin" required @error('state_of_origin') is-invalid @enderror>
                                <option disabled selected>State of Origin</option>
                                <option value="ABUJA_FCT">ABUJA FCT</option>
                                <option value="ABIA">ABIA</option>
                                <option value="ADAMAWA">ADAMAWA</option>
                                <option value="AKWA_IBOM">AKWA IBOM</option>
                                <option value="ANAMBRA">ANAMBRA</option>
                                <option value="BAUCHI">BAUCHI</option>
                                <option value="BAYELSA">BAYELSA</option>
                                <option value="BENUE">BENUE</option>
                                <option value="BORNO">BORNO</option>
                                <option value="CROSS_RIVER">CROSS RIVER</option>
                                <option value="DELTA">DELTA</option>
                                <option value="EBONYI">EBONYI</option>
                                <option value="EDO">EDO</option>
                                <option value="EKITI">EKITI</option>
                                <option value="ENUGU">ENUGU</option>
                                <option value="GOMBE">GOMBE</option>
                                <option value="IMO">IMO</option>
                                <option value="JIGAWA">JIGAWA</option>
                                <option value="KADUNA">KADUNA</option>
                                <option value="KANO">KANO</option>
                                <option value="KATSINA">KATSINA</option>
                                <option value="KEBBI">KEBBI</option>
                                <option value="KOGI">KOGI</option>
                                <option value="KWARA">KWARA</option>
                                <option value="LAGOS">LAGOS</option>
                                <option value="NASSARAWA">NASSARAWA</option>
                                <option value="NIGER">NIGER</option>
                                <option value="OGUN">OGUN</option>
                                <option value="ONDO">ONDO</option>
                                <option value="OSUN">OSUN</option>
                                <option value="OYO">OYO</option>
                                <option value="PLATEAU">PLATEAU</option>
                                <option value="RIVERS">RIVERS</option>
                                <option value="SOKOTO">SOKOTO</option>
                                <option value="TARABA">TARABA</option>
                                <option value="YOBE">YOBE</option>
                                <option value="ZAMFARA">ZAMFARA</option>

                            </select>

                            @error('state_of_origin')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select class=" form-control" aria-label="Default select example" name="gender" required @error('gender') is-invalid @enderror>
                                <option disabled selected>Gender</option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>

                            </select>

                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+234</span>
                            </div>
                            <input type="tel" class="form-control" placeholder="Contact Number" aria-label="Contact Number" required name="contact_number" value="{{ old('contact_number') }}" @error('contact_number') is-invalid @enderror aria-describedby="basic-addon1">
                        </div>

                            @error('contact_number')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Instagram Handle" aria-label="Instagram Handle" required name="instagram_handle" value="{{ old('instagram_handle') }}" @error('instagram_handle') is-invalid @enderror aria-describedby="basic-addon1">
                        </div>

                            @error('instagram_handle')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="mb-3 text-sm">
                            <span class="text-muted">By clicking Sign Up, I agree to the</span>
                            <a href="#">Terms of service</a>
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Sign Up</button>

                        <div>Already have an account?
                            <a href="{{ route('login') }}" class="text-primary _600">Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- build:js assets/js/site.min.js -->
<!-- jQuery -->
<script src="libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="libs/popper.js/dist/umd/popper.min.js"></script>
<script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ajax page -->
<script src="libs/pjax/pjax.min.js"></script>
<script src="assets/js/ajax.js"></script>
<!-- lazyload plugin -->
<script src="assets/js/lazyload.config.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/plugin.js"></script>
<!-- scrollreveal -->
<script src="libs/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="libs/slick-carousel/slick/slick.min.js"></script>
<!-- feather icons -->
<script src="libs/feather-icons/dist/feather.min.js"></script>
<!-- theme -->
<script src="assets/js/theme.js"></script>
<!-- endbuild -->

<script>
    $("#myel").on("input",function(){
        if($(this).val().length>0){
            $(this).addClass("full");
        }
        else{
            $(this).removeClass("full");
        }
    });

</script>
</body>
</html>













































{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
