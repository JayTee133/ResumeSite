<template>
	
	<div class="flex flex-col h-screen">
		<header class="h-24 bg-green-200 text-center rounded-b-lg shadow">
			<a href="https://github.com/JayTee133/ResumeSite">
				<p class="inline-block text-4xl mt-3 hover:text-blue-700">My Resume Site</p>
			</a>
			<div class="text-center text-lg">
				<router-link class="hover:text-blue-600" :to="{ name: 'aboutme'}"> About Me</router-link> |
				<router-link class="hover:text-blue-600" :to="{ name: 'home'}"> Home </router-link> |
				<router-link class="hover:text-blue-600" :to="{ name: 'aboutsite'}"> About Site </router-link>
			</div>
		</header>

		<div id="content" class="flex-auto flex flex-col items-center overflow-auto" style="background-image: url(/img/backg.svg); background-size:100% 100%;">
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
					this.dynEnter = 'animated fadeInLeft'
					this.dynExit = 'animated fadeOutRight'
				} else if (from.path === "/aboutme"){
					this.dynEnter = 'animated fadeInRight'
					this.dynExit = 'animated fadeOutLeft'
				} else if (from.path === "/" && to.path === '/aboutme'){
					this.dynEnter = 'animated fadeInLeft'
					this.dynExit = 'animated fadeOutRight'
				} else if (from.path === "/" && to.path === '/aboutsite'){
					this.dynEnter = 'animated fadeInRight'
					this.dynExit = 'animated fadeOutLeft'
				} else {
					this.dynEnter = 'animated fadeIn'
					this.dynExit = 'animated fadeOut'
				}
			}
		}
		
	}
</script>