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
                        <h3 class=" font-weight-bold mb-0 text-white title">Profile</h3>

                        <div class="mb-2">
                            <p  class="text-white ">Your Profile Details</p>
                        </div>
                    </div>
                </div>
                <div class="d-md-flex pos-rlt">
                    <div class="flex">
{{--                        <div class="heading pt-5 pb-3 d-flex ">--}}
{{--                            <div>--}}
{{--                                <h5 class="text-highlight sr-item">Tracks</h5>--}}
{{--                            </div>--}}
{{--                            <span class="flex"></span>--}}
{{--                        </div>--}}
                        <div class="row list-row list-index">
                            <div class="col-12" >
                                @if(session('success'))

                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                @endif
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $error }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endforeach
                                <form name="form" method="post" action="{{ route('user.profile') }}">
                                    @csrf
                                    @method('patch')

                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="name"  autocomplete="name" value="{{ Auth::user()->name }}" disabled placeholder="Full Name" required>

                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  name="email" autocomplete="email" value="{{ Auth::user()->email }}" disabled placeholder="Email Address" >

                                    </div>

                                    <div class="form-group">
                                        <select class=" form-control" aria-label="Default select example" name="state_of_origin" disabled required @error('state_of_origin') is-invalid @enderror>
                                            <option disabled selected>{{ Auth::user()->state_of_origin }}</option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <select class=" form-control" aria-label="Default select example" disabled name="gender" required @error('gender') is-invalid @enderror>
                                            <option disabled selected>{{ Auth::user()->gender }}</option>

                                        </select>
                                    </div>
                                    <p>
                                        Your contact number can be edited or changed if there is a change in this info dating the period of this contest.
                                    </p>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">+234</span>
                                            </div>
                                            <input type="tel" class="form-control" placeholder="Contact Number" aria-label="Contact Number" required name="contact_number" value="{{ Auth::user()->contact_number }}" @error('contact_number') is-invalid @enderror aria-describedby="basic-addon1">
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
                                            <input type="text" class="form-control" placeholder="Instagram Handle" aria-label="Instagram Handle" required name="instagram_handle" value="{{ Auth::user()->instagram_handle }}" @error('instagram_handle') is-invalid @enderror aria-describedby="basic-addon1">
                                        </div>

                                        @error('instagram_handle')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>



                                    <button type="submit" class="btn btn-primary mb-4">Save</button>


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
