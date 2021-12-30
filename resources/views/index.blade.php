@extends('layouts.main')

@section('content')
    <!-- ############ Content START-->
    <div id="content" class="flex ">
        <!-- ############ Main START-->

        <div class="sr">
            <div class="page-hero page-container">
                <div class="media bg-media">
                    <div class="media-content" style="background-image:url(assets/img/b2.jpg)"></div>
                </div>
                <div class="p-5 pos-rlt text-center">
                    <h3 >create your best record!</h3>
                    <h1 class="display-3 font-weight-bold text-white mb-2 mx-5">CREATIVE SOUND</h1>
                    <p style="font-size: large;">Top Recording Studios, Mixing & Mastering
                        Engineers, Producers</p>

                    <a href="html/discover.html" class="btn btn-md gd-primary text-white no-ajax m-2">Book a Session</a>

                    <!-- <a href="https://themeforest.net/user/flatfull/portfolio" class="btn btn-md btn-outline-light m-2">Purchase</a> -->
                </div>
            </div>
            <div class="page-container px-5 pos-rlt">
                <div class="py-5 text-center">
                    <h1 class="display-3 font-weight-bold text-white prod-text">Producer Quest</h1>
                    <h5 class="mb-5">Quest Ends On: 19 July 2022</h5>
                    <p class="quest-details" style="font-size: large;">The producer quest is an excercise to search for the next biggest producer in Africa. Join the challenge now to be part of the Quest.</p>
                    <div class="timer-container">
                        <div class="timer">
				<span>
					<span class="display-4 font-weight-bold">365</span>
					<span>DAYS</span>
				</span>
                            <span>
					<span class="display-4 font-weight-bold">12</span>
					<span>HRS</span>
				</span>
                            <span>
					<span class="display-4 font-weight-bold"> 29</span>
					<span>MINS</span>
				</span>
                            <span>
					<span class="display-4 font-weight-bold">40</span>
					<span>SEC</span>
				</span>

                        </div>
                    </div>
                    <div class="py-4">
                        <a href="html/artists.html" class="btn btn-md btn-outline-primary no-ajax m-2">Join Now</a>

                        <!-- <a href="https://themeforest.net/user/flatfull/portfolio" class="btn btn-md btn-outline-primary m-2">Purchase</a> -->
                    </div>
                </div>
            </div>

            <div class="row no-gutters div3" style="padding: 100px 0;">
                <div>
                    <h1>ABOUT OUR STUDIO</h1>
                    <h5>create your best record!</h5>
                    <p class="about-details">Recording studios generally consist of three rooms: the studio itself, where the sound for the recording is created, the control room, where the sound from the studio is recorded and manipulated, and the machine room, where noisier equipment that may interfere with the recording process is kept.</p>
                </div>

            </div>
            <div class="row no-gutters div4" style="padding: 100px 0;">

					<span class="col-md-3 col-12 m-2">
						<span ><img src="{{ asset('assets/img/microphone.png') }}" alt=""></span>
						<span> <h3> RECORDING </h3></span>
						<span>Providing recording and rehearsal space to musicians throughout the area.</span>
					</span>
                <span class="col-md-3 col-12 m-2">
						<span ><img src="{{ asset('assets/img/equalizer.png') }}" alt=""></span>
						<span> <h3> MIXING </h3></span>
						<span>Mixing is the process of combining the different sonic elements of recorded music.</span>
					</span>
                <span class="col-md-3 col-12 m-2">
						<span ><img src="{{ asset('assets/img/keyboard.png') }}" alt=""></span>
						<span> <h3> MASTERING </h3></span>
						<span>Providing top audio mastering services for local and national artists and production companies.</span>
					</span>



            </div>
        </div>

        <!-- ############ Main END-->
    </div>
    <!-- ############ Content END-->
@endsection
