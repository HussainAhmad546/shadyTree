@extends('main')

@section('content')

<section class="banner">
	<div class="hero-content">
		<div class="images">
			<img src="/images/i-1.jpg" alt="">
			<img src="/images/i-2.jpg" alt="">
			<img src="/images/i-3.jpg" alt="">
			<img src="/images/i-4.jpg" alt="">
			<img src="/images/i-5.jpg" alt="">
			<img src="/images/i-6.jpg" alt="">
			<img src="/images/i-7.jpg" alt="">
		</div>
		<div onclick="side_slide(-1)" class="slide left">
		<span class="fa fa-angle-left" aria-hidden="true"></span>
		</div>
		<div onclick="side_slide(1)" class="slide right">
		<span class="fa fa-angle-right" aria-hidden="true"></span>
		</div>
		<div class="btn-sliders" style="z-index:1000;bottom:90px;">
			<span onclick="btn_slide(1)"></span>
			<span onclick="btn_slide(2)"></span>
			<span onclick="btn_slide(3)"></span>
			<span onclick="btn_slide(4)"></span>
			<span onclick="btn_slide(5)"></span>
			<span onclick="btn_slide(6)"></span>
			<span onclick="btn_slide(7)"></span>
		</div>
	</div>
</section>

<section class="about-pizzon ptb" style="background:#121619;position:relative;margin-top: 30px;padding-top:45px;padding-bottom:150px">
	<div class="menu-top-bg">
		<img src="images/menu-bottom-bg.png" alt="meu-bg" style="margin-top:30px;">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 about-us-section-content" style="display:flex;align-items:center;">    
				<div class="max-w-390">
					<div class="headding-part">
						<p class="headding-sub">Welcome to The</p>
						<h1 class="headding-title text-uppercase font-weight-bold" style="color:white;">Shady Tree Neighbourhood Pub</h1>
					</div>
					<p class="online-des" style="color:white;">The only Neighbourhood Pub in Squamish is located right on Highway 99 in the Garibaldi Highlands, next to Squamish Rafting and Tim Hortons. We take pride in our great homemade food and friendly service and with a great selection of 15 beers on tap and 35 others in bottles, we like our neighbourhood pub to make you feel at home. Since the beginning we have won many local awards. For 2018/2019 the people of Squamish, through the local newspaper voted us the best Pub and the restaurant with best appetizers and wings. More awards than any other restaurant/pub. </p>
					<a href="{{route('about-us')}}" class="about-more-z com-btn">view more</a>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="about-pizzon-img">
					<img src="images/about-us-section.jpeg" alt="about" class="pizzon-ab" style="width:100%;">
				</div>
			</div>
		</div>
	</div>
	<div class="order-bottom">
		<img src="images/menu-top-bg.png" alt="layer" style="MARGIN-TOP: 69PX;"></div>
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
						@foreach($categories as $category)
							<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-{{ $category->id }}">
								<a href="javascript:void(0)" onclick="getCategoryProducts('{{ $category->id }}')" role="tab" data-toggle="tab" style="color:black;">{{ $category->name }}</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-content" id="tab-content">

		</div>
	</div>
</section>
<a href="{{route('photos')}}">
<section class="chef ptb pt-120  home-page-gallery-section gallery-section">
	<div class="chef-top-bg"><img src="images/chef-top-bg.png" alt="chef-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part pb-50 text-center">
						<p  class="headding-sub">Our Gallery</p>
						<h2 class="headding-title text-uppercase font-weight-bold">SHADY TREE PUB PHOTOS</h2>
					</div>
				</div>
			</div>
			<div class="chef-banner owl-carousel">
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"> <img src="images/our-gallery/2e.webp" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/3e.webp" alt=""></div>	
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/4e.webp" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/5e.webp" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/10e.webp" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/12e.webp" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/66e.jpg" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/67e.jpg" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/1111.jpg" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/62e.jpg" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/63e.jpg" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/64e.jpg" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/61e.jpg" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/60e.jpg" alt=""></div>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="images/our-gallery/112.jpeg" alt="" width="350"></div>
					</div>
				</div>
			</div>
		</div>
</section>
</a>


@endsection

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
     $(document).ready(function() {
        $('#popup').modal('show');
    });
	
 </script>

<script>
	 $(document).ready(function() {
            var firstCategoryId = '{{ $categories->first()->id }}';
            getCategoryProducts(firstCategoryId);
    });

	function getCategoryProducts(category_id) {
		$.ajax({
				url: '{{ route('get_products_by_category') }}',
				type: 'POST',
				data: {
					id: category_id,
					_token: '{{ csrf_token() }}'
				},
				success: function(response) {
					$('#tab-content').html(response);
				},
				error: function(xhr) {
					console.log(xhr.responseText);
				}
			});
	}

</script>
