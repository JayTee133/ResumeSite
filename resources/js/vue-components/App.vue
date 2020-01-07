<template>
	<div>
		<div class="text-center text-4xl mt-4">My Resume Site</div>
		<div class="text-center text-lg">
			<router-link :to="{ name: 'aboutme'}"> About Me | </router-link>
			<router-link :to="{ name: 'home'}"> Home |   </router-link>
			<router-link :to="{ name: 'aboutsite'}"> About Site </router-link>
		</div>
	

		<div>
			<transition :enter-active-class="dynEnter" :leave-active-class="dynExit" mode="out-in">
				<router-view></router-view>
			</transition>
		</div>
	</div>
</template>


<script>
	export default {
		data() {
			return {
				dynEnter: 'animated fadeIn',
				dynExit: 'animated fadeOut',
			}
		},
		watch: {
			'$route' (to, from){
				if(from.path === "/aboutsite") {
					this.dynEnter = 'animated slideInLeft'
					this.dynExit = 'animated slideOutRight'
				} else if (from.path === "/aboutme"){
					this.dynEnter = 'animated slideInRight'
					this.dynExit = 'animated slideOutLeft'
				} else if (from.path === "/" && to.path === '/aboutme'){
					this.dynEnter = 'animated slideInLeft'
					this.dynExit = 'animated slideOutRight'
				} else if (from.path === "/" && to.path === '/aboutsite'){
					this.dynEnter = 'animated slideInRight'
					this.dynExit = 'animated slideOutLeft'
				} else {
					this.dynEnter = 'animated fadeIn'
					this.dynExit = 'animated fadeOut'
				}
			}
		}
		
	}
</script>