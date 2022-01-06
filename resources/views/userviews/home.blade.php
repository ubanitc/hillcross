@extends('layouts.userauth')
@section('content')
    <!-- ############ Main START-->
    <div>
        <div class="page-content page-container" id="page-content">
            <div class="padding sr">
                <div class="page-hero" data-id="1" data-source="./assets/aleyi.mp3">
                    <div class="media bg-media">
                        <div class="media-content" style="background-image:url(../assets/img/c0.jpg)"></div>
                    </div>
                    <div class="pos-rlt text-white">
                        <h1 class="display-3 font-weight-bold mb-0 text-white title">Ubani Tochuwku</h1>
                        <div class="py-4 toolbar align-items-center">
                            <div class="btn btn-raised btn-rounded btn-icon gd-primary text-white " ></div>
                            <span class="text-fade">{{ $beats->count() }} of 5</span>


                            <div class="dropdown-menu dropdown-menu-right"></div>
                        </div>
                        <div class="mb-2">

                            <p  class="text-white ">Beats Uploaded</p>
                        </div>
                    </div>
                </div>
                <div class="d-md-flex pos-rlt">
                    <div class="flex">
                        <div class="heading pt-5 pb-3 d-flex ">
                            <div>
                                <h5 class="text-highlight sr-item">Beats</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        @if(session()->has('upload_successful'))
                        <li style="list-style-type: none;" class="alert alert-success">{{ session('upload_successful') }} </li>
                        @endif
                        <div class="row list-row list-index">

                            @forelse($beats as $beat)

                            <div class="col-12" data-id="{{ $beat->data_id }}"  data-source="{{ $beat->path }}">
                                <div class="list-item r">
                                    <div class="media ">
                                        <a href="item.detail.html#{{ $beat->data_id }}" class="ajax media-content " style="background-image:url(../assets/img/c12.jpg)">
                                        </a>
                                        <div class="media-action media-action-overlay">
                                            <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class>
                                                <i data-feather="heart" class="active-fill"></i>
                                            </button>
                                            <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                            <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body ">
                                            <a href="item.detail.html#{{ $beat->data_id }}" class="list-title title ajax h-1x">
                                                {{ $beat->beat_name }}
                                            </a>
                                            <a href="artist.detail.html#{{ $beat->data_id }}" class="list-subtitle d-block text-muted h-1x subtitle ajax ">
                                                {{ $beat->genre }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-action  show-row">
                                        <div class="d-flex align-items-center">
                                            <div class="px-3 text-sm text-muted d-none d-md-block">04:33</div>
                                            <button class="btn btn-icon no-bg no-shadow" data-toggle-class>
                                                <i data-feather="heart" class="active-primary"></i>
                                            </button>
                                            <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                    <div class="col-12 text-center">
                                        <h3>No Beats have been uploaded yet</h3>
                                    </div>
                                @endforelse

                        </div>


                        <!-- <div class="card" id="comment-">
                            <div class="card-header">
                                <strong>8 Comments</strong>
                            </div>
                            <div class="card-body d-flex b-b">
                                <a href="#">
                                    <img src="../assets/img/a1.jpg" class="avatar w-40">
                                </a>
                                <div class="mx-3 flex">
                                    <div class="mb-3">
                                        <a href="#">Alan Hayes</a>
                                        <div class="text-muted text-sm">5:30 pm</div>
                                    </div>
                                    <div>
                                        <p>Tempus, venenatis, viverra in blandit gravida enim dictum lectus lectus nisi et senectus dolor enim</p>
                                        <button class="btn btn-sm btn-white">
                                            Reply
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex b-b">
                                <a href="#">
                                    <img src="../assets/img/a1.jpg" class="avatar w-40">
                                </a>
                                <div class="mx-3 flex">
                                    <div class="mb-3">
                                        <a href="#">Alan Hayes</a>
                                        <div class="text-muted text-sm">3:40 pm</div>
                                    </div>
                                    <div>
                                        <p>Diam porta ac, donec et, sed quam lorem aliquam integer turpis mauris, a, placerat urna</p>
                                        <button class="btn btn-sm btn-white">
                                            Reply
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4" id="feed-form-">
                                <form>
                                    <textarea class="form-control" rows="3"></textarea>
                                    <div class="d-flex justify-content-end mt-3">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                    <div style="min-width: 4rem"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- ############ Main END-->

@endsection
