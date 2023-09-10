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
@if(request()->get('detail') == 'dufan')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Dunia Fantasi (DUFAN) 1 Day Trip</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>1 Day Trip</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Jakarta - Indonesia</b>
            </div>
          </div>
          <img src="images/product-3.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <!-- <h2 class="mt-3">Dunia Fantasi (DUFAN) 1 Day Trip</h2> -->
          <br></br>
          <h4>Meeting Point : Metro indah mall</h4>
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
          </ul>
        </div>


@elseif(request()->get('detail') == 'yogyakarta')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Yogyakarta 3 Days 2 Nights</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>3 Day 2 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Yogyakarta - Indonesia</b>
            </div>
          </div>
          <img src="images/yogyakarta.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <!-- <h2 class="mt-3">Dunia Fantasi (DUFAN) 1 Day Trip</h2> -->
          <br></br>
          <h4>Meeting Point : Tempat yg sudah ditentukan</h4>
          <h4>Harga :</h4>
          <ul>
            <li>Rp 1.200.000/pax</li>
          </ul>
          <h4>Itinerary :</h4>
          <h5>Hari-1</h5>
          <ul>
            <li>Peserta berkumpul di tempat yang telah di tentukan.</li>
            <li>Makan siang di Lokal Resto.</li>
            <li>Ishoma.</li>
            <li>Perjalanan menuju Hotel.</li>
            <li>Check in Hotel + Free Program (Malioboro).</li>
          </ul>
            <h5>Hari-2</h5>
          <ul>
            <li>Sarapan pagi di Hotel.</li>
            <li>Perjalanan menuju Lava Tour Merapi.</li>
            <li>Start perjalanan Lava Tour Merapi.</li>
            <li>Menggunakan Jeep.</li>
            <li>Makan siang di Lokal Restoran + Ishoma.</li>
            <li>Perjalanan menuju Candi Prambanan.</li>
            <li>Berkunjung ke destinasi wisata Candi.</li>
            <li>Prambanan.</li>
            <li>Perjalanan kembali ke Hotel.</li>
            <li>Free Program.</li>
            <li>Berkumpul di Lobby untuk perjalanan makan.</li>
            <li>malam di Lokal Restoran.</li>
          </ul>
             <h5>Hari-3</h5>
          <ul>
            <li>Sarapan di Hotel.</li>
            <li>Check out Hotel dan melanjutkan perjalanan destinasi wisata ke Taman Sari.</li>
            <li>Melakukan Wisata di Taman Sari.</li>
            <li>Perjalanan menuju pusat oleh-oleh Yogyakarta.</li>
            <li>Makan Siang di Lokal Restoran.</li>
            <li>Perjalanan ke Stasiun Yogyakarta untuk kembali ke Kota Bandung.</li>
            <li>Tiba di Stasiun Yogyakarta untuk kembali ke Kota.</li>
            <li>Bandung dan selesai sudah perjalanan bersama Rindi Sigma Sultana.</li>
          </ul>
          <h3>Harga Termasuk :</h3>
          <ul>
            <li>Transportasi Pariwisata AC PP.</li>
            <li>Hotel sesuai program.</li>
            <li>Makan sesuai program.</li>
            <li>Service Charge (Tol, Parkir & BBM).</li>
            <li>Tour Leader service.</li>
          </ul>
          <h3>Harga Tidak Termasuk :</h3>
          <ul>
            <li>Laundry.</li>
            <li>Pengeluaran Pribadi.</li>
            <li>Pengeluaran diluar program.</li>
          </ul>
        </div>


@elseif(request()->get('detail') == 'yogyakarta')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Yogyakarta 3 Days 2 Nights</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>3 Day 2 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Yogyakarta - Indonesia</b>
            </div>
          </div>
          <img src="images/yogyakarta.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <!-- <h2 class="mt-3">Dunia Fantasi (DUFAN) 1 Day Trip</h2> -->
          <br></br>
          <h4>Meeting Point : Tempat yg sudah ditentukan</h4>
          <h4>Harga :</h4>
          <ul>
            <li>Rp 1.200.000/pax</li>
          </ul>
          <h4>Itinerary :</h4>
          <h5>Hari-1</h5>
          <ul>
            <li>Peserta berkumpul di tempat yang telah di tentukan.</li>
            <li>Makan siang di Lokal Resto.</li>
            <li>Ishoma.</li>
            <li>Perjalanan menuju Hotel.</li>
            <li>Check in Hotel + Free Program (Malioboro).</li>
          </ul>
            <h5>Hari-2</h5>
          <ul>
            <li>Sarapan pagi di Hotel.</li>
            <li>Perjalanan menuju Lava Tour Merapi.</li>
            <li>Start perjalanan Lava Tour Merapi.</li>
            <li>Menggunakan Jeep.</li>
            <li>Makan siang di Lokal Restoran + Ishoma.</li>
            <li>Perjalanan menuju Candi Prambanan.</li>
            <li>Berkunjung ke destinasi wisata Candi.</li>
            <li>Prambanan.</li>
            <li>Perjalanan kembali ke Hotel.</li>
            <li>Free Program.</li>
            <li>Berkumpul di Lobby untuk perjalanan makan.</li>
            <li>malam di Lokal Restoran.</li>
          </ul>
             <h5>Hari-3</h5>
          <ul>
            <li>Sarapan di Hotel.</li>
            <li>Check out Hotel dan melanjutkan perjalanan destinasi wisata ke Taman Sari.</li>
            <li>Melakukan Wisata di Taman Sari.</li>
            <li>Perjalanan menuju pusat oleh-oleh Yogyakarta.</li>
            <li>Makan Siang di Lokal Restoran.</li>
            <li>Perjalanan ke Stasiun Yogyakarta untuk kembali ke Kota Bandung.</li>
            <li>Tiba di Stasiun Yogyakarta untuk kembali ke Kota.</li>
            <li>Bandung dan selesai sudah perjalanan bersama Rindi Sigma Sultana.</li>
          </ul>
          <h3>Harga Termasuk :</h3>
          <ul>
            <li>Transportasi Pariwisata AC PP.</li>
            <li>Hotel sesuai program.</li>
            <li>Makan sesuai program.</li>
            <li>Service Charge (Tol, Parkir & BBM).</li>
            <li>Tour Leader service.</li>
          </ul>
          <h3>Harga Tidak Termasuk :</h3>
          <ul>
            <li>Laundry.</li>
            <li>Pengeluaran Pribadi.</li>
            <li>Pengeluaran diluar program.</li>
          </ul>
        </div>


@elseif(request()->get('detail') == 'labuan bajo')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Labuan Bajo 4 days 3 Nights</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>4 days 3 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Nusa Tenggara - Indonesia</b>
            </div>
          </div>
          <img src="images/labuan bajo.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <!-- <h2 class="mt-3">Dunia Fantasi (DUFAN) 1 Day Trip</h2> -->
          <br></br>
          <h4>Meeting Point : Tempat yg sudah ditentukan</h4>
          <h4>Harga :</h4>
          <ul>
            <li>Rp 5.500.000/pax</li>
          </ul>
          <h4>Itinerary :</h4>
          <h5>Hari-1</h5>
          <ul>
            <li>Tiba di Bandara Komodo Labuan Bajo.</li>
            <li>rombongan dijemput dan diantar ke rumah makan PRIMA RASA untuk makan siang.</li>
            <li>Setelah makan siang rombongan diantar ke Jayakarta hotel.</li>
            <li>Makan malam akan disajikan di rumah makan CIANJUR. Setelah makan malam kembali ke hotel.</li>
          </ul>
            <h5>Hari-2</h5>
          <ul>
            <li>Rombongan berangkat dari hotel menuju pelabuhan kemudian berlayar ke menuju pulau KELOR.</li>
            <li>Tiba di pulau mungil yang indah ini rombongan hiking ke puncak untuk ambil foto bersama sambil menikmati keindahan pulau ini dan pulau Flores di kejauhan.</li>
            <li>Kembali ke kapal dan makan siang. Setelah makan siang rombongan istirahat.</li>
            <li>Berlayar menuju Menjerite untuk snorkling atau sekedar bermain di pantai.</li>
            <li>Rombongan berlayar menuju pulau Kalong untuk melihat binatang Kalong keluar dari sarang mencari makan.</li>
            <li>Rombongan makan malam dan setelah makan malam.</li>
            <li>Berlayar ke pulau Padar.</li>
            <li>Tiba di pulau Padar beristirahat.</li>
          </ul>
             <h5>Hari-3</h5>
          <ul>
            <li>Rombongan turun dari kapal dan hiking ke puncak Padar untuk menikmati matahari terbit.</li>
            <li>Rombongan turun dan kembali ke kapal untuk sarapan pagi.</li>
            <li>Rombongan berlayar menuju Pink Beach.</li>
            <li>Tiba di Pink Beach dan turun dari kapal untuk snorkling atau sekedar bermain di pantai yang indah tak terkatakan.</li>
            <li>Rombongan berlayar ke pulau Komodo</li>
            <li>Tiba di pulau Komodo langsung jalan-jalan melihat binatang Varanus Komodoensis.</li>
            <li>Kembali ke kapal untuk makan siang dan berlayar menuju pulau Kanawa.Tiba di Stasiun Yogyakarta untuk kembali ke Kota.</li>
            <li>Tiba pulau Kanawa dan snorkling.</li>
            <li>Kembali ke kapal dan berlayar kembali ke Labuan Bajo. Langsung makan malam di Pusat Kuliner Kampung Ujung. Setelah makan malam rombongan check in hotel.</li>
          </ul>
             <h5>Hari-4</h5>
          <ul>
            <li>Setelah sarapan pagi rombongan istirahat di Lobby hotel sambil menunggu penjemputan untuk makan siang sebelum berangkat ke Airport.</li>
            <li>Dalam perjalanan ke Airport rombongan mampir di toko oleh- oleh khas Labuan Bajo.</li>
            <li>Demikianlah perjalanan wisata explore Labuan Bajo bersama Rindi Sigma Travel. Sampai jumpa di perjalanan selanjutnya.</li>
          </ul>
          <h3>Harga Termasuk :</h3>
          <ul>
            <li>Transportasi Pariwisata AC PP.</li>
            <li>Hotel Jayakarta 2 malam.</li>
            <li>Sharing boat 1 malam.</li>
            <li>Makan sesuai program.</li>
            <li>Tiket masuk Pulau Komodo.</li>
            <li>Alat snorkling.</li>
            <li>Laundry.</li>
          </ul>
          <h3>Harga Tidak Termasuk :</h3>
          <ul>
            <li>Laundry.</li>
            <li>Pengeluaran Pribadi.</li>
            <li>Pengeluaran diluar program.</li>
          </ul>
        </div>


@elseif(request()->get('detail') == 'bali')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Bali 5 days 4 Nights</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>5 days 4 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Nusa Tenggara - Indonesia</b>
            </div>
          </div>
          <img src="images/gwk.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <!-- <h2 class="mt-3">Dunia Fantasi (DUFAN) 1 Day Trip</h2> -->
          <br></br>
          <h4>Meeting Point : Tempat yg sudah ditentukan</h4>
          <h4>Harga :</h4>
          <ul>
            <li>Rp 3.800.000/pax</li>
          </ul>
          <h4>Itinerary :</h4>
          <h5>Hari-1</h5>
          <ul>
            <li>Berangkat menuju Bandara Soekarno Hatta.</li>
            <li>Tiba di Jakarta.</li>
            <li>Terbang ke Bali.</li>
            <li>Tiba di Bali.</li>
            <li>Sarapan dan Mandi.</li>
            <li>Garuda Wisnu Kencana.</li>
            <li>Cek in (drop barang) + makan siang.</li>
            <li>TPantai Kuta + Beach Walk.</li>
            <li>Makan Malam + Kembali ke Hotel.</li>
          </ul>
            <h5>Hari-2</h5>
          <ul>
            <li>Sarapan pagi di Hotel.</li>
            <li>Pertunjukkan Tari Barong Batu Bulan.</li>
            <li>Menuju Objek Wisata Kintamani.</li>
            <li>Makan Siang + Sholat Jumat di Kintamani.</li>
            <li>Kemudian menuju Pasar Sukawati.</li>
            <li>Kembali ke Hotel dan Beristirahat.</li>
            <li>Makan Malan di Local Restaurant.</li>
          </ul>
             <h5>Hari-3</h5>
          <ul>
            <li>Sarapan pagi di Hotel.</li>
            <li>Pantai Tanjung Benoa (Tiket Water Sport biaya sendiri).</li>
            <li>Makan Siang.</li>
            <li>Melanjutkan acara dengan berbelanja.</li>
            <li>Jimbaran + Makan Malam.</li>
            <li>Kembali ke Hotel untuk Istirahat.</li>
           </ul>
             <h5>Hari-4</h5>
          <ul>
            <li>Sarapan Pagi di Hotel + checkout.</li>
            <li>Pura Ulun Danu.</li>
            <li>Makan Siang.</li>
            <li>Djoger.</li>
            <li>Tanah Lot.</li>
            <li>Penyebrangan Gili Manuk - Katapang.</li>
            <li>melanjutkan perjalanan menuju Bandung.</li>
          </ul>
          <h5>Hari-5</h5>
          <ul>
            <li>Sarapan Pagi + Mandi.</li>
            <li>Makan Siang + Sholat.</li>
            <li>Yogya.</li>
            <li>Perjalanan menuju Bandung.</li>
          </ul>
          <h3>Harga Termasuk :</h3>
          <ul>
            <li>Bus Pariwisata 45 Seat.</li>
            <li>Makan sesuai program (termasuk sekalai ke Ikan Bakar Jimbaran).</li>
            <li>Akomodasi 3 Malam.</li>
            <li>Tiket Pesawat.</li>
            <li>Wisata sesuai program.</li>
            <li>Tour Guide service.</li>
            <li>Snack.</li>
          </ul>
          <h3>Harga Tidak Termasuk :</h3>
          <ul>
            <li>Laundry.</li>
            <li>Pengeluaran Pribadi.</li>
            <li>Pengeluaran diluar program.</li>
          </ul>
        </div>


@elseif(request()->get('detail') == 'southeast asia tour')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Southeast Asia Tour 7 days 6 Nights</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>7 days 6 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Southeast Asia</b>
            </div>
          </div>
          <img src="images/Tour-Negara-Asia.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">

          <br></br>
          <h4>Harga :</h4>
          <ul>
            <li>Twin Sharing IDR 10.888.000</li>
            <li>*Single Supplement IDR 2.500.000</li>
            <h6 class="text-red">KET : * OPTIONAL</h6>
          </ul>
          <h4>Itinerary :</h4>
          <h5>Hari-1</h5>
          <ul>
            <li>Hari pertama berkumpul di Bandara Soekarno – Hatta untuk memulai perjalanan tour menuju Kota Kuala Lumpur. Setibanya Anda diantar ke hotel untuk beristirahat.</li>
          </ul>
            <h5>Hari-2</h5>
          <ul>
            <li>Anda akan diajak untuk photo stop di Istana Negara tempat kediaman Yang Dipertuan Agung..</li>
            <li>Kemudian menuju Genting Highland yang merupakan pusat hiburan keluarga dengan menggunakan Cable Car. Disini Anda juga akan mengunjungi Batu Cave Temple yang merupakan kuil India terbesar di Malaysia. Perjalanan dilanjutkan menuju Johor Bahru untuk beristirahat.</li>
          </ul>
             <h5>Hari-3</h5>
          <ul>
            <li>Dihari ini, Anda akan melanjutkan perjalanan menuju Singapore melewati perbatasan. Setelah tiba disana, Anda akan langsung diajak menuju Singapore Jewel bandara Changi, Merlion Park dan mepunyai waktu bebas untuk makan dan berbelanja di daerah Orchard Road.</li>
            <li>Perjalanan dilanjutkan menuju border keluar dari Singapore dan menuju Melaka.</li>
           </ul>
             <h5>Hari-4</h5>
          <ul>
            <li>Tak hanya diajak city tour Malacca untuk mengunjungi Gedung Merah Malacca, Benteng Portugis dan Patung Santo Francis, anda juga akan melanjutkan perjalanan menuju Putrajaya, disana banyak photostop seperti Masjid Putrajaya, Jembatan Putrajaya, Danau Putrajaya dan masih banyak lagi. Selain itu tak lupa Anda akan berkunjung ke KLCC Petronas Twin Tower dan mengunjungi Chocolate Factory.</li>
            <li>Perjalanan pun dilanjutkan menuju Kedah untuk beristirahat.</li>
          </ul>
          <h5>Hari-5</h5>
          <ul>
            <li>Selesai santap pagi, Anda akan melanjutkan perjalanan menuju ke Hatyai (Thailand) untuk mengunjungi Toko Kaos Kaysorn, belanja Lokal Produk di Nora Plaza (Barang Kulit khas Thailand).</li>
            <li>lanjut menuju Sleeping Buddha (Wat Phranon Laem Pho), Samila Beach dan melihat Mermaid Statue dilanjutkan menuju Hat Yai Floating Market (buka khusus weekend).</li>
          </ul>
          <h5>Hari-6</h5>
          <ul>
            <li>Hari ini Anda akan diajak kembali menuju Kuala Lumpur. Sebelumnya, Anda akan mempunyai waktu bebas untuk berbelanja di daerah Bukit Bintang.</li>
          </ul>
          <h5>Hari-7</h5>
          <ul>
            <li>Setelah santap pagi, Anda akan diantar menuju airport untuk penerbangan kembali ke Tanah Air.</li>
          </ul>
          <h3>Harga Termasuk :</h3>
          <ol>
            <li>Tiket pesawat internasional kelas ekonomi Jakarta – Malaysia – Jakarta dengan Singapore Airlines.</li>
            <li>Akomodasi, menginap di hotel dengan ketentuan 2(dua) orang dalam satu kamar (Twin Sharing).</li>
            <li>Jika menginginkan satu kamar sendiri akan dikenakan biaya tambahan (Single Supplement).</li>
            <li>Acara tour dan transfer sesuai dengan program.</li>
            <li>Transportasi dengan Bus wisata AC sesuai dengan program (minimal 20 orang dalam 1 bus).</li>
            <li>Makan pagi, siang dan malam sesuai dengan program.</li>
            <li>Tour Leader dari Rindi Sigma Sultana.</li>
            <li>Local Guide.</li>
            <li>Asuransi Perjalanan.</li>
          </ol>
          <h3>Harga Tidak Termasuk :</h3>
          <ol>
            <li>Dokumen Perjalanan (passport).</li>
            <li>Pengeluaran pribadi seperti: mini bar, room service, telepon, laundry, tambahan makanan dan minuman di restoran, dll.</li>
            <li>Transportasi Bandung - Jakarta - Bandung</li>
            <li>Tour tambahan (optional) yang mungkin diadakan selama perjalanan.</li>
            <li>Biaya kelebihan berat barang-barang bawaan di atas 20kg (excess baggage) atau sesuai dengan peraturan penerbangan yang digunakan.</li>
            <li>Biaya masuk bagi barang-barang yang dikenakan oleh bea & cukai di Jakarta maupun di negara-negara yang dikunjungi.</li>
            <li>Biaya Single Supplement bagi Peserta yang menempati kamar sendiri.</li>
            <li>Biaya PCR</li>          
          </ol>
          <h3>Syarat & Ketentuan :</h3>
          <ul>
            <li>Uang muka pendaftaran yang dibayarkan kepada PT. Rindi Sigma Sultana (“Rindi Sigma Sultana Tours & Travel”) tidak dapat dikembalikan (down payment non-refundable) ditambah dengan biaya tiket dan visa (jika ada).</li>
            <li>Pelunasan biaya tour dilakukan 14 hari sebelum tanggal keberangkatan.</li>
            <li>Bagi pendaftar yang berusia di atas 70 tahun atau memiliki keterbatasan fungsi anggota tubuh atau indera atau keterbatasan secara mental, wajib didampingi oleh anggota keluarga, teman atau saudara yang akan bertanggung jawab selama perjalanan tour.</li>
            <li>Demi kenyamanan dan kelancaran perencanaan perjalanan tour, Rindi Sigma Sultana Tours & Travel berhak untuk menerbitkan tiket pesawat, kereta api dan transportasi lainnya, akomodasi, tiket masuk objek wisata tanpa melakukan konfirmasi lisan maupun tertulis kepada pendaftar yang telah melakukan deposit.</li>
            <li>Jadwal tour dapat berubah sewaktu-waktu mengikuti kondisi yang memungkinkan dengan tanpa mengurangi isi dalam acara tour tersebut.</li>       
          </ul>
        </div>

@elseif(request()->get('detail') == 'mice')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">MICE (Meeting, Incentive, Convention, Exhibition)</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <!-- <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>7 days 6 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Southeast Asia</b> -->
            </div>
          </div>
          <img src="images/eo_mice.png" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <!-- <h2 class="mt-3">Dunia Fantasi (DUFAN) 1 Day Trip</h2> -->
          <br></br>
          <h4>Harga : - </h4>
          <h4>Fasilitas :</h4>
          <ul>
            <li>Penetapan Lokasi dan Ruang MICE.</li>
            <li>Perlengkapan Fasilitas MICE.</li>
            <li>Penanganan Transportasi.</li>
            <li>Pelayanan Makanan dan Minuman</li>
            <li>Akomodasi.</li>
            <li>Dokumentasi.</li>
        </div>


@elseif(request()->get('detail') == 'bandung')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Gathering & Outbound [Gabung aja 2 produk Lembang paket 975 sama 850]</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>2 days 1 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Lembang - Bandung</b>
            </div>
          </div>
          <img src="images/eo_bandung.png" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">

          <br></br>
          <h2>Meeting + Landover + Outbound in Lembang 2D1N</h2>
          <h4>Harga :</h4>
          <ul>
            <li>Rp 975.000/pax</li>
          </ul>
          <h4>Itinerary :</h4>
          <h5>Hari-1</h5>
          <ul>
            <li>Peserta berkumpul dihotel yang sudah ditentukan untuk melakukan landrover.</li>
            <li>Melakukan landrover lintas alam , air terjun dan menikmati keindahan alam.</li>
            <li>Check in hotel</li>
            <li>Melakukan landrover lintas alam , air terjun dan menikmati keindahan alam.</li>
            <li>Meeting (coffe break).</li>
            <li>Istirahat.</li>
            <li>Gala dinner.</li>
            <li>Free program.</li>
          </ul>
            <h5>Hari-2</h5>
          <ul>
            <li>Breakfast.</li>
            <li>Melanjutkan acara outbond.</li>
            <li>ISOMA.</li>
            <li>Check out hotel.</li>
            <li>Selesai sudah acara dengan Rindi Sigma Sultana.</li>
          </ul>
            <h3>Harga Termasuk :</h3>
          <ol>
            <li>Hotel.</li>
            <li>Outbound.</li>
            <li>Makan Pagi.</li>
            <li>Makan Siang 1x.</li>
            <li>Makan Malam 1x .</li>
            <li>Coffee Break 2x.</li>
            <li>Land Rover.</li>
            <li>Ruang Meeting.</li>
          </ol>          
            <br></br>
          <h2>Meeting + Outbound in Lembang 2D1N</h2>
          <h4>Harga :</h4>
          <ul>
            <li>Rp 850.000/pax</li>
          </ul>
          <h4>Itinerary :</h4>
          <h5>Hari-1</h5>
          <ul>
            <li>Check in hotel.</li>
            <li>Meeting (coffe break).</li>
            <li>Istirahat</li>
            <li>Gala dinner.</li>
            <li>Free program.</li>
          </ul>
            <h5>Hari-2</h5>
          <ul>
            <li>Sarapan.</li>
            <li>Melanjutkan acara outbond.</li>
            <li>ISOMA.</li>
            <li>Check out hotel.</li>
            <li>Selesai sudah acara dengan Rindi Sigma Sultana.</li>
          </ul>
            <h3>Harga Termasuk :</h3>
          <ol>
            <li>Hotel.</li>
            <li>Outbound.</li>
            <li>Makan Pagi.</li>
            <li>Makan Siang 1x.</li>
            <li>Makan Malam 1x .</li>
            <li>Coffee Break 2x.</li>
            <li>Land Rover.</li>
            <li>Ruang Meeting.</li>
          </ol>
          <h3>Harga Tidak Termasuk :</h3>
          <ol>
            <li>Laundry.</li>
            <li>Pengeluaran Pribadi.</li>
            <li>Pengeluaran diluar program.</li>       
          </ol>
        </div>


@elseif(request()->get('detail') == 'live_music')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Live Music Concert Event</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <!-- <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>7 days 6 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Southeast Asia</b> -->
            </div>
          </div>
          <img src="images/eo_mice.png" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">

          <br></br>
          <h4>EO akan menyusun acara mulai dari tanggal konser, tempat, bahkan sampai meminta artis tertentu untuk mengisi acara tersebut.</h4>
          <!-- <h4>Fasilitas :</h4>
          <ul>
            <li>Penetapan Lokasi dan Ruang MICE.</li>
            <li>Perlengkapan Fasilitas MICE.</li>
            <li>Penanganan Transportasi.</li>
            <li>Pelayanan Makanan dan Minuman</li>
            <li>Akomodasi.</li>
            <li>Dokumentasi.</li> -->
        </div>


@elseif(request()->get('detail') == 'city_car')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">City Car</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <!-- <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>7 days 6 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Southeast Asia</b> -->
            </div>
          </div>
          <img src="images/toyota_innova.png" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <br></br>
          <br></br>
          <!-- <h4>Meeting Point : Tempat yg sudah ditentukan</h4> -->
          <ol>
          <h4>Harga :</h4>
          <ul>
            <li>Avanza (5 Seat): Rp1,600,000</li>
            <li>Innova (5 Seat): Rp1,800,000</li>
          </ul>
          <br></br>
          <h5>Fasilitas</h5>
          <ul>
            <li>Full Ac.</li>
            <li>Cup Holder.</li>
            <li>Bottle Holder.</li>
            <li>Read Lamp.</li>
            <li>USB Socket.</li>
            <li>Radio AM/FM.</li>
            <li>Sound System.</li>
            <li>Adjustable Seats.</li>
            <li>Arm Rest.</li>
            <li>Headrest.</li>
          </ul>
          <br></br>
            <h5>Keterangan</h5>
          <ul>
            <li>Tarif yang tecantum merupakan tarif per hari.</li>
            <li>Tarif yang tercantum sudah termasuk :</li>
              <ol type="i">
                <li>BBM</li>
                <li>Tol</li>
                <li>Supir</li>
              </ol>
          </ul>
          <ul>
            <li>dan belum termasuk :</li>
              <ol type="i">
                <li>Tip Supir</li>
                <li>Parkir</li>
              </ol>
          </ul>
        </div>
        
        
@elseif(request()->get('detail') == 'premium_car')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Premeium car</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <!-- <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>7 days 6 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Southeast Asia</b> -->
            </div>
          </div>
          <img src="images/lexus_lm.png" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <br></br>
          <br></br>
          <!-- <h4>Meeting Point : Tempat yg sudah ditentukan</h4> -->
          <ol>
          <h4>Harga :</h4>
          <ul>
            <li>LM Lexus (5 Seat): Rp6,600,000</li>
            <li>Alphard (5 Seat): RP4,600,000</li>
            <li>Fortuner (5 Seat): Rp3,600,000</li>
          </ul>
          <br></br>
          <h5>Fasilitas</h5>
          <ul>
            <li>Full Ac.</li>
            <li>Cup Holder.</li>
            <li>Bottle Holder.</li>
            <li>Read Lamp.</li>
            <li>USB Socket.</li>
            <li>Radio AM/FM.</li>
            <li>Sound System.</li>
            <li>Adjustable Seats.</li>
            <li>Arm Rest.</li>
            <li>Headrest.</li>
            <li>Lumbar Support.</li>
            <li>Seat Upholstery: Leather.</li>
          </ul>
          <br></br>
            <h5>Keterangan</h5>
          <ul>
            <li>Tarif yang tecantum merupakan tarif per hari.</li>
            <li>Tarif yang tercantum sudah termasuk :</li>
              <ol type="i">
                <li>BBM</li>
                <li>Tol</li>
                <li>Supir</li>
              </ol>
          </ul>
          <ul>
            <li>dan belum termasuk :</li>
              <ol type="i">
                <li>Tip Supir</li>
                <li>Parkir</li>
              </ol>
          </ul>
        </div>


@elseif(request()->get('detail') == 'hiace')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Hiace</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <!-- <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>7 days 6 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Southeast Asia</b> -->
            </div>
          </div>
          <img src="images/hiace.PNG" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <br></br>
          <br></br>
          <!-- <h4>Meeting Point : Tempat yg sudah ditentukan</h4> -->
          <ol>
          <h4>Harga :</h4>
          <ul>
            <li>Executive Hiace (8 Seat): Rp4,000,000</li>
            <li>Regular Hiace (14 Seat): Rp2,000,000</li>
          </ul>
          <br></br>
          <h5>Fasilitas</h5>
          <ul>
            <li>Full Ac.</li>
            <li>Exclusive & Regular Class.</li>
            <li>TV.</li>
            <li>DVD Player Karaoke.</li>
            <li>Mic/Karaoke.</li>
            <li>Reclining Seats.</li>
            <li>Charger Plugin.</li>
            <li>Sound System.</li>
          </ul>
          <br></br>
            <h5>Keterangan</h5>
          <ul>
            <li>Tarif yang tecantum merupakan tarif per hari.</li>
            <li>Tarif yang tercantum sudah termasuk :</li>
              <ol type="i">
                <li>BBM</li>
                <li>Tol</li>
                <li>Supir</li>
              </ol>
          </ul>
          <ul>
            <li>dan belum termasuk :</li>
              <ol type="i">
                <li>Tip Supir</li>
                <li>Parkir</li>
              </ol>
          </ul>
        </div>


@elseif(request()->get('detail') == 'bus')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-lg-7">
          <h2 class="section-title mb-4">Bus Pariwisata</h2>
          <div class="row text-black-50 mb-3">
            <div class="col-6">
              <!-- <p class="m-0"><i class="icon-clock-o"></i> Duration</p>
              <b>7 days 6 Nights</b>
            </div>
            <div class="col-6">
              <p class="m-0"><i class="icon-add_location"></i> Lokasi</p>
              <b>Southeast Asia</b> -->
            </div>
          </div>
          <img src="images/bus.PNG" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
          <br></br>
          <br></br>
          <!-- <h4>Meeting Point : Tempat yg sudah ditentukan</h4> -->
          <ol>
          <h4>Harga :</h4>
          <ul>
            <li>31 Seat: Rp3,100,000</li>
            <li>35 Seat: Rp3,300,000</li>
            <li>59 Seat: Rp3,600,000</li>
            <li>52/59 Seat HDD: Rp4,300,000</li>
          </ul>
          <br></br>
          <h5>Fasilitas</h5>
          <ul>
            <li>Full Ac.</li>
            <li>TV.</li>
            <li>DVD Player.</li>
            <li>Karaoke.</li>
            <li>Reaclining Seats.</li>
            <li>Hand Rest.</li>
            <li>Charger Plugin.</li>
            <li>Sound System.</li>
            <li>Microphone.</li>
            <li>Reading Lamp.</li>
          </ul>
          <br></br>
            <h5>Keterangan</h5>
          <ul>
            <li>Tarif yang tecantum merupakan tarif per hari.</li>
            <li>Tarif yang tercantum sudah termasuk :</li>
              <ol type="i">
                <li>BBM</li>
                <li>Tol</li>
                <li>Supir</li>
              </ol>
          </ul>
          <ul>
            <li>dan belum termasuk :</li>
              <ol type="i">
                <li>Tip Supir</li>
                <li>Parkir</li>
              </ol>
          </ul>
        </div>
        
        
@endif

        <!-- Sidebar -->
        <div class="col-lg-5 pl-lg-5 ml-auto">
          <div class="widget-sidebar">
            <h2 class="section-title mb-4">Hubungi Kami</h2>
            <p><a href="https://wa.me/+6282158751381?text=Halo Admin Rindi, Saya mau pesan 4 DAY LABUAN BAJO" target="_blank" class="btn btn-primary">Pesan Sekarang</a></p>
          </div>

          <div.widget-sideba>
          <h2 class="section-title mb-4 mt-5">Tour Menarik Lainnya</h2>
          
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