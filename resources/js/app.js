import "./bootstrap";

import ImageUploader from "./components/ImageUploader.vue";
import { createApp } from "vue";

const app = createApp(ImageUploader);

app.mount("#app");
