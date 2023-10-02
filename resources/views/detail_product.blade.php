@extends('layouts.user')
@section('hero')
  <div class="hero hero-inner" >
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Explor The Worlds</h1>
            <p class="text-white">People Don't Take, Trips Take People</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
  
@section('content')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">{{ $data->name }}</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-3">
              <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>{{ $data->duration }}</b>
            </div>
            <div class="col-3">
              <p class="m-0"><i class="icon-money"></i> Price</p>
              <b>{{ "Rp. " . number_format($data->price, 0) }}</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Indonesia</b>
            </div>
          </div>
          <img src="{{ $data->cover_image }}" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <!-- <h2 class="mt-3">Dunia Fantasi (DUFAN) 1 Day Trip</h2> -->
          <br></br>
          {{ $data->description }}

          <!-- <h4>Meeting Point : Metro indah mall</h4>
          <h4>Itinerary :</h4>
          <ul>
            <li>Peserta berkumpul di tempat yang telah di tentukan.</li>
            <li>Berangkat menuju Jakarta via Tol Cipularang, di dalam Hiace peserta dapat menikmati Snack sambil mendengarkan musik.</li>
            <li>Rombongan tiba di Ancol lalu Masuk Area Dufan dan langsung check in Dufan.</li>
            <li>Menuju Dunia Fantasi.</li>
            <li>Masuk ke area Dufan.</li>
            <li>Anda bisa mencoba wahana–wahana permainan yang ada seperti : Tornado, Hysteria, Halilintar, Arung Jeram, Bianglala, dll.</li>
            <li>Peserta berkumpul kembali di Bus.</li>
            <li>Melanjutkan perjalanan menuju Bandung.</li>
            <li>Tiba di Bandung End Off Service, sampai jumpa dalam program tour berikutnya bersama PT.Rindi Sigma Sultana.</li>
          </ul>

          <h4>Harga :</h4>
          <ul>
            <li>Rp 385.000/pax</li>
          </ul>

          <h4>Harga Termasuk :</h4>
          <ul>
            <li>Private Transport Full AC.</li>
            <li>Tiket Masuk Ancol & Terusan Dufan.</li>
            <li>1x Snack.</li>
            <li>Guide Local.</li>
            <li>Spanduk Group.</li>
            <li>Parkir, Tol & BBM.</li>
            <li>Service Charge.</li>
          </ul>

          <h4>Syarat & Ketentuan : </h4>
          <ul>
            <li>Bersifat Open Trip atau trip dengan peserta gabungan.</li>
            <li>Daftar 1 Orang pun Bisa.</li>
            <li>Kuota keberangkatan minimal 10 orang.</li>
            <li>Peserta di harapkan berkumpul di meeting point tepat waktu.</li>
            <li>Jika peserta terlambat datang ke start point atau tidak ada kabar dan tertinggal maka DP/ Pelunasan dinyatakan hangus.</li>
            <li>Pembatalan dari pihak peserta maka DP/ Pelunasan hangus atau hanya bisa di gantikan dengan orang lain.</li>
          </ul> -->

        </div>




        <!-- Sidebar -->
        <div class="col-lg-5 pl-lg-5 ml-auto">
          <div class="widget-sidebar">
            <h2 class="section-title mb-4">Hubungi Kami</h2>
            <p><a href="https://wa.me/+6282158751381?text=Halo Admin Rindi, Saya mau pesan 4 DAY LABUAN BAJO" target="_blank" class="btn btn-primary">Pesan Sekarang</a></p>
          </div>

          <div.widget-sideba>
          <h2 class="section-title mb-4 mt-5">Tour Menarik Lainnya</h2>
          
          @foreach($interest as $i)
          <a href="{{ route('detail.product', $i->id) }}" class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-5">
                  <img src="{{ $i->cover_image }}" class="img-fluid rounded-start" style="height: 100%;" alt="tour">
              </div>
              <div class="col-md-7">
                <div class="card-body px-0">
                  <p class="card-text">{{ $i->name }}</p>
                  <p class="card-text"><small class="text-muted">{{ substr($i->description, 0, 50) }}...</small></p>
                </div>
              </div>
            </div>
          </a>
          @endforeach

        </div>
      </div>
    </div>
  </div>

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