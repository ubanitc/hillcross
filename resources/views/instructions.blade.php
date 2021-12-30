@extends('layouts.main')

@section('content')

    <!-- ############ Content START-->
    <div id="content" class="flex ">
        <!-- ############ Main START-->
        <div class="sr">
            <div class="page-hero page-container" style="margin-bottom: 0 !important; padding-bottom: 0 !important;">
                <div class="media bg-media bg-primary">
                    <div class="media-content" style="background-image:url(assets/img/b20.jpg)"></div>
                </div>
                <div class="p-5 pos-rlt text-center" style="padding-bottom: 0 !important;">
                    <h1 class="display-4 font-weight-bold text-white m-5">How to enroll in this Quest.</h1>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Read Instructions</li>
                        <li>Fill the Sign Up form</li>
                        <li>Upload Your beats</li>
                    </ul>
                </div>
            </div>
            <div class="page-container pos-rlt padding">
                <div class="row row-lg">
                    <div class="col-md-8">
                        <div class="py-5 sr-item">
                            <h4 class="mb-5">Benefits</h4>
                            <ul>
                                <li>At the end of this quest two winners are going to emerge.</li>
                                <li>There is a cash price of 	&#8358;1 Million for each winner</li>
                                <li>Each winner will be offered a full-time production job with hill cross records on a monthly salary and other benefits.</li>
                            </ul>
                             </div>
                    </div>
{{--                    <div class="col-md-4">--}}
{{--                        <div class="py-5 sr-item">--}}
{{--                            <h4 class="mb-5">Ajax loading</h4>--}}
{{--                            <p class="text-muted">Bepop use--}}
{{--                                <a href="https://github.com/MoOx/pjax">Pjax</a> to ajax loading pages. A standalone JavaScript module that uses AJAX (XmlHttpRequest) and pushState() to deliver a fast browsing experience.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="py-5 sr-item">--}}
{{--                            <h4 class="mb-5">Bootstrap 4</h4>--}}
{{--                            <p class="text-muted">--}}
{{--                                <a href="https://getbootstrap.com/">Bootstrap</a> is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div> <div class="row row-lg">
                    <div class="col-md-8">
                        <div class="py-5 sr-item">
                            <h4 class="mb-5">Instructions</h4>
                            <ul>
                                <li>Click on the "Join Quest" button at the bottom of the page </li>
                                <li>Fill in the Sign UP for Correctly</li>
                                <li>Sign in to your Dashboard</li>
                                <li>Upload Beats from 5 different Genres that were created by "YOU"</li>
                            </ul>
                            <p style="font-size: larger"><span style="color: red">Note:</span> The stem files of each beat that will be Uploaded will be reviewed by the management before any cash price is awarded to the winners and in a situation where foul-play is detected that particular contestant will be automatically disqualified.</p>
                             </div>


                        <a class="btn btn-rounded btn-sm btn-primary no-ajax" href="html/signup.html">
                            Sign Up
                        </a>
                    </div>
{{--                    <div class="col-md-4">--}}
{{--                        <div class="py-5 sr-item">--}}
{{--                            <h4 class="mb-5">Ajax loading</h4>--}}
{{--                            <p class="text-muted">Bepop use--}}
{{--                                <a href="https://github.com/MoOx/pjax">Pjax</a> to ajax loading pages. A standalone JavaScript module that uses AJAX (XmlHttpRequest) and pushState() to deliver a fast browsing experience.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="py-5 sr-item">--}}
{{--                            <h4 class="mb-5">Bootstrap 4</h4>--}}
{{--                            <p class="text-muted">--}}
{{--                                <a href="https://getbootstrap.com/">Bootstrap</a> is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!-- ############ Main END-->
    </div>
    <!-- ############ Content END-->
@endsection
