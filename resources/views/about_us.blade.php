@extends('main')

@section('content')

<section class="page-banner" style="background: #121619 url(images/about-us-header.jpg) no-repeat center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="page-title">
                    <h1 class="page-headding">About Us</h1>
                    <ul>
                        <li><a href="/" class="page-name">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section pt-100 about-us-operating-hours">
    <div class="container">
        <div class="row flex-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about-img"><img src="images/about-1.jpg" alt="about"></div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about-text">
                    <div class="headding-part">
                        <h2 class="headding-title text-uppercase font-weight-bold">Operating Hours</h2>
                    </div>
                    <div class="about-desc">
                        <div class="col-lg-7" style="padding-left:0">
                            <ul class="operating-hours-list" style="color:black;font-size:14px;margin-bottom:10px;">
                                <li>Monday - Thursday : <span>11:00 AM - 12:00 AM</span></li>
                                <li>Friday : <span>11:00 AM - 2:00 AM</span></li>
                                <li>Saturday : <span>10:00 AM - 2:00 AM</span></li>
                                <li>Sunday :  <span>10:00 AM - 12:00 AM</span></li>
                            </ul>
                        </div>
                        <p class="desc-about" style="padding-bottom:10px;">We are open every day except Christmas Eve and Christmas Day.</p>
                        <p class="desc-about">Please contact us for our home delivery service for food/beer or wine.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-story pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="headding-part text-center">
                    <h2 class="headding-title text-uppercase font-weight-bold">About the Kitchen & Food</h2>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="story text-center">
                    <p class="story-text">The one and only Neighborhood Pub in Squamish is known for its great food and the large selection of beers and wine. Our kitchen staff start early and finish late, as all our foods are prepared here on the premises. We frequently updated our menu to freshen up both the looks and the healthy aspect of our food items. This is also why we serve only wild sockey salmon, no farmed fish at all, and have minimized the use of trans fats and preservatives in our food. Only the highest quality canola oil is use in our deep fryers.</p>
                    <p class="story-text">For people that do not eat meat or fish, we have among other things, vegetarian burgers, the shady glory bowl and soups and salads. Please contact us for our home delivery service for food/beer or wine.</p>
                    <p class="story-text">All menu items are subject to change and are not including applicable taxes. Some food items in the menu photos may look different than the actual food served.</p>
                    <p class="story-text">Your feed back on our service and menu is greatly appreciated, so please feel free to contact us on trip advisor or other media. Since the beginning we have won many local awards. For 2018/2019 the people of Squamish, through the local newspaper voted us the best Pub and the restaurant with best appetizers and wings. More awards than any other restaurant/pub.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection