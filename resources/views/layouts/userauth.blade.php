<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>HillCross | Dashboard</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- style -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <!-- build:css ../assets/css/site.min.css -->
    <link rel="stylesheet" href="../libs/slick-carousel/slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="../libs/slick-carousel/slick/slick-theme.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/theme.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
    <!-- endbuild -->
</head>
<body class="layout-column bg-dark">
<header id="header" class="page-header scroll-header fixed">
    <div class="navbar navbar-expand-lg">
        <!-- brand -->
        <a href="index.html" class="navbar-brand text-white ">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1" fill="#000"></circle>
                <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1"></circle>
                <g class="loading-spin" stroke="currentColor" stroke-width="1" style="transform-origin: 12px 12px">
                    <path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>
                </g>
            </svg>
            <!-- <img src="../assets/img/logo.png" alt="..."> -->
            <span class="hidden-folded d-inline l-s-n-1x ">HillCross</span>
        </a>
        <!-- / brand -->
        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarCollapse">
            <ul class="navbar-nav" data-nav>
                <li class="nav-item">
                    <a href="../html/discover.html" class="nav-link">
                        <span class="nav-text">Discover</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../html/charts.html" class="nav-link">
                        <span class="nav-text">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../html/genres.html" class="nav-link">
                        <span class="nav-text">Genres</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../html/artists.html" class="nav-link">
                        <span class="nav-text">Artists</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../html/blog.html" class="nav-link">
                        <span class="nav-text">Blog</span>
                    </a>
                </li>
            </ul>
            <form class="input-group m-2 my-lg-0 ">
                        <span class="input-group-prepend">
          <button type="button" class="btn no-shadow no-bg px-0"><i data-feather="search"></i></button>
        </span>
                <input type="text" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search..." data-plugin="typeahead">
            </form>
        </div>
        <ul class="nav navbar-menu order-1 order-lg-2">
            <li class="nav-item d-none d-sm-block">
                <a class="nav-link px-2" data-toggle="fullscreen" data-plugin="fullscreen">
                    <i data-feather="maximize"></i>
                </a>
            </li>
            @if( Request::segment(1) == "dashboard")
@if( $beats->isEmpty() || $beats->count() < 5)
            <li class="nav-item">
                <a class="nav-link px-2" onclick="(window.location = '{{ route("user.upload") }}' )">
                    <i data-feather="upload" class="d-lg-none"></i><span class="btn btn-rounded btn-sm gd-primary text-white d-none d-lg-block">Upload</span>
                </a>
            </li>

@endif
        @endif
            <!-- User dropdown menu -->
            <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center py-0 px-lg-0 px-2 text-color">
                    <span class="avatar w-24"><img src="../assets/img/a2.jpg" alt="..."></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right mt-3 animate fadeIn">
                    <a class="dropdown-item" href="../html/artist.detail.html">
                        <span>Profile</span>
                    </a>
                    <a class="dropdown-item" href="../html/artist.detail.html#tracks">
                        <span>Tracks</span>
                    </a>
                    <a class="dropdown-item" href="../html/artist.detail.html#albums">
                        <span>Albums</span>
                    </a>
                    <a class="dropdown-item" href="../html/artist.detail.html#liked">
                        <span>Likes</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../html/signin.html">Sign out</a>
                </div>
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
    <!-- ############ Content START-->
    <div id="content" class="flex ">
@yield('content')
</div>
<!-- ############ Content END-->
</div>
<footer id="footer" class="page-footer ">
    <div class="padding bg-dark  b-t">
        <div class="page-container">
            <div class="py-5 text-inherit text-hover-primary">
                <div class="row mb-5">
                    <div class="col-6 col-md-4">
                        <div class="mb-3">
                            <!-- brand -->
                            <a href="index.html" class="navbar-brand text-white ">
                                <svg width="48" height="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1" fill="#000"></circle>
                                    <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1"></circle>
                                    <g class="loading-spin" stroke="currentColor" stroke-width="1" style="transform-origin: 12px 12px">
                                        <path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>
                                    </g>
                                </svg>
                                <!-- <img src="../assets/img/logo.png" alt="..."> -->
                                <span class="hidden-folded d-inline l-s-n-1x ">HillCross</span>
                            </a>
                            <!-- / brand -->
                        </div>
                        <div class="px-1">
                            <div class="dropdown mt-5 ml-md-5">
                                <button class="btn w-sm btn-dark text-align-auto b-a sorting" data-toggle="dropdown">English</button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">English</a>
                                    <a href="#" class="dropdown-item">Français</a>
                                    <a href="#" class="dropdown-item">日本语</a>
                                    <a href="#" class="dropdown-item">中文</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <h5 class="mb-3 text-muted">Pages</h5>
                        <ul class="list-unstyled l-h-2x text-highlight">
                            <li>
                                <a href="../html/artists.html">Artists</a>
                            </li>
                            <li>
                                <a href="../html/charts.html">Top Charts</a>
                            </li>
                            <li>
                                <a href="../html/genres.html">Genres</a>
                            </li>
                            <li>
                                <a href="../html/page.about.html">About Us</a>
                            </li>
                            <li>
                                <a href="../html/blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="../html/signin.html">Signin</a>
                            </li>
                            <li>
                                <a href="../html/signup.html">Signup</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-2">
                        <h5 class="mb-3 text-muted">Your HillCross</h5>
                        <ul class="list-unstyled l-h-2x text-highlight">
                            <li>
                                <a href="../html/artist.detail.html">Profile</a>
                            </li>
                            <li>
                                <a href="../html/artist.detail.html#albums">Albums</a>
                            </li>
                            <li>
                                <a href="../html/artist.detail.html#tracks">Tracks</a>
                            </li>
                            <li>
                                <a href="../html/artist.detail.html#playlist">Playlist</a>
                            </li>
                            <li>
                                <a href="../html/artist.detail.html#liked">Liked</a>
                            </li>
                            <li>
                                <a href="../html/artist.detail.html#following">Following</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-2">
                        <h5 class="mb-3 text-muted">Help</h5>
                        <ul class="list-unstyled l-h-2x text-highlight">
                            <li>
                                <a href="../docs">Documentation</a>
                            </li>
                            <li>
                                <a href="../docs/changelog.html">Changelog</a>
                            </li>
                            <li>
                                <a href="../docs/changelog.html">Update</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-2 text-md-right">
                        <h5 class="mb-3 text-muted">Follow Us</h5>
                        <a href="#">Fb</a>
                        <a href="#">Tw</a>
                        <a href="#">Ig</a>
                    </div>
                </div>
                <div class="text-center py-5">
                    <span class="text-muted text-sm">&copy; Copyright. HillCross - Music Web Application, All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <div data-plugin="plyr" class="plyrist plyrist_audio plyr-list-popup player bg-overlay b-t fixed-bottom" id="plyrist">
        <audio controls hidden></audio>
        <div class="plyr-list bg-dark-overlay" style="display:none">
        </div>
    </div>
</footer>
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

<script>
    $(document).click(function(){
        $("[data-plyr=next]").css('display','none');
        $("[data-plyr=prev]").css('display','none');
        $("[data-plyr=list]").css('display','none');
        $("[data-plyr=shuffle]").css('display','none');
        $("[data-plyr=like]").css('display','none');



    })
</script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    const inputElement = document.querySelector('input[id="beats_upload"]');
    const pond = FilePond.create(inputElement);

    FilePond.setOptions({
       server:{
           url: '{{ route('uploader') }}',
           headers:{
               'X-CSRF-TOKEN': '{{ csrf_token() }}'
           }
       }
    });
</script>
</body>
</html>
