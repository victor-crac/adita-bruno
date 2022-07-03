import {
    InertiaProgress
} from '@inertiajs/progress';

import { createApp, h } from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3'
import Layout from "./Partials/Layout"
import FlashMessages from "./Partials/FlashMessages.vue"

import { Ziggy } from "./ziggy";

createInertiaApp({
  resolve: name => {
      let page = require(`./Pages/${name}`).default

      if(page.layout === undefined){
        page.layout = Layout;
      }

      return page;
},
  setup({ el, App, props, plugin }) {
    const vueApp = createApp({ render: () => h(App, props) });
    vueApp.config.globalProperties.$route = route

    vueApp.use(plugin)
      .use(Ziggy)
      .component("Link", Link)
      .component("Head", Head)
      .component("FlashMessages", FlashMessages)
      .mount(el);
  },
  title: title => "Adita|"+ title
})

InertiaProgress.init({
    color: "red",
    showSpinner : true
});


