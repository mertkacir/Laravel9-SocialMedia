@extends('layouts.frontbase')

@section('title','Contact',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)


@section('content')

<div class="top-area">
    <ul class="main-menu">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Contact</li>
    </ul>
</div>

<div class="row">
    <div class="col align-self-center" style="padding-top: 175px">
        <section>
			<div class="gap no-top overlap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="contct-info">
								<div class="contact-form">
									<div class="cnt-title">
										<span>Send us a message</span>
										<i><img src="images/envelop.png" alt=""></i>
									</div>
									<form method="post">
										<div class="form-group">
										  <input type="text" id="input" required="required"/>
										  <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
										  <input type="text" required="required"/>
										  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e1b333f37321e">[email&#160;protected]</a></label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
										  <input type="text" required="required"/>
										  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
										  <input type="text" required="required"/>
										  <label class="control-label" for="input">Company</label><i class="mtrl-select"></i>
										</div>
										<div class="form-group">
										  <textarea rows="4" id="textarea" required="required"></textarea>
										  <label class="control-label" for="textarea">Message</label><i class="mtrl-select"></i>
										</div>
										<div class="submit-btns">
											<button class="mtr-btn signup" type="button"><i class="fa fa-paper-plane"></i></button>
										</div>
									</form>
								</div>
								<div class="cntct-adres">
									<h3>contact info</h3>
									<ul>
										<li>
											<i class="ti-location-pin"></i>
											<span>207 Sokak No:6 D:4 Konak/İzmir</span>
										</li>
										<li>
											<i class="fa fa-mobile-phone"></i>
											<span>(534) 788-29-73</span>
										</li>
										<li>
											<i class="fa fa-envelope-o"></i>
											<span><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cba2a5ada48bb2a4beb9a6aaa2a7e5a8a4a6">kacirmert@gmail.com</a></span>
										</li>
									</ul>
									<ul class="social-media">
										<li>
											<a href="#" title=""><i class="fa fa-facebook-square"></i></a>
										</li>
										<li>
											<a href="#" title=""><i class="fa fa-google-plus-square"></i></a>
										</li>
										<li>
											<a href="#" title=""><i class="fa fa-pinterest-square"></i></a>
										</li>
										<li>
											<a href="#" title=""><i class="fa fa-twitter-square"></i></a>
										</li>
									</ul>
									<h1 class="bg-cntct">Triton</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- contact info -->
</div>
@endsection
