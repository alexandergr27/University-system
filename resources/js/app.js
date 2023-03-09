import './bootstrap';
import { createApp } from 'vue';
import StudentComponent from './components/StudentComponent.vue';
import MenuComponent from './components/MenuComponent.vue';

const app = createApp({});
app.component('student-component', StudentComponent);
app.component('menu-component', MenuComponent)
app.mount('#app');

