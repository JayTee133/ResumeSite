<template>
	<div>
		<div class="text-center text-2xl pt-3">About This Website</div>

		<div v-if='isLoading'>
			Loading
		</div>

		<div v-if='error'>
			{{ error }}
		</div>

		<div v-if='content' class="bg-gray-100 mt-2 shadow-lg rounded-lg">
			<div v-for="entry in content">
				<p class="pl-4 pt-2"> {{ entry.name }} </p>
				<p class="text-blue-800 px-4 pb-3 mt-1">  {{ entry.content }} </p>
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