<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Grupo Victorius</title>
	<link rel="icon" type="image/png" href="{{ asset('images/logos/logo nuevo letra blanca.ico') }}">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('page/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="{{ asset('page/css/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('page/css/style.css') }}" rel="stylesheet" />
	<link href="{{ asset('page/css/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('page/css/black.css') }}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('page/js/pace.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body data-spy="scroll" data-target="#header" data-offset="51">
	<!-- begin #page-container -->
	<div id="app">
		<app-home></app-home>
	</div>
	<!-- end #page-container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('page/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('page/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('page/js/js.cookie.js') }}"></script>
	<script src="{{ asset('page/js/scrollMonitor.js') }}"></script>
	<script src="{{ asset('page/js/jquery.paroller.min.js') }}"></script>
	<script src="{{ asset('page/js/apps.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>    
		$(document).ready(function() {
			App.init();

			$('.customer-logos').slick({
			        slidesToShow: 6,
			        slidesToScroll: 1,
			        autoplay: true,
			        autoplaySpeed: 1500,
			        arrows: false,
			        dots: false,
			        pauseOnHover: false,
			        responsive: [{
			            breakpoint: 768,
			            settings: {
			                slidesToShow: 4
			            }
			        }, {
			            breakpoint: 520,
			            settings: {
			                slidesToShow: 3
			            }
			        }]
			    });
		});
	</script>
</body>
</html>
