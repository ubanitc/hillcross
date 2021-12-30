@extends('layouts.main')

@section('content')
    <!-- ############ Content START-->
    <div id="content" class="flex ">
        <!-- ############ Main START-->
        <div class="sr">
            <div class="page-hero page-container">
                <div class="media bg-media bg-primary">
                    <div class="media-content" style="background-image:url(assets/img/b20.jpg)"></div>
                </div>
                <div class="p-5 pos-rlt text-center">
                    <h1 class="display-4 font-weight-bold text-white m-5">Help create unique music web application for our clients</h1>
                </div>
            </div>
            <div class="page-container pos-rlt padding">
                <div class="row row-lg">
                    <div class="col-md-4">
                        <div class="py-5 sr-item">
                            <h4 class="mb-5">Non-stop player</h4>
                            <p class="text-muted">Bepop use
                                <a href="https://plyr.io/">Plyr</a> to build the playlist player. A simple, accessible and customisable media player for Video, Audio, YouTube and Vimeo.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="py-5 sr-item">
                            <h4 class="mb-5">Ajax loading</h4>
                            <p class="text-muted">Bepop use
                                <a href="https://github.com/MoOx/pjax">Pjax</a> to ajax loading pages. A standalone JavaScript module that uses AJAX (XmlHttpRequest) and pushState() to deliver a fast browsing experience.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="py-5 sr-item">
                            <h4 class="mb-5">Bootstrap 4</h4>
                            <p class="text-muted">
                                <a href="https://getbootstrap.com/">Bootstrap</a> is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ############ Main END-->
    </div>
    <!-- ############ Content END-->
@endsection
