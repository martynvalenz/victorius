<template>
	<div id="header" class="header navbar navbar-inverse navbar-fixed-top">
		<!-- begin container -->
		<div class="container">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/" class="navbar-brand">
					<img src="/images/logos/pre copeo.png" style="height: 40px; width: auto" alt="">
				</a>
			</div>
			<!-- end navbar-header -->
			<!-- begin navbar-collapse -->
			<div class="collapse navbar-collapse" id="header-navbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item dropdown">
						<a class="nav-link active" data-click="scroll-to-target" data-toggle="dropdown">TORNEOS <b class="caret"></b></a>
						<div class="dropdown-menu dropdown-menu-left animated fadeInDown">
							<a class="dropdown-item" href="index.html">Tocho</a>
							<a class="dropdown-item" href="index_inverse_header.html">Futbol</a>
						</div>
					</li>
					<li class="nav-item"><router-link to="/estadisticas"><a class="nav-link" data-click="scroll-to-target" >ESTADÍSTICAS</a></router-link></li>
					<li class="nav-item"><a class="nav-link" href="#about" data-click="scroll-to-target">FANTASY SPORTS</a></li>
					<li class="nav-item"><a class="nav-link" href="#patrocinadores" data-click="scroll-to-target">PATROCINADORES</a></li>
					<li class="nav-item"><a class="nav-link" href="#service" data-click="scroll-to-target">NOSOTROS</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact" data-click="scroll-to-target">CONTACTO</a></li>
					<li class="nav-item"><a class="nav-link register" style="color: #D3A72A !important" href="#service" data-click="scroll-to-target">REGISTRO</a></li>
					<li class="nav-item"><a class="nav-link" href="#service" data-click="scroll-to-target">LOGIN <i class="fas fa-user"></i></a></li>
				</ul>
			</div>
			<!-- end navbar-collapse -->
		</div>
		<!-- end container -->
	</div>
</template>

<script>
	export default{

	};
</script>

<style>
	a{
		text-decoration: none;
	}
	a:hover{
		text-decoration: none;
	}
</style>