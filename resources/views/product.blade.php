@extends('layouts.user')
@section('hero')
  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap"> 
          <h3 class="text-white">LET'S TOUR </h3> 
          <h6 class="text-white">with</h6> 
          <h2 class="text-white">RINDI SIGMA SULTAN</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
  
@section('content')
<!-- <div class="row">
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
</div> -->

<div class="untree_co-section">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <a href="{{ route('product', ['filter' => 'tour']) }}" class="btn btn-primary col-12 col-md-2 mx-1 my-1">Paket Tour</a>
      <a href="{{ route('product', ['filter' => 'event']) }}" class="btn btn-primary col-12 col-md-2 mx-1 my-1">Event Organizer</a>
      <a href="{{ route('product', ['filter' => 'akomodasi']) }}" class="btn btn-primary col-12 col-md-2 mx-1 my-1">Akomodasi</a>
      <a href="{{ route('product', ['filter' => 'transportasi']) }}" class="btn btn-primary col-12 col-md-2 mx-1 my-1">Transportasi</a>
    </div>
  </div>
</div>

<div class="untree_co-section">
  <div class="container">
    <div class="row">
      
    @if(request()->get('filter') == 'tour')
    <!-- TOUR -->
    <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'dufan']) }}" class="d-block mb-3"><img src="images/product-3.jpg" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">Dunia Fantasi (DUFAN)</a></h3>
              <div class="d-flex flex-column text-black-50">
                <p class="m-0"><i class="icon-clock-o"></i> 1 Day</p>
                <p><i class="icon-add_location"></i> Jakarta - Indonesia</p>
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'yogyakarta']) }}" class="d-block mb-3"><img src="images/yogyakarta.jpg" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">YOGYAKARTA</a></h3>
              <div class="d-flex flex-column text-black-50">
                <p class="m-0"><i class="icon-clock-o"></i> 3 Days - 2 Nights</p>
                <p><i class="icon-add_location"></i> Yogyakarta - Indonesia</p>
              </div>
              <!-- <p>Tour & Gathring Yogyakarta - Liburan Sekolah & Akhir Tahun 2023 - 3H2N</p> -->
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'labuan bajo']) }}" class="d-block mb-3"><img src="images/labuan bajo.jpg" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">LABUAN BAJO</a></h3>
              <div class="d-flex flex-column text-black-50">
                <p class="m-0"><i class="icon-clock-o"></i> 4 Days - 3 Nights </p>
                <p class="d-inline-block"><i class="icon-add_location"></i> Nusa Tenggara - Indonesia</p>
              </div>
              <!-- <p>Tour & Gathring Yogyakarta - Liburan Akhir Tahun 2023 - 5H4N</p> -->
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>

        <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'bali']) }}" class="d-block mb-3"><img src="images/gwk.jpg" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">Bali</a></h3>
              <div class="d-flex flex-column text-black-50">
                <p class="m-0"><i class="icon-clock-o"></i> 5 Days - 4 Nights</p>
                <p><i class="icon-add_location"></i> Nusa Tenggara - Indonesia</p>
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'southeast asia tour']) }}" class="d-block mb-3"><img src="images/Tour-Negara-Asia.jpg" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">Southeast Asia Tour</a></h3>
              <div class="d-flex flex-column text-black-50">
                <p class="m-0"><i class="icon-clock-o"></i> 7 Days - 6 Nights</p>
                <p><i class="icon-add_location"></i> Southeast Asia</p>
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>


      @elseif(request()->get('filter') == 'event')
      <!-- EVENT ORGANIZER -->
      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'mice']) }}" class="d-block mb-3"><img src="images/eo_mice.png" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail', ['detail' => 'mice']) }}">MICE (Meeting, Incentive, Convention, Exhibition)</a></h3>
              <div class="d-flex flex-column text-black-50">
                <!-- <p class="m-0"><i class="icon-clock-o"></i> 2 Days</p>
                <p><i class="icon-add_location"></i> Indoneisa</p> -->
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'bandung']) }}" class="d-block mb-3"><img src="images/eo_bandung.png" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">Gathering & Outbound (Meeting + Landover + Outbound in Lembang)</a></h3>
              <div class="d-flex flex-column text-black-50">
                <p class="m-0"><i class="icon-clock-o"></i> 2 Days 1 Night</p>
                <p><i class="icon-add_location"></i>Bandung - Indoneisa</p>
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'live_music']) }}" class="d-block mb-3"><img src="images/eo_musik.jpg" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">Live Music Concert Event</a></h3>
              <div class="d-flex flex-column text-black-50">
                <p class="m-0"><i class="icon-clock-o"></i> 2 Days</p>
                <p><i class="icon-add_location"></i> Indoneisa</p>
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail') }}" class="d-block mb-3"><img src="images/eo_musik.jpg" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">Event Organizer Musik</a></h3>
              <div class="d-flex flex-column text-black-50">
                <p class="m-0"><i class="icon-clock-o"></i> 2 Days</p>
                <p><i class="icon-add_location"></i> Indonesia</p>
              </div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a>
            </div>
          </div>
        </div>
      </div> -->
      
      @elseif(request()->get('filter') == 'akomodasi')
      <!-- AKOMODASI -->
      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail') }}" class="d-block mb-3"><img src="images/pesawat.jpg" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">TIKET PESAWAT</a></h3>
              <div class="d-flex flex-column text-black-50">
                <!-- <p class="m-0"><i class="icon-clock-o"></i> On Tour</p> -->
                <p><i class="icon-add_location"></i> Domestik - Internasional</p>
              </div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail') }}" class="d-block mb-3"><img src="images/hotel.jpg" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail') }}">HOTEL</a></h3>
              <div class="d-flex flex-column text-black-50">
                <!-- <p class="m-0"><i class="icon-clock-o"></i> 03-10-2023</p> -->
                <p><i class="icon-add_location"></i> On Tour</p>
              </div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <!-- <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>
      
      @elseif(request()->get('filter') == 'transportasi')
      <!-- TRANSPORTASI -->            
      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'city_car']) }}" class="d-block mb-3"><img src="images/toyota_innova.png" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail', ['detail' => 'city_car']) }}">CITY CAR</a></h3>
              <div class="d-flex flex-column text-black-50">
                <!-- <p class="m-0"><i class="icon-clock-o"></i> 24 Hour</p> -->
                <p><i class="icon-add_location"></i> Bandung - Indonesia</p>
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>
            
      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'premium_car']) }}" class="d-block mb-3"><img src="images/lexus_lm.png" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail', ['detail' => 'premium_car']) }}">PREMIUM CAR</a></h3>
              <div class="d-flex flex-column text-black-50">
                <!-- <p class="m-0"><i class="icon-clock-o"></i> 24 Hour</p> -->
                <p><i class="icon-add_location"></i> Bandung - Indonesia</p>
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'hiace']) }}" class="d-block mb-3"><img src="images/hiace.PNG" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail', ['detail' => 'hiace']) }}">EXCLUSIVE HIACE</a></h3>
              <div class="d-flex flex-column text-black-50">
                <!-- <p class="m-0"><i class="icon-clock-o"></i> 24 Hour</p> -->
                <p><i class="icon-add_location"></i> Bandung - Indonesia</p>
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="media-1">
          <a href="{{ route('detail', ['detail' => 'bus']) }}" class="d-block mb-3"><img src="images/bus.PNG" alt="Image" class="w-100 img-fluid"></a>
          <div class="d-flex">
            <div class="p-3">
              <h3><a href="{{ route('detail', ['detail' => 'bus']) }}">BUS PARIWISATA</a></h3>
              <div class="d-flex flex-column text-black-50">
                <!-- <p class="m-0"><i class="icon-clock-o"></i> 48 Hour</p> -->
                <p><i class="icon-add_location"></i> Bandung - Indonesia</p>
              </div>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <a href="https://wa.me/+6282158751381" target="_blank" class="btn btn-outline-primary btn-sm">Pesan</a> -->
            </div>
          </div>
        </div>
      </div>
      @endif

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