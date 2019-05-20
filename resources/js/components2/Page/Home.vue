<template>
	
	<div>
		<!-- begin #home -->
		<div id="home" class="content has-bg home">
			<!-- begin content-bg -->
			<div class="content-bg" style="background-image: url('/images/slider/tocho banner.jpg');" 
				data-paroller="true" 
				data-paroller-factor="0.5"
				data-paroller-factor-xs="0.25">
			</div>
			<!-- end content-bg -->
			<!-- begin container -->
			<div class="container home-content">
				<h1 style="text-shadow: 1px 2px 3px #666;">Bienvenidos a Victorius</h1>
				<h3 style="text-shadow: 1px 2px 3px #666;">FLAG FOOTBALL SOCCER</h3>
				<!-- <p>
					We have created a multi-purpose theme that take the form of One-Page or Multi-Page Version.<br />
					Use our <a href="#">theme panel</a> to select your favorite theme color.
				</p> -->
				<a href="#torneos" data-click="scroll-to-target" class="btn btn-inverse">Ver Más <i class="fas fa-arrow-down"></i></a> <a href="#" class="btn btn-theme">Registro <i class="fas fa-user"></i></a>
			</div>
			<!-- end container -->
		</div>
		<!-- end #home -->

		
		
		<!-- begin #about -->
		<div id="torneos" class="content bg-gold" data-scrollview="true">
			<!-- begin container -->
			<div class="container" data-animation="true" data-animation-type="fadeInDown">
				<h2 class="content-title">Torneos</h2>
				<h4 class="content-desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
					sed bibendum turpis luctus eget
				</h4>

				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<img src="/images/logos/logo nuevo letra blanca.png" alt="Tocho" style="height:250px">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<h5 style="color: white">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Vestibulum posuere augue eget ante porttitor fringilla. 
							Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
							non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
							Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
						</h5>
						<button class="btn btn-inverse">Ver más</button>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<img src="/images/page/silueta-tocho.png" alt="Tocho" style="height:250px">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<img src="/images/logos/pre-copeo-soccer.png" alt="Soccer" style="height:250px">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<h5 style="color: white">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Vestibulum posuere augue eget ante porttitor fringilla. 
							Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
							non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
							Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
						</h5>
						<button class="btn btn-inverse">Ver más</button>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<img src="/images/page/soccer-player.png" alt="Tocho" style="height:250px">
					</div>
				</div>
			</div>
			<!-- end container -->
		</div>

		<div id="aplicaciones" class="content" style="background-color: black">
			<div class="container" data-animation="true" data-animation-type="fadeInDown">
				<h2 class="content-title" style="color: white">Descarga Nuestra App</h2>
				<h4 class="content-desc" style="color: white">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</h4>
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img src="/images/badges/google-play-badge2.png" alt="Google play" class="centered" style="height: 80px; width: auto;" @click="MensajeDescarga">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img src="/images/badges/app-store-badge.png" alt="Google play" class="centered" style="height: 80px; width: auto;" @click="MensajeDescarga">
					</div>
				</div>
			</div>
		</div>

		<div id="patrocinadores" class="content bg-grey-transparent-6" data-scrollview="true">
			<div class="container" data-animation="true" data-animation-type="fadeInDown">
				<h2 class="content-title">Patrocinadores</h2>
				<h4 class="content-desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
					sed bibendum turpis luctus eget
				</h4>

				<section class="customer-logos slider">
					<div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
					<div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
					<div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
					<div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
					<div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
					<div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
					<div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
					<div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
					<div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
				</section>
			</div>
		</div>	
	</div>
</template>

<script>
	export default{
		methods:{
			MensajeDescarga(){
				alert('Pronto estará disponible.');
			}
		},
	};
</script>

<style>
	.centered {
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
	  width: 50%;
	}
</style>