<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>BitCrypto</title>

    <link rel="icon" href="img/mini_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/themefy_icon/themify-icons.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/niceselect/css/nice-select.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css')}}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{ asset('vendors/gijgo/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendors/tagsinput/tagsinput.css')}}" />

    <!-- date picker -->
    <link rel="stylesheet" href="{{ asset('vendors/datepicker/date-picker.css')}}" />

    <link rel="stylesheet" href="{{ asset('vendors/vectormap-home/vectormap-2.0.2.css')}}" />

    <!-- scrollabe  -->
    <link rel="stylesheet" href="{{ asset('vendors/scroll/scrollable.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{ asset('vendors/text_editor/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{ asset('vendors/morris/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{ asset('vendors/material_icon/material-icons.css')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/colors/default.css" id="colorSkinCSS')}}">
</head>
<body class="crm_body_bg">



<!-- main content part here -->

<!-- sidebar  -->
<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="index-2.html"><img src="img/logo_white.png" alt=""></a>
        <a class="small_logo" href="index-2.html"><img src="img/mini_logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
{{--        <li class="">--}}
{{--            <a class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/1.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Dashboard </span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="index_2.html">Default</a></li>--}}
{{--                <li><a href="index_3.html">Light Sidebar</a></li>--}}
{{--                <li><a href="index-2.html">Dark Sidebar</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <li class="">
            <a  href="{{ route('user.home') }}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/1.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Home</span>
                </div>
            </a>
        </li>
        <li class="">
            <a  href="{{ route('user.upload') }}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/General.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Upload Beats</span>
                </div>
            </a>
        </li>
        <li class="">
            <a  href="{{ route('user.profile') }}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/4.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Profile</span>
                </div>
            </a>
        </li>
        <li style="background: #FF0000;"  >

            <a  href="crypto_stats.html" aria-expanded="false" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/logout.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Logout</span>
                </div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/6.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Transactions</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="Request.html">Request</a></li>--}}
{{--                <li><a href="tan_cancel.html">Cancel</a></li>--}}
{{--                <li><a href="Refound.html">Refound</a></li>--}}
{{--                <li><a href="Payment_details.html">Payment details</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/7.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Tickers</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="ticker_dark.html">Ticker Dark</a></li>--}}
{{--                <li><a href="Ticker_Light.html">Ticker Light</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/8.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Apps </span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="editor.html">Editor</a></li>--}}
{{--                <li><a href="invoice.html">Invoice</a></li>--}}
{{--                <li><a href="Builder.html">Builder</a></li>--}}
{{--                <li><a href="calender.html">Calander</a></li>--}}
{{--                <li><a href="Board.html">Board</a></li>--}}
{{--                <li><a href="basic_card.html">Basic Card</a></li>--}}
{{--                <li><a href="theme_card.html">Theme Card</a></li>--}}
{{--                <li><a href="dargable_card.html">Draggable Card</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a   class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/Pages.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Pages</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="role_permissions.html">Role & Permissions</a></li>--}}
{{--                <li><a href="faq.html">FAQ</a></li>--}}
{{--                <li><a href="login.html">Login</a></li>--}}
{{--                <li><a href="resister.html">Register</a></li>--}}
{{--                <li><a href="error_400.html">Error 404</a></li>--}}
{{--                <li><a href="error_500.html">Error 500</a></li>--}}
{{--                <li><a href="forgot_pass.html">Forgot Password</a></li>--}}
{{--                <li><a href="gallery.html">Gallery</a></li>--}}
{{--                <li><a href="module_setting.html">Module Setting</a></li>--}}
{{--                <li><a href="Products.html">Products</a></li>--}}
{{--                <li><a href="Product_Details.html">Product Details</a></li>--}}
{{--                <li><a href="Cart.html">Cart</a></li>--}}
{{--                <li><a href="Checkout.html">Checkout</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a  class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/General.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>General</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="Minimized_Aside.html">Minimized Aside</a></li>--}}
{{--                <li><a href="empty_page.html">Empty page</a></li>--}}
{{--                <li><a href="fixed_footer.html">Fixed Footer</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/Mail_Box.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Mail Box </span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="mail_box.html">Mail Box</a></li>--}}
{{--                <li><a href="compose.html">Compose</a></li>--}}
{{--                <li><a href="important_mail.html">Important Mail</a></li>--}}
{{--                <li><a href="mail_trash.html">Mail Trash</a></li>--}}
{{--                <li><a href="chat.html">Chat</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a   class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/icon.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Icons</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="Fontawesome_Icon.html">Fontawesome Icon</a></li>--}}
{{--                <li><a href="themefy_icon.html">themefy icon</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a   class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/18.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>UI Elements </span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="colors.html">colors</a></li>--}}
{{--                <li><a href="Alerts.html">Alerts</a></li>--}}
{{--                <li><a href="buttons.html">Buttons</a></li>--}}
{{--                <li><a href="modal.html">modal</a></li>--}}
{{--                <li><a href="dropdown.html">Droopdowns</a></li>--}}
{{--                <li><a href="Badges.html">Badges</a></li>--}}
{{--                <li><a href="Loading_Indicators.html">Loading Indicators</a></li>--}}
{{--                <li><a href="color_plate.html">Color Plate</a></li>--}}
{{--                <li><a href="typography.html">Typography</a></li>--}}
{{--                <li><a href="datepicker.html">Date Picker</a></li>--}}
{{--                <li><a href="wow_animation.html">Animate</a></li>--}}
{{--                <li><a href="Scroll_Reveal.html">Scroll Reveal</a></li>--}}
{{--                <li><a href="tilt.html">Tilt Animation</a></li>--}}
{{--                <li><a href="navs.html">Navs</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a  class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/forms.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>forms</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="Basic_Elements.html">Basic Elements</a></li>--}}
{{--                <li><a href="Groups.html">Groups</a></li>--}}
{{--                <li><a href="Max_Length.html">Max Length</a></li>--}}
{{--                <li><a href="Layouts.html">Layouts</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a   class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/14.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Widgets</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="accordion.html">Accordions</a></li>--}}
{{--                <li><a href="Scrollable.html">Scrollable</a></li>--}}
{{--                <li><a href="notification.html">Notifications</a></li>--}}
{{--                <li><a href="carousel.html">Carousel</a></li>--}}
{{--                <li><a href="Pagination.html">Pagination</a></li>--}}
{{--                <li><a href="profilebox.html">Profile Box</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a   class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/17.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Table</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="data_table.html">Data Tables</a></li>--}}
{{--                <li><a href="bootstrap_table.html">Bootstrap</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a   class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/16.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Charts</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="chartjs.html">ChartJS</a></li>--}}
{{--                <li><a href="apex_chart.html">Apex Charts</a></li>--}}
{{--                <li><a href="chart_sparkline.html">Chart sparkline</a></li>--}}
{{--                <li><a href="am_chart.html">am-charts</a></li>--}}
{{--                <li><a href="nvd3_charts.html">nvd3 charts.</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="">--}}
{{--            <a   class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="img/menu-icon/map.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Maps</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="mapjs.html">Maps JS</a></li>--}}
{{--                <li><a href="vector_map.html">Vector Maps</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
    </ul>
</nav>
<!--/ sidebar  -->


<section class="main_content dashboard_part large_header_bg">
    <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="img/line_img.png" alt="">
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">

                        <div class="profile_info d-flex align-items-center">
                            <div class="profile_thumb mr_20">
                                <img src="img/transfer/4.png" alt="#">
                            </div>
                            <div class="author_name">
                                <h4 class="f_s_15 f_w_500 mb-0">{{ucwords(Auth::user()->name)  }}</h4>
                                <p class="f_s_12 f_w_400">Contestant</p>
                            </div>
{{--                            <div class="profile_info_iner">--}}
{{--                                <div class="profile_author_name">--}}
{{--                                    <p>Manager</p>--}}
{{--                                    <h5>Jiue Anderson</h5>--}}
{{--                                </div>--}}
{{--                                <div class="profile_info_details">--}}
{{--                                    <a href="#">My Profile </a>--}}
{{--                                    <a href="#">Settings</a>--}}
{{--                                    <a href="#">Log Out </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ menu  -->
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title  -->
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- footer part -->
    <div class="footer_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_iner text-center">
                        <p>{{ \Carbon\Carbon::now()->year }} © Hill Cross Records - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Trencytech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content part end -->

<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<!-- footer  -->
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{ asset('js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{ asset('js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{ asset('vendors/count_up/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{ asset('vendors/chartlist/Chart.min.js')}}"></script>
<!-- counterup js -->
<script src="{{ asset('vendors/count_up/jquery.counterup.min.js')}}"></script>

<!-- nice select -->
<script src="{{ asset('vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<!-- responsive table -->
<script src="{{ asset('vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('vendors/datatable/js/buttons.print.min.js')}}"></script>

<!-- datepicker  -->
<script src="{{ asset('vendors/datepicker/datepicker.js')}}"></script>
<script src="{{ asset('vendors/datepicker/datepicker.en.js')}}"></script>
<script src="{{ asset('vendors/datepicker/datepicker.custom.js')}}"></script>

<script src="{{ asset('js/chart.min.js')}}"></script>
<script src="{{ asset('vendors/chartjs/roundedBar.min.js')}}"></script>

<!-- progressbar js -->
<script src="{{ asset('vendors/progressbar/jquery.barfiller.js')}}"></script>
<!-- tag input -->
<script src="{{ asset('vendors/tagsinput/tagsinput.js')}}"></script>
<!-- text editor js -->


<script src="{{ asset('js/custom.js')}}"></script>
</body>

</html>
