<template>
	<div class="w-11/12 sm:w-3/4 xl:w-1/2 break-words">
		<div class="text-center text-2xl mt-2">More About Me</div>

		<div v-if='isLoading'>
			Loading
		</div>

		<div v-if='error'>
			{{ error }}
		</div>

		<div v-if='content' class="bg-gray-100 mt-2 shadow-lg rounded-lg">
			<div v-for="entry in content">
				<h3 class="pl-4 pt-2 text-xl"> {{ entry.name }} </h3>
				<p class="text-lg text-blue-800 px-4 pb-3 mt-1" v-html="entry.content"> </p>
			</div>
		</div>

	</div>

</template>


<script>
	import axios from 'axios';

	export default {
		data(){
			return {
				content: null,
				error: null,
				isLoading: false
			};
		},

		created() {
			this.getContent();
		},

		methods: {
			getContent(){
				this.isLoading = true;
				axios.get('/api/aboutme/content')
					 .then(response => {
					 	this.content = response.data;
					 	this.isLoading = false;
					 }).catch(error => {
					 	this.error = 'Sorry, an error occured while fetching data!'
					 	this.isLoading = false;
					 });
			}
		}

	}


</script>