<template>
	<div id="page-container">
		<toolbar></toolbar>
			<router-view></router-view>
		<contacto></contacto>
		<app-footer></app-footer>
	</div>
</template>

<script>
	import Toolbar from './Page/Toolbar'
	import Contacto from './Page/Contacto'
	import AppFooter from './Page/AppFooter'

	export default{
		components: {Toolbar, Contacto, AppFooter}
	};
</script>
<style>
	.centered{
		text-align: center;
	}
</style>