//
require('.bootstrap');

window.Vue = require('vue').default;

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// components
import MyComponent from "./components/MyComponent.vue";
import UserInfoComponent from "./components/user/UserInfoComponent.vue";
import ListUsers from "./components/user/ListUsers.vue",

const app = new Vue ({
  el: '#app',
  components: {
    'my-componen': MyComponent,
    'user-info': UserInfoComponent,
    'list-users': ListUsers,
  }
});
