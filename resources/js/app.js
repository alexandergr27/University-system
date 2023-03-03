import './bootstrap';
import { createApp } from 'vue';
import StudentComponent from './components/StudentComponent.vue';

const app = createApp({});
app.component('student-component', StudentComponent);
app.mount('#app');

