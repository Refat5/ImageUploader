<template>
	<div>
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
				<div class="card shadow p-3 mb-5 bg-white rounded">
					<h4 class="text-center text-bold"> Add Image

					</h4>
					<hr>
					<div class="card-body">
						<div v-if="!message">
							<div class="preview_image">
								<img :src="image_url" v-if="image_url" height="200" alt="Preview">
							</div>
						</div>
						<div v-else>
							<p class="text-center bg-green">{{ message }}</p>
						</div>
						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">Image Url</label>
							<div class="col-md-6">
								<input type="text" class="form-control" v-model="image_url" placeholder="Enter image URL" @input="previewImage">
							</div>
							<button class="btn btn-success" @click="uploadImage">Upload</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</template>
  
  
  <script>
import axios from "axios";

export default {
	data() {
		return {
			image_url: "",
			message: "",
		};
	},
	methods: {
		previewImage() {},
		uploadImage() {
			if (this.image_url) {
				axios
					.post("/api/image-upload", { image_url: this.image_url })
					.then((response) => {
						this.message = response.data.message;
						this.image_url = "";
						this.$router.push("/image-list");
					})
					.catch((error) => {
						console.log(error.response.data);
					});
			}
		},
	},
};
</script>
  