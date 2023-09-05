@extends('layouts.user')
@section('hero')
  <div class="hero hero-inner" syle="height: 200px !important;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Explore Tours</h1>
            <!-- <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p> -->
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
          <h2 class="section-title mb-4">4 DAY LABUAN BAJO</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <p class="m-0"><i class="icon-clock-o"></i> Tanggal</p>
              <b>25-09-2023</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Lembang</b>
            </div>
          </div>
          <img src="images/slider-1.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <h2 class="mt-3">Explore Tours - 4 DAY LABUAN BAJO</h2>
          
          <h3>HARI #1</h3>
          <h4>BANDUNG - JAKARTA - LABUANBAJO</h4>
          <ul>
            <li>Perjalanan dimulai dari Bandung menuju Jakarta</li>
            <li>Bandara Soekarno Hatta menuju Bandara Komodo, Labuan Bajo</li>
            <li>Checkin hotel</li>
            <li>Mengunjungi Gua Batu Cermin Mengunjungi Bukit Sylvia untuk menikmati view sunset</li>
            <li>Menuju tempat kuliner untuk makan malam</li>
            <li>Kembali ke hotel dan istirahat.</li>
          </ul>
          
          <h3>HARI #2</h3>
          <h4>PULAUKELOR - PULAUKALONG</h4>
          <ul>
            <li>Sarapan pagi di hotel</li>
            <li>Dijemput menuju Pelabuhan</li>
            <li>Mengunjungi Pulau Kelor untuk</li>
            <li>trekking serta sesi foto</li>
            <li>Mengunjungi Ke Pulau Manjarite untuk sesi foto dan snorkeling</li>
            <li>Menuju Pulau Rinca untuk mengunjungi habitat komodo</li>
            <li>Menuju Pulau Kalong untuk menikmati sunset dan melihat migrasi ribuan kelelawar</li>
            <li>Makan malam dan bermalam di kapal.</li>
          </ul>
          
          <h3>HARI #3</h3>
          <h4>PULAUPADAR - GILI LAWA</h4>
          <ul>
            <li>Sarapan pagi di atas kapal</li>
            <li>Menuju Pulau Padar untuk trekking menikmati pemandangan dari ketinggian</li>
            <li>Menuju Pink Beach untuk bersantai, snorkeling, dan trekking</li>
            <li>Maka siang di atas kapal</li>
            <li>Menuju Manta Point untuk melihat ikan pari manta</li>
            <li>Mengunjungi Pulau Taka Makassar</li>
            <li>Kapal bersandar di dekat perairan Gili Lawa, dilanjut makan malam dan bermalam diatas kapal.</li>
          </ul>

          <h3>HARI #4</h3>
          <h4>GILI LAWA - LABUANBAJO</h4>
          <ul>
            <li>Sarapan pagi di kapal</li>
            <li>Menuju Gili Lawa untuk trekking dan menikmati pemandangan dari atas bukit</li>
            <li>Menuju Pulau Kanawa untuk snorkeling</li>
            <li>Makan siang di atas kapal</li>
            <li>Kembali ke Labuan Bajo dan di antar ke hotel.</li>
          </ul>
          
          <h2>Included/Exclude</h2>
          <ul>
            <li>Transport sesuai jumlah tamu (mulai dari hiace sampai big bus) standar pariwisata, AC, audio, BBM, driver</li>
            <li>Menginap 1 malam di hotel seputar Labuan Bajo</li>
            <li>Makan pagi di hotel</li>
            <li>Makan siang dan malam di local restaurant</li>
            <li>Tiket objek wisata</li>
            <li>Parkir, air mineral</li>
            <li>Spanduk Group</li>
            <li>Tour Guide (jumlah tamu 20 pax keatas)</li>
          </ul>
          
        </div>

        <!-- Sidebar -->
        <div class="col-lg-5 pl-lg-5 ml-auto">
          <p><a href="https://wa.me/+6282158751381?text=Halo Admin Rindi, Saya mau pesan 4 DAY LABUAN BAJO" target="_blank" class="btn btn-primary">Pesan Sekarang</a></p>

          <h2 class="section-title mb-4">Tour Menarik Lainnya</h2>
          
          <a href="{{ route('detail') }}" class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-5">
                  <img src="images/product-2.jpg" class="img-fluid rounded-start" style="height: 100%;" alt="tour">
              </div>
              <div class="col-md-7">
                <div class="card-body px-0">
                  <p class="card-text">1 DAY TRIP LEMBANG</p>
                  <p class="card-text"><small class="text-muted">Far far away, behind the word mountains.</small></p>
                </div>
              </div>
            </div>
          </a>

          <a href="{{ route('detail') }}" class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-5">
                  <img src="images/product-3.jpg" class="img-fluid rounded-start" style="height: 100%;" alt="tour">
              </div>
              <div class="col-md-7">
                <div class="card-body px-0">
                  <p class="card-text">1 DAY TRIP DUFAN</p>
                  <p class="card-text"><small class="text-muted">Far far away, behind the word mountains.</small></p>
                </div>
              </div>
            </div>
          </a>
          
          <a href="{{ route('detail') }}" class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-5">
                  <img src="images/product-4.jpg" class="img-fluid rounded-start" style="height: 100%;" alt="tour">
              </div>
              <div class="col-md-7">
                <div class="card-body px-0">
                  <p class="card-text">11 DAY 6 NEGARA CHATAY PACIFIC</p>
                  <p class="card-text"><small class="text-muted">Far far away, behind the word mountains.</small></p>
                </div>
              </div>
            </div>
          </a>

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