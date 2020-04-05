@extends('partials.app')
@section('content')
    <div class="navbar">
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <div class="content-left">
                        <a href="{{ route('home') }}">
                            <h1>
                                <span class="color-indigo1">MY</span><span class="color-indigo2">C</span><span class="color-indigo3">O</span><span class="color-indigo4">A</span><span class="color-indigo5">CH</span>
                            </h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="slide">
            <div class="slider-slide owl-carousel owl-theme">
                <div class="content">
                    <div class="mask"></div>
                    <img src="images/slider1.jpg" alt="">
                    <div class="slider-caption">
                        <h2>WELCOME TO {{ env('APP_NAME') }}</h2>
                        <p>Point based online tutoring battle-a-thon.</p>
                    </div>
                </div>
                <div class="content">
                    <div class="mask"></div>
                    <img src="images/slider2.jpg" alt="">
                    <div class="slider-caption">
                        <h2>Points</h2>
                        <p>Earn redeemable points by helping students learn tough subjects at schools.</p>
                    </div>
                </div>
                <div class="content">
                    <div class="mask"></div>
                    <img src="images/slider3.jpg" alt="">
                    <div class="slider-caption">
                        <h2>Challenges</h2>
                        <p>Sponsor tutors with point challenges allocated to different educational topics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="features home2 segments">
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <div class="content">
                        <i class="fas fa-sync-alt"></i>

                        <a href="" ><h5>CHALLENGES</h5></a>
                    </div>
                </div>
                <div class="col s6">
                    <div class="content">
                        <i class="fas fa-sync-alt"></i>
                        <h5>TOPICS</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection