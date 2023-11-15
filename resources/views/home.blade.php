@extends('layouts.user')

@section('hero')
<div class="hero slides">
	<img src="images/hero-slider-1-ls.png" alt="Image" class="img-fluid active">
	<img src="images/hero-slider-2-ls.png" alt="Image" class="img-fluid">
	<img src="images/hero-slider-3-ls.png" alt="Image" class="img-fluid">
	<img src="images/hero-slider-4-ls.png" alt="Image" class="img-fluid">
	<img src="images/hero-slider-5-ls.png" alt="Image" class="img-fluid">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="intro-wrap">
          <h1 class="mb-5"><span class="d-block">Let's Enjoy Your</span> Trip In <span class="typed-words"></span></h1>
					<a href="{{ route('product') }}" class="btn btn-outline-white text-white btn-md font-weight-bold">View Tours</a>
          {{-- @include('components.search') --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
@php use App\Models\Configuration; @endphp

<!-- Tentang Rindi -->
<div class="untree_co-section">
	<div class="container">
		<div class="row text-center justify-content-center mb-5">
			<div class="col-lg-7"><h2 class="section-title text-center">{{ Configuration::getHomeSectionTitle(1) }}</h2></div>
		</div>

		<div class="row">
			<div class="col-lg-7 mt-3">
				<div class="owl-single dots-absolute owl-carousel">
					<img src="{{ Configuration::getHomeSectionImage(1)->destination }}" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
				</div>
			</div>
			<div class="col-lg-5 pl-lg-5 ml-auto  mt-3">
				<!-- <h2 class="section-title mb-4">About Tours</h2> -->
				<p class="text-justify">
					<!-- <b>PT. Rindi Sigma Sultana</b> berdiri sejak tahun 2004 berbentuk CV, dan sejak tahun 2016 menjadi PT. Kami memiliki team yang handal dan terampil di bidangnya. Dengan konsep Pelayanan Prima kami peruntukan bagi lembaga-lembaga pemerintahan, industri, perdagangan, perusahaan swasta, perorangan dan asosiasi profesi. Untuk menghasilkansebuah karya jasa yang sukses maka kami menerapkan profesionalisme dan integritas berdampingan bahkan menyatu. Integritas inilah yang sering tidak termasuk dalam kontrak kerja karena memang sulit untuk didefinisikan. -->
					{{ Configuration::getHomeSectionContent(1) }}
				</p>
				<!-- Dengan Reputasi yang baik dengan para rekanan/suppliers seperti : Airlines, Hotels, dan Transportasi menjadikan kami berada daam posisi yang memungkinkan untuk mengadakan pendekata - pendekatan yang fleksibel dan mendapatkan harga -harga yang bersaing. -->
				
				<!-- <ul class="list-unstyled two-col clearfix">
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
				</ul> -->
			</div>
		</div>
	</div>
</div>


<!-- Mereka Yang Percaya Kami / Client Logo -->
<div class="untree_co-section untree_co-section_secondary mt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<h2 class="section-title text-center mb-5">{{ Configuration::getHomeSectionTitle(2) }}</h2>

				<div class="owl-5-slider owl-carousel no-nav d-flex justify-content-center">
					@foreach($partnerlogos as $logo)
					<div class="testimonial mx-auto">
						<figure class="img-wrap">
							<img src="{{ $logo->destination }}" alt="Client Logo" class="img-fluid">
						</figure>
					</div>
					@endforeach
				</div>

			</div>
		</div>
	</div>
</div>


<!-- Dokumentasi Tamu -->
<div class="untree_co-section ">
	<div class="container">
		<div class="row text-center justify-content-center mb-5">
			<div class="col-lg-7"><h2 class="section-title text-center">{{ Configuration::getHomeSectionTitle(3) }}</h2></div>
		</div>

		<div class="owl-carousel owl-5-slider d-flex justify-content-center">

			@foreach($guestdoc as $doc)
			<div class="item">
				<a class="media-thumb" href="{{ $doc->destination }}" data-fancybox="gallery">
					<!-- <div class="media-text">
						<h3>DUNIA FANTASI (DUFAN)</h3>
						<span class="location">Jakarta</span>
					</div> -->
					<img src="{{ $doc->destination }}" alt="Image" class="img-fluid" height="500px">
				</a> 
			</div>
			@endforeach

		</div>

	</div>
</div>

<!-- Produk Kami -->
<div class="untree_co-section untree_co-section_secondary ">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-lg-6 text-center">
				<h2 class="section-title text-center mb-3">{{ Configuration::getHomeSectionTitle(4) }}</h2>
				<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
			</div>
		</div>
		<div class="row align-items-stretch">
			<!-- <div class="col-lg-4 order-lg-1">
				<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/hero-slider-1.jpg');"></div></div></div>
			</div> -->
			
			<div class="col-12 col-sm-6 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

				<div class="feature-1 d-md-flex">
					<div class="align-self-center">
						<span class="flaticon-house display-4 text-primary"></span>
						<h3>Paket Tour</h3>
						<p class="">Kami menyediakan tour domestik/internasional dengan destinasi wisata yang paling papuler.</p>
						<a class="btn btn-sm btn-primary" href="{{ route('product', ['filter' => 'tour']) }}">Lihat Produk</a>
					</div>
				</div>

				<div class="feature-1 ">
					<div class="align-self-center">
						<span class="flaticon-restaurant display-4 text-primary"></span>
						<h3>Event Organizer</h3>
						<p class="">Semakin banyaknya permintaan dari client kami menyediakan Open trip bagi siapapun.</p>
						<a class="btn btn-sm btn-primary" href="{{ route('product', ['filter' => 'event']) }}">Lihat Produk</a>
					</div>
				</div>

			</div>

			<div class="col-12 col-sm-6 feature-1-wrap d-md-flex flex-md-column order-lg-3 mt-4 mt-sm-0" >

				<div class="feature-1 d-md-flex">
					<div class="align-self-center">
						<span class="flaticon-mail display-4 text-primary"></span>
						<h3>Akomodasi</h3>
						<p class="">Kami menyediakan Private Trip bagi anda yang ingin merayakan hari bahagia.</p>
						<a class="btn btn-sm btn-primary" href="{{ route('product', ['filter' => 'akomodasi']) }}">Lihat Produk</a>
					</div>
				</div>

				<div class="feature-1 d-md-flex">
					<div class="align-self-center">
						<span class="flaticon-phone-call display-4 text-primary"></span>
						<h3>Transportasi</h3>
						<p class="">Kami menyediakan tempat Outbound untuk mengisi liburan bahagia client.</p>
						<a class="btn btn-sm btn-primary" href="{{ route('product', ['filter' => 'transportasi']) }}">Lihat Produk</a>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>

<!-- Kenapa Pilih Rindi -->
<div class="untree_co-section ">
	<div class="container">
		<div class="row text-center justify-content-center mb-5">
			<div class="col-lg-7"><h2 class="section-title text-center">{{ Configuration::getHomeSectionTitle(5) }}</h2></div>
		</div>

		<div class="row">
			<div class="col-lg-7 mt-3">
				<div class="owl-single dots-absolute owl-carousel">
					<img src="{{ Configuration::getHomeSectionImage(5)->destination }}" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
				</div>
			</div>
			<div class="col-lg-5 pl-lg-5 ml-auto  mt-3">
				<!-- <h2 class="section-title mb-4">About Tours</h2> -->
				<p class="text-justify">
					<!-- <b>PT. Rindi Sigma Sultana</b> berdiri sejak tahun 2004 berbentuk CV, dan sejak tahun 2016 menjadi PT. Kami memiliki team yang handal dan terampil di bidangnya. Dengan konsep Pelayanan Prima kami peruntukan bagi lembaga-lembaga pemerintahan, industri, perdagangan, perusahaan swasta, perorangan dan asosiasi profesi. Untuk menghasilkansebuah karya jasa yang sukses maka kami menerapkan profesionalisme dan integritas berdampingan bahkan menyatu. Integritas inilah yang sering tidak termasuk dalam kontrak kerja karena memang sulit untuk didefinisikan. -->
					{{ Configuration::getHomeSectionContent(5) }}
				</p>
				<!-- Dengan Reputasi yang baik dengan para rekanan/suppliers seperti : Airlines, Hotels, dan Transportasi menjadikan kami berada daam posisi yang memungkinkan untuk mengadakan pendekata - pendekatan yang fleksibel dan mendapatkan harga -harga yang bersaing. -->
				
				<ul class="container" style="list-style-type: '✔ ';">
					<li class="mb-3">Berpengalaman 20 Tahun</li>
					<li class="mb-3">Harga Bersahabat</li>
					<li class="mb-3">Beragam Destinasi Seluruh Dunia</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<br></br>


<!-- Mengapa Harus Kami -->
<!-- <div class="untree_co-section testimonial-section">
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
</div> -->


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
				<h2 class="mb-2 text-white">{{ Configuration::getWhatsAppSection() }}</h2>
				<!-- <p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p> -->
				<br></br><p class="mb-0"><a href="https://wa.me/+6281218680145" target="_blank" class="btn btn-outline-white text-white btn-md font-weight-bold"><span class="icon-whatsapp"></span> WhatsApp</a></p>
			</div>
		</div>
	</div>
</div>
@endsection