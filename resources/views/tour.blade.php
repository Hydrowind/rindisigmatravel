@extends('layouts.user')
@section('hero')
  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Our Services</h1>
            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
  
@section('content')
<div class="row">
  <div class="col-12">
    <form class="form">
      <div class="row mb-2">
        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
          <select name="" id="" class="form-control custom-select">
            <option value="">Destination</option>
            <option value="">Peru</option>
            <option value="">Japan</option>
            <option value="">Thailand</option>
            <option value="">Brazil</option>
            <option value="">United States</option>
            <option value="">Israel</option>
            <option value="">China</option>
            <option value="">Russia</option>
          </select>
        </div>
        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
          <input type="text" class="form-control" name="daterange">
        </div>
        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
          <input type="text" class="form-control" placeholder="# of People">
        </div>

      </div>    
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
          <input type="submit" class="btn btn-primary btn-block" value="Search">
        </div>
        <div class="col-lg-8">
          <label class="control control--checkbox mt-3">
            <span class="caption">Save this search</span>
            <input type="checkbox" checked="checked" />
            <div class="control__indicator"></div>
          </label>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="untree_co-section">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-6 col-lg-3">
        <div class="media-1">
          <a href="#" class="d-block mb-3"><img src="images/product-1.jpg" alt="Image" class="img-fluid"></a>
          <div class="d-flex">
            <div>
              <h3><a href="#">4 DAY LABUAN BAJO</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <div class="media-1">
          <a href="#" class="d-block mb-3"><img src="images/product-2.jpg" alt="Image" class="img-fluid"></a>
          <div class="d-flex">
            <div>
              <h3><a href="#">1 DAY TRIP LEMBANG</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <div class="media-1">
          <a href="#" class="d-block mb-3"><img src="images/product-3.jpg" alt="Image" class="img-fluid"></a>
          <div class="d-flex">
            <div>
              <h3><a href="#">1 DAY TRIP DUFAN</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <div class="media-1">
          <a href="#" class="d-block mb-3"><img src="images/product-4.jpg" alt="Image" class="img-fluid"></a>
          <div class="d-flex">
            <div>
              <h3><a href="#">11 DAY 6 NEGARA CHATAY PACIFIC</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="untree_co-section">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-6 col-lg-3">
        <div class="service text-center">
          <span class="icon-paper-plane"></span>
          <h3>Excellence in Travel</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <div class="service text-center">
          <span class="icon-tag"></span>
          <h3>Discover Best</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <div class="service text-center">
          <span class="icon-user"></span>
          <h3>A New Moments of Life</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <div class="service text-center">
          <span class="icon-support"></span>
          <h3>Joy To Your Journey</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- <div class="untree_co-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-lg-6 text-center">
        <h2 class="section-title text-center mb-3">More Services</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>
    <div class="row align-items-stretch">
      <div class="col-lg-4 order-lg-1">
        <div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/hero-slider-1.jpg');"></div></div></div>
      </div>

      <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <span class="flaticon-house display-4 text-primary"></span>
            <h3>Beautiful Condo</h3>
            <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
          </div>
        </div>

        <div class="feature-1 ">
          <div class="align-self-center">
            <span class="flaticon-restaurant display-4 text-primary"></span>
            <h3>Restaurants & Cafe</h3>
            <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
          </div>
        </div>

      </div>

      <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <span class="flaticon-mail display-4 text-primary"></span>
            <h3>Easy to Connect</h3>
            <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
          </div>
        </div>

        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <span class="flaticon-phone-call display-4 text-primary"></span>
            <h3>24/7 Support</h3>
            <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
          </div>
        </div>

      </div>

    </div>
  </div>
</div> -->

<!-- <div class="py-5 cta-section">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
        <p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
        <p class="mb-0"><a href="booking.html" class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
      </div>
    </div>
  </div>
</div> -->
@endsection