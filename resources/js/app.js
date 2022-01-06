require('./bootstrap');

import { createApp } from 'vue';

import task from './components/Form.vue';
import forms from './components/myForms.vue';

const app = createApp({});
app.component('task-form', task);
app.component('task-forms', forms);
app.mount('#vue-form');