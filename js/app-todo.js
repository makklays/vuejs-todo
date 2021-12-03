/*const todos = [
    {id: 1, title: "todo1", done: false},
    {id: 2, title: "todo2", done: true},
    {id: 3, title: "todo3", done: false},
    {id: 4, title: "todo4", done: true},
    {id: 5, title: "todo5", done: false},
    {id: 6, title: "todo6", done: true},
    {id: 7, title: "todo7", done: true},
];*/

Vue.component('todo-list', {
    props: ['id', 'title', 'done', 'item'],
    template: `<div class="todo-item">
                 <div class="item-id">#{{ id }}</div>
                 <div class="">
                    <input type="text" v-bind:name="id" v-bind:value="title" class="item-title form-control" />
                 </div>
                 <div class="form-check form-switch">
                    <input type="checkbox" v-bind:checked="done" role="switch" class="item-check form-check-input" />
                 </div>
               </div>`
});

var app = new Vue({
    el: '#app',
    data: {
        json: null /*todos [
            {id: 1, title: "todo1", done: false},
            {id: 2, title: "todo2", done: true},
            {id: 3, title: "todo3", done: false},
            {id: 4, title: "todo4", done: true},
            {id: 5, title: "todo5", done: false},
            {id: 6, title: "todo6", done: true},
            {id: 7, title: "todo7", done: true},
        ]*/
    }
});
$.getJSON('https://makklays.github.io/vuejs-todo/todos.json', function (json) {
    console.log(json);
    app.json = json;
    console.log(app.json);
});

