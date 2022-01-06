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
                        <h3 class=" font-weight-bold mb-0 text-white title">Ubani Tochuwku</h3>

                        <div class="mb-2">

                            <p  class="text-white ">Upload your beats in mp3 format.</p>
                        </div>
                    </div>
                </div>
                <div class="d-md-flex pos-rlt">
                    <div class="flex">
                        <div class="heading pt-5 pb-3 d-flex ">
                            <div>
                                <h5 class="text-highlight sr-item">Tracks</h5>
                            </div>
                            <span class="flex"></span>
                        </div>
                        <div class="row list-row list-index">
                            <div class="col-12" data-id="89"  data-source="http://bepop.test/assets/aleyi.mp3">
                                <img src="" alt="">
                                @foreach ($errors->all() as $error)
                                    <li style="list-style-type: none;" class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                                <form action="{{ route('user.beat_upload') }}" method="post">
                                    @csrf
                                    <input type="text" required placeholder="Name" name="name" class="form-control mb-2">
                                    <input type="text" required placeholder="Genre" name="genre" class="form-control mb-2">
                                    <input id="beats_upload" required type="file" name="beat_upload">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
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
