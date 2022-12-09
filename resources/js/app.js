import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import AddToCart from './components/AddToCart.vue';  

window.Alpine = Alpine;

Alpine.start();

const app = createApp();

app.component('AddToCart', AddToCart);

app.mount('#app'); 