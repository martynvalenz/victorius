<template>
	<div id="page-container" class="fade">
		<toolbar></toolbar>
			<router-view></router-view>
		<app-footer></app-footer>
	</div>
</template>

<script>
	import Toolbar from './Page/Toolbar'
	import AppFooter from './Page/AppFooter'

	export default{
		components: {Toolbar, AppFooter}
	};
</script>
<style>

</style>