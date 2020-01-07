<template>
	<div>
		<div class="text-center text-2xl mt-5">Welcome!</div>
	
		<div v-if='isLoading'>
			Loading
		</div>

		<div v-if='error'>
			{{ error }}
		</div>

		<div v-if='content'>
			<div v-for="entry in content">
				<h3> {{ entry.name }} </h3>
				<p>  {{ entry.content }} </p>
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