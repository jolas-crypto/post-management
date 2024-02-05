import IndexPost from "./components/posts/index.vue";

import { createApp } from "vue";

const app = createApp({});

app.component('post-index', IndexPost)

app.mount('#app');
