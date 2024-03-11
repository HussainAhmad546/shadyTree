@extends('main')

@section('content')

<section class="page-banner" style="background: #121619 url(images/here-we-are-header.jpg) no-repeat center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="page-title">
                    <h1 class="page-headding">Here We Are</h1>
                    <ul>
                        <li><a href="/" class="page-name">Home</a></li>
                        <li>Here We Are</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section pt-100 pb-100">
    <div class="container">
        <div class="row flex-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about-text">
                    <div class="headding-part">
                        <h2 class="headding-title text-uppercase font-weight-bold" style="line-height:40px;">How to Get to the Shady Tree</h2>
                    </div>
                    <div class="about-desc">
                        <p class="desc-about">You can't miss us! We are adjacent to Highway 99 on the way to Whistler with an easy turn off exit. Look at the Google map to the right for more details.... Follow highway 99 north 5 km past turn off to downtown Squamish.Turn left on Garibaldi Way - right on Government Rd.</p>
                        <p class="desc-about">Coming from Whistler turn right at the first traffic light after Brackendale, which is Garibaldi Way, and we are right there beside Tim Hortons.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" style="display:flex;justify-content:center;">
                <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d897.2212134743515!2d-123.13697032105861!3d49.74172189148375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486f90ddcb0949b%3A0xcbc38d919615789!2sShady+Tree!5e0!3m2!1sen!2sca!4v1469831521395" width="400" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection