import '../sass/app.scss'
import * as bootstrap from 'bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { createPinia } from "pinia";

const pinia = createPinia();
InertiaProgress.init()
createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
        .use(plugin)
        .use(pinia)
        .mount(el);
  },
})