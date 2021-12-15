require('./bootstrap');

window.Vue = require('vue');

Vue.component('form-todo', require('./components/FormTodo.vue'));

const app = new Vue({
  el: '#app',
});
