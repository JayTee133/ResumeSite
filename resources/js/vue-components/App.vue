<template>
	<div>
		<div class="text-center text-4xl mt-4">My Resume Site</div>
		<div class="text-center text-lg">
			<router-link :to="{ name: 'aboutme'}"> About Me | </router-link>
			<router-link :to="{ name: 'home'}"> Home |   </router-link>
			<router-link :to="{ name: 'aboutsite'}"> About Site </router-link>
		</div>
	

		<div>
			<router-view></router-view>
		</div>
	</div>
</template>


<script>
	export default {}
</script>