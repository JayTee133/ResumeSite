<template>
	<div>
		<div class="text-center text-2xl pt-3">About This Website</div>

		<div v-if='isLoading'>
			Loading
		</div>

		<div v-if='error'>
			{{ error }}
		</div>

		<div v-if='content'>
			<div v-for="entry in content">
				<h3> {{ entry.name }} </h3>
				<p class="block text-blue-800 px-4 py-2 mt-2">  {{ entry.content }} </p>
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
				axios.get('/api/aboutsite/content')
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