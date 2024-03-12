@extends('main')

@section('content')
<section class="page-banner" style="background: #121619 url(images/menu-header.jpg) no-repeat center / cover;">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="page-title">
					<h1 class="page-headding">Menus</h1>
					<ul>
						<li><a href="/" class="page-name">Home</a></li>
						<li>Menu </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="special-menu ptb pt-140" style="background-color:white;">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="headding-part text-center pb-50">
					<p  class="headding-sub">SPECIAL WEEK</p>
					<h2 class="headding-title text-uppercase font-weight-bold" style="color:black;">This Week’s Special Meal Offers</h2>
                    <p style="color:black;font-size:20px;">Our selection of food with quality taste</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12" style="background: #f5f3f3;border-radius: 75px;">
				<div class="special-tab text-center" style="width:95%;margin:auto;">
					<ul  id="tabs" class="nav nav-tabs" role="tablist" style="padding-top:20px;padding-bottom:10px;">
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-2"><a href="#tab-2" role="tab" data-toggle="tab" class="active" style="color:black;"> BURGERS & SANDWICHES</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-3"><a href="#tab-3" role="tab" data-toggle="tab" style="color:black;"> SOUPS & GREENS</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-4"><a href="#tab-4" role="tab" data-toggle="tab" style="color:black;"> MAINS</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-5"><a href="#tab-5" role="tab" data-toggle="tab" style="color:black;"> START OR SHARE</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-6"><a href="#tab-6" role="tab" data-toggle="tab" style="color:black;"> Draft Beer</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-7"><a href="#tab-7" role="tab" data-toggle="tab" style="color:black;"> Bottled Beer</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-14"><a href="#tab-14" role="tab" data-toggle="tab" style="color:black;"> House Wine</a></li>
                        <br class="menu-items-break">
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-8"><a href="#tab-8" role="tab" data-toggle="tab" style="color:black;"> Red Wine By The Glass</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-9"><a href="#tab-9" role="tab" data-toggle="tab" style="color:black;"> White Wine By The Glass</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-10"><a href="#tab-10" role="tab" data-toggle="tab" style="color:black;"> Ciders & Coolers</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-5"><a href="#tab-13" role="tab" data-toggle="tab" style="color:black;"> Kids Menu</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-12"><a href="#tab-12" role="tab" data-toggle="tab" style="color:black;"> Adds On</a></li>
						<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-15"><a href="#tab-15" role="tab" data-toggle="tab" style="color:black;">BOOZY COFFEE </a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-content">
			<div role="tabpanel" class="row pt-70 tab-pane fade in active show" id="tab-2">
				<div style="margin-bottom:20px !important;color:white;width:92%;background:#fc3222;padding:10px 20px;margin:auto;">
					<p style="font-size:16px;text-align:center;font-weight:700;">TUESDAY TEN - ALL BURGERS $12 | 5PM - 10PM</p>
				</div>
				<div class="burgers-and-sandwiches-choice">
					<p style="font-size:16px;text-align:center;">Choice of fries, soup or garden salad.</p>
					<p style="font-size:16px;text-align:center;">ADD ONS: CHEESE $2 1/2, BACON OR MUSHROOMS $3</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/our-shady-burger.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">OUR SHADY BURGER</p>
					<p class="menu-des">a fresh hand made charbroiled Alberta beef patty, Shady sauce, lettuce, tomato, onion and pickle </p>
					<span class="menu-price">$16</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/texas-roundhouse-burger.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">TEXAS ROADHOUSE BURGER</p>
					<p class="menu-des">grilled bison, swiss cheese, drizzled with whiskey bbq sauce, lettuce,tomato, onion, pickles, topped with a crispy onion ring. </p>
					<span class="menu-price">$17</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/wild-bc-salmon-burger.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">WILD BC SALMON BURGER</p>
					<p class="menu-des">miso glazed sockeye salmon, lettuce, tomato, pickled onion, pea shoots & yuzu mayo</p>
					<p>*Item are not on special tuesday nights.*</p>
					<span class="menu-price">$18</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/full-of-veggies-burger.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">FULL OF VEGGIES BURGER <small> VEGETARIAN</small></p>
					<p class="menu-des">a delicious veggie patty, served with tzatziki, cucumber, lettuce, tomato and onion</p>
					<span class="menu-price">$17</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/chicken-and-brie.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CHICKEN & BRIE</p>
					<p class="menu-des">free run locally sourced grilled chicken breast, brie,  mixed greens veggie & cranberry mayo on a baguette</p>
					<span class="menu-price">$17</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/roas-1.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">ROASTED TURKEY CLUB</p>
					<p class="menu-des">A double decker clubhouse sandwich with roasted torkey,bacon,tomato,chedder cheese,mixed greens and carnbenry mayo.With a choice of
						 white,multi-graies rye</p>
					<span class="menu-price">$18</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/cajun-burger.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CAJUN BURGER</p>
					<p class="menu-des">seasoned cajun chicken breast, served with lettuce, tomato, onion, pickles and chipotle sauce</p>
					<span class="menu-price">$17</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/spic-1.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SPICY CRISPY CHICKEN BURGER</p>
					<p class="menu-des">Served on a brioche bun,topped with creamy coleslaw,jalapeno pepper jack cheeses and honey mustrad </p>
					<span class="menu-price">$17</span>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-3">
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/daily-soup.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">DAILY SOUP</p>
					<p class="menu-des">made from scratch yesterday to taste great today </p>
					<span class="menu-price">$11 1/2</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/caesar-salad.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CAESAR SALAD</p>
					<p class="menu-des">house made caesar salad with romaine, caesar dressing, baquette croutons and parmesan cheese  <br>
						ADD BACON 2
					</p>
					<span class="menu-price">$14 3/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/garden-salad.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">GARDEN SALAD</p>
					<p class="menu-des">mixed greens, shredded carrots & beets, grape tomatoes, cucumbers and tossed in basil vinalgrette</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/cris-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CRISPY CHICKEN TACO SALAD</p>
					<p class="menu-des">crispy chicken, served in a taco bowl, with mixed greens, cilastro, black beans, diced tomato, red onion and shredded cheese. Served with a side of sour cream and salsa</p>
					<span class="menu-price">$17</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/shady-glory-bowl.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SHADY GLORY BOWL</p>
					<p class="menu-des">shredded carrots & beets, spinach, cashews, tortilla strips, black beans, brown rice and awesome sauce</p>
					<span class="menu-price">$17</span>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-4">
			<div style="margin-bottom:20px !important;color:white;width:92%;background:#fc3222;padding:10px 20px;margin:auto;"> <p style="font-size:16px;text-align:center;font-weight:700;">TUESDAY FISH & CHIPS SPECIAL $14 | 5PM - 10PM</p> </div>
				<div class="burgers-and-sandwiches-choice">
					<p style="font-size:16px;text-align:center;">served with side of fries and salad</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/fish-and-chips.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">FISH & CHIPS</p>
					<p class="menu-des">two pieces of lightly beer battered west coast cod fillets, served with  fries</p>
					<span class="menu-price">$16</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/baked-lasagna.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BAKED LASAGNA</p>
					<p class="menu-des">made from scratch, served with garden salad and garlic bread</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/slow-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SLOW ROAST BEEF DIP</p>
					<p class="menu-des">thinly sliced oven roast beef, with swiss cheese, crispy onion and horseradish mayo.Served on a pretzel bun with our own au jas for dipping</p>
					<span class="menu-price">$17</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/tacos-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">TACOS</p>
					<p class="menu-des">your choice of crispy shrimp or battered cod. Served with coleslaw on a flour tortilla, toped with salsa and lime-cilantro crema. Served with fries or garden salad</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/teriyaki_chicken_wrap.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">TERIYAKI CHICKEN WRAP</p>
					<p class="menu-des">grilled chicken rossed in teriyaki sauce, salad greens, slaws, shredded carrots, cucumber and crispy noodles. Served with fires or garden salad</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/st-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">Steak Sandwich</p>
					<p class="menu-des">a opened-faced 8oz steak on a baguette, topped with sauteed mushrooms. Served with fries or garden salad.</p>
					<span class="menu-price">$18</span>
				</div>
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/pop-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">Popcorn Shrimp Basket</p>
					<p class="menu-des">crispy fried battered shrimp served with fries and our house-made cocktail sauce.</p>
					<span class="menu-price">$18</span>
				</div> -->
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/ch-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">Chicken Strips</p>
					<p class="menu-des">breaded chicken tenders on a bed of fries with choice of plum, honey mustard of ranch.</p>
					<span class="menu-price">$18</span>
				</div> -->
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/sire-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SIRACHA PRAWN BOWL</p>
					<p class="menu-des">prawns sauteed in peppers, cream, butter and siracha. Topped with a grilled lime roasted cashews and served with basmati rice and garlic toast</p>
					<span class="menu-price">$16</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/gr-2.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">GRILLED CHICKEN QUESADILLA</p>
					<p class="menu-des">a crunchy tortilla-filled with grilled chicken, shredded cheese, black beans, green onions and tomatoes, with a side of sour cream and salsa</p>
					<span class="menu-price">$15</span>
				</div>
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/reu-2.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">REUBEN SANDWICH</p>
					<p class="menu-des">corned beef, sauerkaraut, swiss cheese and dijon mustard on marble rye bread</p>
					<span class="menu-price">$18</span>
				</div> -->
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/spaghettini-bolognese.png" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SPAGHETTINI BOLOGNESE</p>
					<p class="menu-des">made fresh in house, bolognese meat sauce and garlic bread. An Italian classic</p>
					<span class="menu-price">$14</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/FRESH-1.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">WILD PACIFIC COD</p>
					<p class="menu-des">pan-fried seasoned cod,served with baked yams and seasoned vegetables</p>
					<span class="menu-price">$17</span>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-5">
				<div style="MARGIN-BOTTOM: 20PX !IMPORTANT;COLOR: WHITE;WIDTH: 92%;BACKGROUND: #FC3222;PADDING: 10PX 20PX;MARGIN: AUTO;">
					<p style="FONT-SIZE: 16PX;TEXT-ALIGN: CENTER;FONT-WEIGHT: 700;">WEDNESDAY APPY NIGHT SPECIALS EVERYTHING AND WINGS $12 | 5PM - 10PM</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/double-crunch-wings.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">DOUBLE CRUNCH WINGS</p>
					<p class="menu-des">hot, teriyaki, bbq, honey garlic, buffalo, seasoned, lemon pepper, thai chili ... ADD VEGGIES 2</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/mac-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">MAC & CHEESE BITES</p>
					<p class="menu-des">crispy coated mac & cheese served with house-made Carolina BBQ dip </p>
					<span class="menu-price">$14</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/wonton-prawns.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">WONTON PRAWNS</p>
					<p class="menu-des">Breaded with crushed wontons, served with a thai chili sauce</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/potato-skins.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">POTATO SKINS</p>
					<p class="menu-des">melted cheddar cheese, bacon, green onions with sour cream</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/poutine.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">POUTINE VEGETARIAN</p>
					<p class="menu-des">fries, cheese curds and poutine sauce</p>
					<span class="menu-price">$14</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/lettuce_wrap_missing.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">LETTUCE WRAP</p>
					<p class="menu-des">crispy chicken tossed in red Thai Chilli sauce, geen onions and sesame seeds topped with crispy noodles and served with cucumbers, pickled ginger carrots, cilantro, Ice berg lettuce and miso sauce</p>
					<span class="menu-price">$14</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/boneless_breaded_chicken_bites.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BONELESS BREADED CHICKEN BITES</p>
					<p class="menu-des">hot, teriyaki, BBQ sauce, honey garlic, buffalo or thai chilli</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/chicken_strips.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CHICKEN STRIPS</p>
					<p class="menu-des">breaded chicken tendors on a bed of fries with choice of plum, honey mustard or ranch</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/popcorn_shrimp_basket.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">POPCORN SHRIMP BASKET</p>
					<p class="menu-des">crispy fried battered shrimp served with fries and our house-made cocktail sauce</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/steamed_mussels.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">STEAMED MUSSELS</p>
					<p class="menu-des">in white wine garlic butter sauce, served wit garlic bread</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/truffle_fries.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">TRUFFLE FRIES</p>
					<p class="menu-des">fries tossed in truffles, herbs and parmesan.Served with garlic aoli</p>
					<span class="menu-price">$15</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/deep-fried-pickles.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">DEEP FRIED PICKLES</p>
					<p class="menu-des">crispy seasoned fried pickles, served with our  in house ranch sauce</p>
					<span class="menu-price">$14</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/jala-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">Jalapeno Poppers</p>
					<p class="menu-des">Jalapeno poppers filled with cream cheese and topped with a crispy breading served with ranch dressing.</p>
					<span class="menu-price">$14</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/mozz-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">Mozzarella Sticks</p>
					<p class="menu-des">breaded mozeralla sticks. Crispy on the outside with just the right amount of melty cheese on the inside. Served with out house-made marinara sauce</p>
					<span class="menu-price">$13</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/g-4.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">GUACAMOLE + CHIPS</p>
					<p class="menu-des">house made guacamole + fresh cut tortilla</p>
					<span class="menu-price">$12</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/sp-5.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SPINACH DIP</p>
					<p class="menu-des">a creamy blend of spinach,various cheese and herbs Baked and served with a side of tortilla chips </p>
					<span class="menu-price">$15</span>
				</div>
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/beer_cheese.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BEER & CHEESE DIP</p>
					<p class="menu-des"> creamy beer cheese dip served with a warm pretzel for dipping </p>
					<span class="menu-price">$14 1/3</span>
				</div> -->
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/dry-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">Dry Ribs</p>
					<p class="menu-des">Crispy dry ribs with salt and pepper, served with ranch sauce.</p>
					<span class="menu-price">$14</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/crispy-calamari.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CRISPY CALAMARI</p>
					<p class="menu-des">lightly battered squid, jalapenos and tzatziki</p>
					<span class="menu-price">$15</span>
				</div>
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/loded-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">Loaded Veggie Fries</p>
					<p class="menu-des">crispy fries topped with cheese, sour cream, green onions and diced tomatoes.</p>
					<span class="menu-price">$15</span>
				</div>			 -->
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/nachos.png" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">NACHOS</p>
					<p class="menu-des">three cheeses, black olives, green onions, tomato, jalapeno peppers</p>
					<p class="menu-des">ADD CAJUN  CHICKEN OR SEASONED  GROUND BEEF 4</p>
					<p class="menu-des">ADD GUACAMOLE OR CHEESE SAUCE 2</p>
					<small>*Nachos are not on Special Wednesday Nights*</small>
					<span class="menu-price" STYLE="display:block;margin-top:15px;">$17</span>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-6">
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/budweuser.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BUDWEISER <small> - USA</small></p>
					<p class="menu-des">16oz. - 5%</p>
					<span class="menu-price">$7 1/4 </span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/steam-whistle-pilsner.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">STEAM WHISTLE PILSNER</p>
					<p class="menu-des">TORONTO, ON</p>
					<p class="menu-des">16oz. - 5%</p>
					<span class="menu-price">$7 1/2</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/backcountry-widowmaker-ipa.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BACKCOUNTRY WIDOWMAKER IPA</p>
					<p class="menu-des">SQUAMISH, BC</p>
					<p class="menu-des">16oz. - 6.7%</p>
					<span class="menu-price">$7 3/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/fat_tug_ipa.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">FAT TUG IPA</p>
					<p class="menu-des">VICTORIA</p>
					<p class="menu-des">16oz. - 7%</p>
					<span class="menu-price">$7 3/4</span>
				</div>
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/sapporo.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SAPPORO   <small> - JAPAN</small></p>
					<p class="menu-des">16oz. - 5%</p>
					<span class="menu-price">$10 1/4</span>
				</div> -->
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/stella.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">STELLA  ARTOIS<small> - BELGIUM</small></p>
					<p class="menu-des">16oz. - 5%</p>
					<span class="menu-price">$7 3/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/sleemans-honey-brown-ale.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SLEEMANS HONEY BROWN ALE <small> - GUELPH, ON</small></p>
					<p class="menu-des">16oz. - 5.2%</p>
					<span class="menu-price">$7 1/3</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/backcountry-pale-ale.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BACKCOUNTRY PALE ALE</p>
					<p class="menu-des">SQUAMISH, BC</p>
					<p class="menu-des">16oz. - 5%</p>
					<span class="menu-price">$7 1/2</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/phillips-blue-buck-ale.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">PHILLIPS BLUE BUCK ALE</p>
					<p class="menu-des">VICTORIA, BC</p>
					<p class="menu-des">16oz. - 5%</p>
					<span class="menu-price">$7 1/2</span>
				</div>
				
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/guiness-stout.png" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">GUINNESS STOUT <small> - IRELAND</small></p>
					<p class="menu-des">16oz. - 4.2%</p>
					<span class="menu-price">$8 3/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/parallel-49-pale-ale.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">PARALLEL 49 PALE ALE</p>
					<p class="menu-des">EAST VAN, BC</p>
					<p class="menu-des">16oz. - 5.5%</p>
					<span class="menu-price">$7 1/2</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/strong-bow-cider.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">STRONGBOW CIDER <small> - ENGLAND</small></p>
					<p class="menu-des">16oz. -  5.3%</p>
					<span class="menu-price">$8 3/4</span>
				</div>		
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/l-1.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BLUE MOON BELGIAN WHITE</p>
					<p class="menu-des">DENVER,CO</p>
					<p class="menu-des">16oz. - 5.4%</p>
					<span class="menu-price">$7 3/4</span>
				</div>	
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/ca-1.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CANADIAN</p>
					<p class="menu-des">CANADA</p>
					<p class="menu-des">16oz. - 5.4%</p>
					<span class="menu-price">$7 1/4 </span>
				</div>	
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/la-2.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">LA CERVECERIA ASTILLERO</p>
					<p class="menu-des">MEXICO</p>
					<p class="menu-des">16oz. - 5%</p>
					<span class="menu-price">$7 3/4</span>
				</div> -->
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/fe-3.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">FERNIE PILSER <small> - FERNIE,BC</small></p>
					<p class="menu-des">16oz. - 5%</p>
					<span class="menu-price">$7 1/2</span>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-7">
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/local-beer.png" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">LOCAL</p>
					<p class="menu-des">Budweiser, Canadian, kokanee, labatt blue, Coors Lite,Pabts Blue Ribbon(Can Only)5 1/2. </p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/premium.png" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">PREMIUM</p>
					<p class="menu-des">Alexander keith's, corona, heineken, Miller Genuine Draft, stella, Sol.</p>
					<span class="menu-price">$7 1/2</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/non-alcholic-beer.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">NON-ALCHOLIC BEERS</p>
					<p class="menu-des">corona, heineken</p>
					<span class="menu-price">$6 1/2</span>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-8">
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/finca-los-primos.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">FINCA LOS PRIMOS</p>
					<p class="menu-des">ARGENTINA -Malbec</p>
					<p class="menu-des">6oz. $6 | 9oz. $9 | BTL $24</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/gray-monk.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">GRAY MONK</p>
					<p class="menu-des">Merlot</p>
					<p class="menu-des">6oz. $8  | 9oz. $12 | BTL $33</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/tin3.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">TINHORN CREEK</p>
					<p class="menu-des">Okanogon-Pinot Noir</p>
					<p class="menu-des">6oz. $11 1/2 | 9oz. $16  | BTL $48</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/loxton.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">LOXTON 0%</p>
					<p class="menu-des">Califonia-Cabernet Sauvignon</p>
					<p class="menu-des">6oz. $6 | 9oz. $9  | BTL $21</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/xo1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">XOXO</p>
					<p class="menu-des">Canada-Pinot Noir</p>
					<p class="menu-des">6oz. $6 | 9oz. $9 | BTL $24</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/tin4.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">Tinhorn creek Okanogon-Marlot</p>
					<p class="menu-des">Okanogon-marlot</p>
					<p class="menu-des">6oz. $10 | 9oz. $14 1/2  | BTL $39</p>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-9">
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/30-mile.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">30 MILE</p>
					<p class="menu-des">South Astralia . Chardornay</p>
					<p class="menu-des">6oz. $9 1/4 | 9oz. $13 1/4 |BTL $35</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/yellow_tail.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">YELLOW TAIL</p>
					<p class="menu-des">Astralia . Chardornay</p>
					<p class="menu-des">6oz. $6 1/2 | 9oz. $9 |BTL $28</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/bare2.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BAREFOOT</p>
					<p class="menu-des">California-Pinot Grigo</p>
					<p class="menu-des">6oz. $6 1/2 | 9oz. $9 |BTL $28</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/kim-crawford.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">KIM CRAWFORD</p>
					<p class="menu-des">new zealand - sauvignon blanc</p>
					<p class="menu-des">6oz. $10 1/2 | 9oz. $15 | BTL $41.</p>
				</div>
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/star4.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">STARBOROUGH</p>
					<p class="menu-des">New Zealand - Sauvignon Blanc</p>
					<p class="menu-des">6oz. $8% | 9oz. $11% | BTL $32</p>
				</div> -->
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-10">
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/rock-creek-apple.png" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">ROCK CREEK APPLE</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/okanagan-black-cherry.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">OKANAGAN BLACK CHERRY</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/white-claw-mango.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">WHITECLAW MANGO</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/somersby-apple.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SOMERSBY APPLE</p>
					<span class="menu-price">$7 3/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/lonetree-ginner.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">LONE TREE GINNER</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/okanagan-peach.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">OKANAGAN PEACH</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/mike-lemonade.png" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">MIKES LEMONADE</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/okanagan-apple.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">OKANAGAN APPLE</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				 <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/nude-122.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">NUDE STRAWBERRY KIWI</p>
					<span class="menu-price">$6 1/4</span>
				</div> 
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/nude-raspberry-lemon.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">NUTRL GRAPE FRUIT</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/smirnoff-ice.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SMIRNOFF ICE</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				 <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/nude-raspberry-lemon.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">NUDE RASPBERRY LEMON</p>
					<span class="menu-price">$6 1/4</span>
				</div> 
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/hey1.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">HEY YALLICED TEA</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/nud-9.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">NUDE LEMONADE</p>
					<span class="menu-price">$6 1/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/some-2.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SOMERSBY BLACKBERRY</p>
					<span class="menu-price">$7 3/4</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/lontree.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">LONETREE DRY CIDER</p>
					<span class="menu-price">$6 1/4</span>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-13">
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/gree-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">GRILLED CHEESE AND FRIES</p>
					<span class="menu-price">$8</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/cheese_burger.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CHEESE BURGER</p>
					<p class="menu-des">with ketchup, pickle and fries</p>
					<span class="menu-price">$10</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/chicken_strips_and_fries_2.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CHICKEN STRIPS (X2) & FRIES</p>
					<span class="menu-price">$10</span>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-12">
				<div class="make-it-better-add-ons" style="width:100%;">
					<p style="color: white;display: block;text-align: center;width: 25%;background: #FC3222;font-size: 25px;margin-bottom: 30px !important;margin: auto;padding: 5px 0px;">Add Ons</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/grilled-chicken.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">GRILLED CHICKEN</p>
					<span class="menu-price">$10 1/2</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/black-tiger-prawns.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BLACK TIGER PRAWNS (6OZ)</p>
					<span class="menu-price">$9 1/2</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/wild-bc-salmon.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">WILD BC SALMON (6OZ)</p>
					<span class="menu-price">$11</span>
				</div>
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/Tuna-1.webp" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">TUNA</p>
					<span class="menu-price">$8</span>
				</div> -->
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/flafel.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">FLAFEL</p>
					<span class="menu-price">$8</span>
				</div> -->
				<div class="make-it-better-substitutes" style="width:100%;">
					<p style="color:white;display:block;text-align:center;width:25%;background:#FC3222;font-size:25px;margin-top:30px!important;margin-bottom:30px!important;margin:auto;padding:5px 0px;">SIDES ADD ONS</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/onion-rings.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">ONION RINGS</p>
					<span class="menu-price">$3 </span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/yam-fries.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">YAM FRIES</p>
					<span class="menu-price">$3 </span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/poutine.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">POUTINE</p>
					<span class="menu-price">$4 1/2</span>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/caesar-salad.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">CEASAR SALAD</p>
					<span class="menu-price">$3 1/2</span>
				</div>
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-15">
				<div class="col-xl-3 col-lg-3 col-md-4 mt-15 text-center pt-20">
					<div class="menu-img"><img src="images/coffe-and-hot-choclate-come-with-whipped-cream.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">SINGLE 7 1/2  | DOUBLE 11 1/2</p>
					<p class="menu-des">Coffee & hot chocolates come with whip cream & chocolates drizzle</p>
				</div>
				<div class="make-it-better-add-ons" style="width:100%; margin-top:5%;">
					<p style="color: white;display: block;text-align: center;width: 25%;background: #FC3222;font-size: 25px;margin-bottom: 30px !important;margin: auto;padding: 5px 0px;">BAILEYS COFFEE</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/B52-coffee.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">B52 COFFEE</p>
					<p class="menu-des">Baileys, Kahlua, Grand Marnier</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/monte-Cristo-coffee.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">MONTE CRISTO COFFEE</p>
					<p class="menu-des"> Baileys, Kahlua, Grand Marnier</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/iRISH-Coffee.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">IRISH COFFEE</p>
					<p class="menu-des">Jameson |rish Whiskey</p>
				</div>
				<!-- <div class="make-it-better-add-ons" style="width:100%; margin-top :22px;">
					<p style="color: white;display: block;text-align: center;width: 25%;background: #FC3222;font-size: 25px;margin-bottom: 30px !important;margin: auto;padding: 5px 0px;">PEPPERMINT HOT CHOCOLATE</p>
				</div> -->
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/blueberry-tea.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">BLUEBERRY TEA</p>
					<p class="menu-des">Amareto, Grand Marnier,Orange Pekoe</p>
				</div> -->
				<!-- <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/hot-toddy.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">HOT TODDY</p>
					<p class="menu-des">Rye Whiskey, Honey,Lemon</p>
				</div> -->
			</div>
			<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-14">
				
			<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/jackson-1.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">JACKSON TRIGG</p>
					<p class="menu-des">Okanagan - Merlot</p>
					<p class="menu-des">6oz. $6 | 9oz. $9 | BTL $21</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
					<div class="menu-img"><img src="images/jackson-2.jpg" alt="menu" class="menu-image"></div>
					<p class="menu-title text-uppercase" style="color:black;font-weight:700;">JACKSON TRIGG</p>
					<p class="menu-des">Okanagan - Sauvignon Blanc</p>
					<p class="menu-des">6oz. $6 | 9oz. $9 | BTL $21</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection