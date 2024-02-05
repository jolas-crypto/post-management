import IndexPost from "./components/posts/index.vue";
import IndexPosted from "./components/posted/index.vue";
import IndexArchived from "./components/archive/index.vue";

import { createApp } from "vue";

const app = createApp({});

app.component('post-index', IndexPost)
app.component('posted-index', IndexPosted)
app.component('archived-index', IndexArchived)

app.mount('#app');
