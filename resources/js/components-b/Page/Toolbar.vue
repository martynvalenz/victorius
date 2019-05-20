<template>
	<div>
	    <b-navbar toggleable="lg" type="dark" variant="dark" fixed-top>
	        <b-navbar-brand href="/"><img src="/images/logos/pre copeo.png" style="height: 35px; width: auto" alt=""></b-navbar-brand>
	        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
	        <b-collapse id="nav-collapse" is-nav>
	            <!-- <b-navbar-nav>
	                <b-nav-item href="#">Link</b-nav-item>
	                <b-nav-item href="#" disabled>Disabled</b-nav-item>
	            </b-navbar-nav> -->
	            <!-- Right aligned nav items -->
	            <b-navbar-nav class="ml-auto">
	                <!-- <b-nav-form>
	                    <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
	                    <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
	                </b-nav-form> -->
	                <b-nav-item-dropdown text="TORNEOS" left>
	                    <b-dropdown-item href="#"><i class="fas fa-football-ball"></i> Tocho</b-dropdown-item>
	                    <b-dropdown-item href="#"><i class="fas fa-futbol"></i> Fútbol</b-dropdown-item>
	                </b-nav-item-dropdown>
	                <b-nav-item href="#">ESTADÍSTICAS</b-nav-item>
	                <b-nav-item href="#">FANTASY SPORTS</b-nav-item>
	                <b-nav-item href="#">PATROCINADORES</b-nav-item>
	                <!-- <b-nav-item href="#">NOSOTROS</b-nav-item> -->
	                <b-nav-item href="#">CONTACTO</b-nav-item>
	                <b-button size="sm" class="my-2 my-sm-0 btn-warning"><i class="fas fa-lock"></i> <b>REGISTRO</b></b-button>
	                <b-nav-item href="#"><i class="fas fa-user"></i> LOGIN</b-nav-item>
	                <b-nav-item-dropdown right hidden>
	                    <!-- Using 'button-content' slot -->
	                    <template slot="button-content">USUARIO</template>
	                    <b-dropdown-item href="#"><i class="fas fa-user"></i> Perfil</b-dropdown-item>
	                    <b-dropdown-item href="#"><i class="far fa-id-badge"></i> Cuenta</b-dropdown-item>
	                    <b-dropdown-item href="#"><i class="fas fa-power-off"></i> Cerrar Sesión</b-dropdown-item>
	                </b-nav-item-dropdown>
	            </b-navbar-nav>
	        </b-collapse>
	    </b-navbar>
	</div>
</template>

<script>
	export default{

	};
</script>

<style>
	.register b
	{
		color: #D8B035;
	}

	b-nav-item
	{
		padding-left: 3em;
		padding-right: 3em;
	}
</style>