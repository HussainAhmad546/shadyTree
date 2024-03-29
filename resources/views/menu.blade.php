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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
@endsection