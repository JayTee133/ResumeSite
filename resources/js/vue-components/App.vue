<template>
	<div>
		<h1>My Resume Site</h1>
		<span>
			<router-link :to="{ name: 'home'}"> Home | </router-link>
			<router-link :to="{ name: 'abtMe'}"> About Me | </router-link>
			<router-link :to="{ name: 'abtSite'}"> About Site | </router-link>
		</span>
	

		<div class="container">
			<router-view></router-view>
		</div>
	</div>
</template>


<script>
	export default {}
</script>