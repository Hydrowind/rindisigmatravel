@extends('layouts.user')

@section('hero')
<div class="hero slides">
	<img src="images/hero-slider-1-ls.jpg" alt="Image" class="img-fluid active">
	<img src="images/hero-slider-2-ls.jpg" alt="Image" class="img-fluid">
	<img src="images/hero-slider-3-ls.jpg" alt="Image" class="img-fluid">
	<img src="images/hero-slider-4-ls.jpg" alt="Image" class="img-fluid">
	<img src="images/hero-slider-5-ls.jpg" alt="Image" class="img-fluid">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="intro-wrap">
          <h1 class="mb-5"><span class="d-block">Let's Enjoy Your</span> Trip In <span class="typed-words"></span></h1>
					<a href="{{ route('product', ['filter' =>'tour']) }}" class="btn btn-outline-white text-white btn-md font-weight-bold">View Tours</a>
          {{-- @include('components.search') --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<!-- Perjalanan Kami -->
<div class="untree_co-section">
	<div class="container">
		<div class="row text-center justify-content-center mb-5">
			<div class="col-lg-7"><h2 class="section-title text-center">Perjalanan Kami</h2></div>
		</div>

		<div class="owl-carousel owl-3-slider">
			<div class="item">
				<a class="media-thumb" href="images/hero-slider-1-ls.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Pragser Wildsee</h3>
						<span class="location">Italy</span>
					</div>
					<img src="images/hero-slider-1-ls.jpg" alt="Image" class="img-fluid" height="500px">
				</a> 
			</div>

			<div class="item">
				<a class="media-thumb" href="images/hero-slider-2-ls.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Oia</h3>
						<span class="location">Greece</span>
					</div>
					<img src="images/hero-slider-2-ls.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>

			<div class="item">
				<a class="media-thumb" href="images/hero-slider-3-ls.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Perhentian Islands</h3>
						<span class="location">Malaysia</span>
					</div>
					<img src="images/hero-slider-3-ls.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>


			<div class="item">
				<a class="media-thumb" href="images/hero-slider-4-ls.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Rialto Bridge</h3>
						<span class="location">Italy</span>
					</div>
					<img src="images/hero-slider-4-ls.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>

			<div class="item">
				<a class="media-thumb" href="images/hero-slider-5-ls.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>San Francisco, United States</h3>
						<span class="location">United States</span>
					</div>
					<img src="images/hero-slider-5-ls.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>

			<div class="item">
				<a class="media-thumb" href="images/hero-slider-1-ls.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Lake Thun</h3>
						<span class="location">Switzerland</span>
					</div>
					<img src="images/hero-slider-1-ls.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>

		</div>

	</div>
</div>

<!-- Mengapa Harus Kami -->
<div class="untree_co-section testimonial-section">
	<div class="container">
		<div class="row text-center justify-content-center mb-5">
			<div class="col-lg-7"><h2 class="section-title text-center">Mengapa Harus Kami</h2></div>
		</div>
		
		<div class="row">
			<div class="col-12 col-md-6 col-lg-3 my-3">
				<div class="service text-center">
					<span class="icon-paper-plane"></span>
					<h3>Keamanan Selama Trip</h3>
					<p>Mengutamakan keamanan dan keselamatan anda.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 my-3">
				<div class="service text-center">
					<span class="icon-tag"></span>
					<h3>Low Price and Friendly</h3>
					<p>Biaya terjangkau dan bersahabat.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 my-3">
				<div class="service text-center">
					<span class="icon-user"></span>
					<h3>Maskapai Pilihan Terbaik</h3>
					<p>Menyediakan Akomodasi terbaik demi kenyamanan anda.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 my-3">
				<div class="service text-center">
					<span class="icon-support"></span>
					<h3>Asuransi Perjalanan</h3>
					<p>Keselamatan anda hal yang paling penting.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Penuhi Kebutuhan Anda -->
<div class="untree_co-section">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-lg-6 text-center">
				<h2 class="section-title text-center mb-3">Penuhi Kebutuhan Anda</h2>
				<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
			</div>
		</div>
		<div class="row align-items-stretch">
			<!-- <div class="col-lg-4 order-lg-1">
				<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/hero-slider-1.jpg');"></div></div></div>
			</div> -->
			<div class="col-lg-2"></div>
			<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

				<div class="feature-1 d-md-flex">
					<a class="align-self-center" href="{{ route('product', ['filter' => 'tour']) }}"">
						<span class="flaticon-house display-4 text-primary"></span>
						<h3>Paket Tour</h3>
						<p class="mb-0">Kami menyediakan tour domestik/internasional dengan destinasi wisata yang paling papuler.</p>
					</a>
				</div>

				<div class="feature-1 ">
					<a class="align-self-center" href="{{ route('product', ['filter' => 'event']) }}"">
						<span class="flaticon-restaurant display-4 text-primary"></span>
						<h3>Event Organizer</h3>
						<p class="mb-0">Semakin banyaknya permintaan dari client kami menyediakan Open trip bagi siapapun.</p>
					</a>
				</div>

			</div>

			<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3 mt-4 mt-sm-0" >

				<div class="feature-1 d-md-flex">
					<a class="align-self-center" href="{{ route('product', ['filter' => 'akomodasi']) }}"">
						<span class="flaticon-mail display-4 text-primary"></span>
						<h3>Akomodasi</h3>
						<p class="mb-0">Kami menyediakan Private Trip bagi anda yang ingin merayakan hari bahagia.</p>
					</a>
				</div>

				<div class="feature-1 d-md-flex">
					<a class="align-self-center" href="{{ route('product', ['filter' => 'transportasi']) }}"">
						<span class="flaticon-phone-call display-4 text-primary"></span>
						<h3>Transportasi</h3>
						<p class="mb-0">Kami menyediakan tempat Outbound untuk mengisi liburan bahagia client.</p>
					</a>
				</div>

			</div>

		</div>
	</div>
</div>

<!-- <div class="untree_co-section count-numbers py-5">
	<div class="container">
		<div class="row">
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="9313">0</span>
					</div>
					<span class="caption">No. of Travels</span>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="8492">0</span>
					</div>
					<span class="caption">No. of Clients</span>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="100">0</span>
					</div>
					<span class="caption">No. of Employees</span>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="120">0</span>
					</div>
					<span class="caption">No. of Countries</span>
				</div>
			</div>
		</div>
	</div>
</div> -->

<!-- Testimonials -->
<div class="untree_co-section mt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<h2 class="section-title text-center mb-5">Testimonials</h2>

				<div class="owl-3-slider owl-carousel no-nav">
					<div class="testimonial mx-auto">
						<figure class="img-wrap">
							<img src="images/person_2.jpg" alt="Image" class="img-fluid">
						</figure>
						<h3 class="name">Adam Aderson</h3>
						<blockquote>
							<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
					</div>

					<div class="testimonial mx-auto">
						<figure class="img-wrap">
							<img src="images/person_3.jpg" alt="Image" class="img-fluid">
						</figure>
						<h3 class="name">Lukas Devlin</h3>
						<blockquote>
							<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
					</div>

					<div class="testimonial mx-auto">
						<figure class="img-wrap">
							<img src="images/person_4.jpg" alt="Image" class="img-fluid">
						</figure>
						<h3 class="name">Kayla Bryant</h3>
						<blockquote>
							<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>

<!-- <div class="untree_co-section">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-lg-6">
				<h2 class="section-title text-center mb-3">Special Offers &amp; Discounts</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
				<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid"></a>
					<span class="d-flex align-items-center loc mb-2">
						<span class="icon-room mr-3"></span>
						<span>Italy</span>
					</span>
					<div class="d-flex align-items-center">
						<div>
							<h3><a href="#">Rialto Mountains</a></h3>
							<div class="price ml-auto">
								<span>$520.00</span>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
				<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid"></a>
					<span class="d-flex align-items-center loc mb-2">
						<span class="icon-room mr-3"></span>
						<span>United States</span>
					</span>
					<div class="d-flex align-items-center">
						<div>
							<h3><a href="#">San Francisco</a></h3>
							<div class="price ml-auto">
								<span>$520.00</span>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
				<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid"></a>
					<span class="d-flex align-items-center loc mb-2">
						<span class="icon-room mr-3"></span>
						<span>Malaysia</span>
					</span>
					<div class="d-flex align-items-center">
						<div>
							<h3><a href="#">Perhentian Islands</a></h3>
							<div class="price ml-auto">
								<span>$750.00</span>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
				<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid"></a>

					<span class="d-flex align-items-center loc mb-2">
						<span class="icon-room mr-3"></span>
						<span>Switzerland</span>
					</span>

					<div class="d-flex align-items-center">
						<div>
							<h3><a href="#">Lake Thun</a></h3>
							<div class="price ml-auto">
								<span>$520.00</span>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div> -->

<!-- <div class="untree_co-section">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			
			<div class="col-lg-6">
				<figure class="img-play-video">
					<a id="play-video" class="video-play-button" href="https://www.youtube.com/watch?v=mwtbEGNABWU" data-fancybox>
						<span></span>
					</a>
					<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid rounded-20">
				</figure>
			</div>

			<div class="col-lg-5">
				<h2 class="section-title text-left mb-4">Take a look at Tour Video</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

				<p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

				<ul class="list-unstyled two-col clearfix">
					<li>Outdoor recreation activities</li>
					<li>Airlines</li>
					<li>Car Rentals</li>
					<li>Cruise Lines</li>
					<li>Hotels</li>
					<li>Railways</li>
					<li>Travel Insurance</li>
					<li>Package Tours</li>
					<li>Insurance</li>
					<li>Guide Books</li>
				</ul>

				<p><a href="#" class="btn btn-primary">Get Started</a></p>

				
			</div>
		</div>
	</div>
</div> -->

<div class="py-5 cta-section">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
				<p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
				<p class="mb-0"><a href="https://wa.me/+6281218680145" target="_blank" class="btn btn-outline-white text-white btn-md font-weight-bold"><span class="icon-whatsapp"></span> WhatsApp</a></p>
			</div>
		</div>
	</div>
</div>
@endsection