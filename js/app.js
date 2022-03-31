//
//require('.bootstrap');

//window.Vue = require('vue').default;

// global registration component 
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// local registration component
//import MyComponent from "./components/MyComponent.vue";
//import UserInfoComponent from "./components/user/UserInfoComponent.vue";
//import ListUsers from "./components/user/ListUsers.vue";
import TablaComponent from "./components/TablaComponent.vue";

const app = new Vue ({
  el: '#app',
  components: {
    //'my-componen': MyComponent,
    //'user-info': UserInfoComponent,
    //'list-users': ListUsers,
    'tabla-component': TablaComponent,
  }
});
