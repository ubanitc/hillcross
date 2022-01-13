<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Home| HillCross Records</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- style -->
    <!-- build:css assets/css/site.min.css -->
    <link rel="stylesheet" href="{{ asset('libs/slick-carousel/slick/slick.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('libs/slick-carousel/slick/slick-theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/mystyle.css') }}" type="text/css"/>
    <!-- endbuild -->

</head>

<body class="layout-column bg-dark">
<header id="header" class="page-header fixed">
    <div class="navbar navbar-expand-lg">

        <!-- brand -->
        <a onclick="(window.location = '{{ route("main") }}' )" class="navbar-brand text-white ">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1" fill="#000"></circle>
                <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1"></circle>
                <g class="loading-spin" stroke="currentColor" stroke-width="1" style="transform-origin: 12px 12px">
                    <path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>
                </g>
            </svg>
            <!-- <img src="assets/img/logo.png" alt="..."> -->
            <span class="hidden-folded d-inline l-s-n-1x ">HillCross</span>
        </a>
        <!-- / brand -->

        <!-- Navbar collapse -->
{{--        <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarCollapse">--}}
{{--            <ul class="navbar-nav" data-nav>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="http://themeforest.net/user/flatfull" class="nav-link">--}}
{{--                        <span class="nav-text">Get it</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="docs/" class="nav-link no-ajax">--}}
{{--                        <span class="nav-text">Documentation</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}

        <ul class="nav navbar-menu order-1 order-lg-2">
            <li class="nav-item">
                <a class="nav-link no-ajax" onclick="(window.location = '{{ route("login") }}' )">
                    Login
                </a>
            </li>
            <li class="d-flex align-items-center reg-now">
                <a class="btn btn-rounded btn-sm btn-primary no-ajax" onclick="(window.location = '{{ route("instructions") }}' )">
                    Register
                </a>
            </li>
            <!-- Navarbar toggle btn -->
            <li class="nav-item d-lg-none">
                <a href="#" class="nav-link px-2" data-toggle="collapse" data-toggle-class data-target="#navbarCollapse">
                    <i data-feather="menu"></i>
                </a>
            </li>
        </ul>

    </div>
</header>
<div id="main" class="layout-row flex">

    @yield('content')


</div>
<footer id="footer" class="page-footer ">

    <div class="padding bg-dark  b-t">
        <div class="page-container">
            <div class="py-5 text-inherit text-hover-primary">
                <div class="row mb-5">
                    <div class="col-6 col-md-4">
                        <div class="mb-3">
                            <!-- brand -->
                            <a onclick="(window.location = '{{ route("main") }}' )" class="navbar-brand text-white ">
                                <svg width="48" height="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1" fill="#000"></circle>
                                    <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1"></circle>
                                    <g class="loading-spin" stroke="currentColor" stroke-width="1" style="transform-origin: 12px 12px">
                                        <path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>
                                    </g>
                                </svg>
                                <!-- <img src="assets/img/logo.png" alt="..."> -->
                                <span class="hidden-folded d-inline l-s-n-1x ">HillCross</span>
                            </a>
                            <!-- / brand -->
                        </div>
{{--                        <div class="px-1">--}}
{{--                            <div class="dropdown mt-5 ml-md-5">--}}
{{--                                <button class="btn w-sm btn-dark text-align-auto b-a sorting" data-toggle="dropdown">English</button>--}}
{{--                                <div class="dropdown-menu">--}}
{{--                                    <a href="#" class="dropdown-item">English</a>--}}
{{--                                    <a href="#" class="dropdown-item">Français</a>--}}
{{--                                    <a href="#" class="dropdown-item">日本语</a>--}}
{{--                                    <a href="#" class="dropdown-item">中文</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-6 col-md-2">
                        <h5 class="mb-3 text-muted">Pages</h5>
                        <ul class="list-unstyled l-h-2x text-highlight">
{{--                            <li><a href="html/artists.html">Artists</a></li>--}}
{{--                            <li><a href="html/charts.html">Top Charts</a></li>--}}
{{--                            <li><a href="html/genres.html">Genres</a></li>--}}
                            <li><a href="#">About Us</a></li>
{{--                            <li><a href="html/blog.html">Blog</a></li>--}}
                            <li><a onclick="(window.location = '{{ route("login") }}' )">Login</a></li>
{{--                            <li><a onclick="(window.location = '{{ route("instructions") }}' )">Register</a></li>--}}
                        </ul>
                    </div>
                    <div class="col-6 col-md-2">
{{--                        <h5 class="mb-3 text-muted">Your Bepop</h5>--}}
{{--                        <ul class="list-unstyled l-h-2x text-highlight">--}}
{{--                            <li><a href="html/artist.detail.html">Profile</a></li>--}}
{{--                            <li><a href="html/artist.detail.html#albums">Albums</a></li>--}}
{{--                            <li><a href="html/artist.detail.html#tracks">Tracks</a></li>--}}
{{--                            <li><a href="html/artist.detail.html#playlist">Playlist</a></li>--}}
{{--                            <li><a href="html/artist.detail.html#liked">Liked</a></li>--}}
{{--                            <li><a href="html/artist.detail.html#following">Following</a></li>--}}
{{--                        </ul>--}}
                    </div>
{{--                    <div class="col-6 col-md-2">--}}
{{--                        <h5 class="mb-3 text-muted">Help</h5>--}}
{{--                        <ul class="list-unstyled l-h-2x text-highlight">--}}
{{--                            <li><a href="docs">Documentation</a></li>--}}
{{--                            <li><a href="docs/changelog.html">Changelog</a></li>--}}
{{--                            <li><a href="docs/changelog.html">Update</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="col-6 col-md-2 text-md-right">
                        <h5 class="mb-3 text-muted">Follow Us</h5>
                        <a class="d-block" href="https://web.facebook.com/hillcrossrecords">Facebook</a>
                        <a class="d-block" href="https://www.linkedin.com/company/hillcross-records/">Linkedin</a>
                        <a class="d-block" href="https://www.instagram.com/hillcrossrecords/">Instagram</a>
                    </div>
                </div>
                <div class="text-center py-5">
                    <span class="text-muted text-sm">&copy; HillCross. {{ \Carbon\Carbon::now()->year }}. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- build:js assets/js/site.min.js -->
<!-- jQuery -->
<script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- ajax page -->
<script src="{{ asset('libs/pjax/pjax.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax.js') }}"></script>
<!-- lazyload plugin -->
<script src="{{ asset('assets/js/lazyload.config.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.js') }}"></script>
<script src="{{ asset('assets/js/plugin.js') }}"></script>
<!-- scrollreveal -->
<script src="{{ asset('libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
<script src="{{ asset('libs/slick-carousel/slick/slick.min.js') }}"></script>
<!-- feather icons -->
<script src="{{ asset('libs/feather-icons/dist/feather.min.js') }}"></script>
<!-- theme -->
<script src="{{ asset('assets/js/theme.js') }}"></script>
<!-- endbuild -->
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Feb 10, 2022 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Contest Ended";
            document.querySelector(".join-now").innerHTML = "Ended";
            document.querySelector(".reg-now").innerHTML = "";
        }
    }, 1000);
</script>
</body>
</html>
