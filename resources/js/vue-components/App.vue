<template>
	
	<div class="flex flex-col h-screen">
		<header class="h-24 bg-green-200 rounded-b-lg shadow">
			<a href="https://github.com/JayTee133/ResumeSite">
				<h1 class="text-center text-4xl pt-4 hover:text-blue-700">My Resume Site</h1>
			</a>
			<div class="text-center text-lg">
				<router-link class="hover:text-blue-600" :to="{ name: 'aboutme'}"> About Me</router-link> |
				<router-link class="hover:text-blue-600" :to="{ name: 'home'}"> Home </router-link> |
				<router-link class="hover:text-blue-600" :to="{ name: 'aboutsite'}"> About Site </router-link>
			</div>
		</header>
	<!-- style="background-image: url(/img/gradient-bg.svg);" -->

		<div id="content" class="flex-auto overflow-auto" style="background-image: url(/img/backg.svg); background-size:100% 100%;">
			<transition :enter-active-class="dynEnter" :leave-active-class="dynExit" mode="out-in">
				<router-view></router-view>
			</transition>
		</div>
	

		<Footer></Footer>	
	</div>
	
</template>


<script>
	import Footer from './Footer.vue'
	export default {
		data() {
			return {
				dynEnter: 'animated fadeIn',
				dynExit: 'animated fadeOut',
			}
			
		},
		components: {
			Footer
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