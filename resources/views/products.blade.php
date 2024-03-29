<div role="tabpanel" class="row ">
    @foreach($products as $product)
        <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
            <div class="menu-img"><img src="{{ asset('upload/product/'. $product->image_1) }}" alt="menu" class="menu-image"></div>
            <p class="menu-title text-uppercase" style="color:black;font-weight:700;">{{ $product->name }}</p>
            <p class="menu-des">{{ strip_tags($product->description) }}</p>
            <span class="menu-price">${{ $product->price }}</span>
        </div>
    @endforeach
</div>


<!-- <div style="margin-bottom:20px !important;color:white;width:92%;background:#fc3222;padding:10px 20px;margin:auto;">
    <p style="font-size:16px;text-align:center;font-weight:700;">TUESDAY TEN - ALL BURGERS $12 | 5PM - 10PM</p>
</div>
<div class="burgers-and-sandwiches-choice">
    <p style="font-size:16px;text-align:center;">Choice of fries, soup or garden salad.</p>
    <p style="font-size:16px;text-align:center;">ADD ONS: CHEESE $2 1/2, BACON OR MUSHROOMS $3</p>
</div> -->