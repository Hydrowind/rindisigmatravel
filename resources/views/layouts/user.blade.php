<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

@php 
	use App\Models\Configuration; 
	$config = Configuration::all();

	foreach($config as $c){
		switch($c->name){
					case Configuration::WHATSAPP    : $whatsapp = $c->value; break;
					case Configuration::HEADSCRIPT  : $headscript = $c->value; break;
					case Configuration::BODYSCRIPT  : $bodyscript = $c->value; break;
					default: break;
			}
	}
@endphp

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="/favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="/fonts/icomoon/style.css">
	<link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="/css/daterangepicker.css">
	<link rel="stylesheet" href="/css/aos.css">
	<link rel="stylesheet" href="/css/style.css">

	<!-- Summernote CSS -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

	<!-- Add Bootstrap 5 CSS and JS links -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<title>{{ env('APP_NAME', 'Rindi Sigma') }}</title>

	@php echo $headscript; @endphp
</head>

<body>
  @include('components.navbar')
  @yield('hero')

  <!-- Main -->
  <main id="main" style="min-height: 100vh">
    @yield('content')

		<!-- Whatsapp -->
		<a id="whatsapp-float" class="btn btn-primary font-weight-bold" href="{{ 'https://wa.me/' . $whatsapp }}" target="_blank"><span class="icon-whatsapp"></span> Reservasi Sekarang</a>
  </main>

  @include('components.footer')

  <!-- Loader & Spinner -->
  <div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
  
  <!-- Javascript -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/js/jquery-3.4.1.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.animateNumber.min.js"></script>
	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/js/jquery.fancybox.min.js"></script>
	<script src="/js/aos.js"></script>
	<script src="/js/moment.min.js"></script>
	<script src="/js/daterangepicker.js"></script>

	<script src="/js/typed.js"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: [" DUFAN."," YOGYAKARTA."," LABUAN BAJO.", " BALI.", " Southeast Asia."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<!-- Scrolling Navbar -->
	<script>
		$(function () {
			$(document).scroll(function () {
				var $nav = $(".site-nav");
				$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
			});
		});
	</script>

	

	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<script src="/js/custom.js"></script>

	<!-- Summernote JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

	@php echo $bodyscript @endphp
</body>

</html>