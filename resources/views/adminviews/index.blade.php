@extends('layouts.adminauth')

@section('content')


    <!-- ############ Main START-->
    <div>
        <div class="page-content page-container" id="page-content">
            <div class="padding sr">
                <div class="page-hero" data-id="1" data-source="./assets/aleyi.mp3">

                    <div class="pos-rlt text-white">
                        <h3 class=" font-weight-bold mb-0 text-white title">Admin Dashboard</h3>


                    </div>
                </div>
                <div class="d-md-flex pos-rlt">
                    <div class="flex">

                            <div class="col-12" data-id="89"  data-source="http://bepop.test/assets/aleyi.mp3">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="list-item list-overlay r mb-3">
                                            <div class="media media-4x3 gd-primary">
                                                <a href="blog.detail.html#" class="ajax media-content " style="background-image:url()">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content p-4">
                                                <div class="list-body ">
                                                    <p href="blog.detail.html#" class="list-title title ajax h5 font-weight-bold">
                                                        No. of Contestants
                                                    </p>
                                                    <p class="display-4">{{ number_format($no_of_users) }}</p>
                                                </div>
                                                <div class="list-footer ">
                                                    <div class="">Last Sign-Up</div>
                                                    <div class="text-muted text-sm">{{ $time_user->created_at }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="list-item list-overlay r mb-3">
                                            <div class="media media-4x3 gd-success">
                                                <a href="blog.detail.html#" class="ajax media-content " style="background-image:url( )">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content p-4">
                                                <div class="list-body ">
                                                    <p href="blog.detail.html#" class="list-title title ajax h5 font-weight-bold">
                                                        No. of Beats Uploaded
                                                    </p>
{{--                                                    <a href="artist.detail.html#" class="list-subtitle d-block text-muted h-1x subtitle ajax ">--}}
{{--                                                        Pharetra, nisi semper enim pulvinar in gravida lectus et--}}
{{--                                                    </a>--}}
                                                    <p class="display-4">{{ number_format($no_of_beats) }}</p>

                                                </div>
                                                <div class="list-footer ">
                                                    <div class="">Last Uploaded</div>
                                                    <div class="text-muted text-sm">{{ $time_beat->created_at }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="col-12 col-md-4">
                                        <div class="list-item list-overlay r mb-3">
                                            <div class="media media-4x3 gd-info">
                                                <a href="blog.detail.html#" class="ajax media-content " style="background-image:url( )">
                                                </a>
                                                <div class="media-action ">
                                                </div>
                                            </div>
                                            <div class="list-content p-4">
                                                <div class="list-body ">
                                                    <p href="blog.detail.html#" class="list-title title ajax h5 font-weight-bold">
                                                        Un-Reviewed Beat
                                                    </p>
{{--                                                    <a href="artist.detail.html#" class="list-subtitle d-block text-muted h-1x subtitle ajax ">--}}
{{--                                                        Pharetra, nisi semper enim pulvinar in gravida lectus et--}}
{{--                                                    </a>--}}
                                                    <p class="display-4">{{ number_format($un_reviewed) }}</p>

                                                </div>
                                                <div class="list-footer ">
                                                    <a onclick="(window.location = '{{ route("admin.pending") }}' )" class="btn btn-block btn-default btn-outline-dark">View</a>
{{--                                                    <div class="text-muted text-sm">Feb 8, 3:34 am--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                    </div>
                    <div style="min-width: 4rem"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- ############ Main END-->




@endsection
