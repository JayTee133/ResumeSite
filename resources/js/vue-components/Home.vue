<template>
	<div class="text-center">
	
		<div v-if='isLoading'>
			Loading....
		</div>

		<div v-if='error'>
			{{ error }}
		</div>

		<div v-if='content'>
			<div v-for="entry in content">
				<div class="font-sans sm:text-2xl md:mx-48 my-24 bg-gray-200 p-2 sm:p-8 rounded-lg shadow-md" v-html="entry.content"> </div>
			</div>
		</div>
		
		<!-- <img class="max-w-xl object-center" src="/img/Tour_Eiffel_Wikimedia_Commons_(cropped).jpg"> -->
	
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
				axios.get('/api/home/content')
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