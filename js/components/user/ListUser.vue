<template>
  <div>
    <div class="out-margin" v-if="is_show">
      <list-item v-for="item in list" v-bind:key="item.id"></user-item>
    </div>  
  </div>
</template>

<script>
import ListItem from './ListItem.vue';

export default {
  name: 'list-user',
  data: function() {
    return {
      list: null,
      is_show: true,
    }
  },
  mounted() {
    this.is_show = true;
    
    let vm = this;
    
    axios.get('/api/v2.1/users')
      .then(function(response){
        console.log('then-response', response.data);
        vm.list = response.data.list;
      })
      .catch(function(error){
        console.log('catch', 'Error in catch!')
      });
  },
  methods: {
    Delete() {
      // TODO delete
    },
    SelectAll() {
      // TODO select all items
    }
  },
  components: {
    'list-item': ListItem,
  }
}
</script>

<style>
.out-margin {
  margin-left: 10px;
}

@import './css/styles/main.css';
</style>
