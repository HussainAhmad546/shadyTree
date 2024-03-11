@extends('main')

@section('content')
	<section class="page-banner" style="background: #121619 url(images/contact-us-header.jpg) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="page-title">
						<h1 class="page-headding">contact Us</h1>
						<ul>
							<li><a href="/" class="page-name">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact ptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part text-center">
						<p class="headding-sub">Get in touch</p>
						<h2 class="headding-title text-uppercase font-weight-bold">contact us</h2>
					</div>
				</div>
			</div>
			<div class="contact-in">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-5">
						<div class="contact-detail">
							<h3 class="contact-head">Contact Details</h3>
							<p class="contact-desc" style="color:#121619;">Please contact us for our home delivery service for food/beer or wine. Your feed back on our service and menu is greatly appreciated, so please feel free to contact us via form or on trip advisor or other media. </p>
							<ul>
								<li><i class="fa fa-home" aria-hidden="true" style="font-size:30px;"></i><div style="font-size: 14px;color: #121619;margin-left: 15px">40456 Government Road Garibaldi Highlands (Squamish), B.C. V0N 1T0</div></li>
								<li><i class="fa fa-phone" aria-hidden="true" style="font-size:30px;"></i><a href="tel:+16045679305">604-567-9305</a></li>
								<li><i class="fa fa-envelope" aria-hidden="true" style="font-size:25px;"></i><a href="mailto:info@shadytreepub.ca"><span class="__cf_email__" >info@shadytreepub.ca</span></a></li>
								<li>
									<i class="fa fa-clock-o" aria-hidden="true" style="font-size:30px;"></i>
									<div style="font-size: 14px;color: #121619;margin-left: 15px">
										<ul class="contact-us-operating-hours-list" style="color:black;font-size:14px;margin-bottom:10px;">
											<li>Monday - Thursday : 11:00 AM - 12:00 AM</li>
											<li>Friday : 11:00 AM - 2:00 AM</li>
											<li>Saturday : 10:00 AM - 2:00 AM</li>
											<li>Sunday :  10:00 AM - 12:00 AM</li>
										</ul>
                                        <span>We are open every day except Christmas Eve and Christmas Day.</span>
                                    </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-7">
						<div class="leave">
							<form>
								<div class="form-group">
									<input type="text" name="Email" class="form-control" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<input type="text" name="Subject" class="form-control" placeholder="Subject" required="">
								</div>
								<div class="form-group">
									<input type="text" name="Phone" class="form-control" placeholder="Phone" required="">
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Message"></textarea>
								</div>
								<input type="submit" name="submit" value="Send Message" class="post-com">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-map">
		<iframe style="border:0;width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d897.2212134743515!2d-123.13697032105861!3d49.74172189148375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486f90ddcb0949b%3A0xcbc38d919615789!2sShady+Tree!5e0!3m2!1sen!2sca!4v1469831521395" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</section>

	
@endsection