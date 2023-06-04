<template>
	<div>
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
				<div class="card shadow p-3 mb-5 bg-white rounded">
					<h4 class="text-center text-bold"> Add Image

					</h4>
					<hr>
					<div class="card-body">
						<div class="preview_image">
							<img :src="image_url || default_image" height="250" alt="Preview">
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-3 col-form-label text-md-right">Image Url</label>
							<div class="col-md-6">
								<input type="text" class="form-control" v-model="image_url" placeholder="Enter image URL">
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
			default_image: "/error.png",
		};
	},
	methods: {
		uploadImage() {
			if (this.image_url) {
				axios
					.post("/api/image-upload", { image_url: this.image_url })
					.then((response) => {
						toastr.success(response.data.message);
						this.image_url = "";
						setTimeout(() => {
							window.location.href = "/image";
						}, 1000);
					})
					.catch((error) => {
						console.log(error.response.data.message);
						toastr.error(error.response.data.message);
						console.log(error.response.data);
					});
			}
		},
	},
};
</script>
  