<template>
  <div>
    <h4>List of users</h4>
    <div class="out-margin" v-if="is_show">
      
      <!-- table -->
      <table class="table ">
        <tr>
          <th><input type="checkbox" v-on:click.prevent="selectAll" v-model="allSelected"></th>
          <th>Name</th>
        </tr>
        <tr v-for="user in users">
          <td><input type="checkbox" v-model="userIds" value="user.id"></td>
          <td>{{ user.name }}</td>
        </tr>
      </table>
      
      <span>Selected IDs {{ userIDs | json }}</span>
      
      <!-- user-item -->
      <user-item></user-item>
      
    </div>  
  </div>
</template>

<script>
import ListItem from './ListItem.vue';

export default {
  name: 'list-user',
  data: function() {
    return {
      users: [
        {"id": 1, "name": "Alexander Bob"},
        {"id": 2, "name": "Alex Blanc"},
        {"id": 3, "name": "Blanc Fred"},
        {"id": 4, "name": "Credan Frank"},
      ],
      selected: [],
      allSelected: false,
      userIDs: [],
      is_show: true,
    }
  },
  mounted() {
    this.is_show = true;
    
    let vm = this;
    
    axios.get('/api/v2.1/users')
      .then(function(response){
        console.log('then-response', response.data);
        vm.users = response.data.list;
      })
      .catch(function(error){
        console.log('catch', 'Error in catch!')
      });
  },
  methods: {
    Delete() {
      // TODO delete
    },
    selectAll() {
      // 
      this.userIDs = [];
      
      if (!this.allSelected) {
        for (user in this.users) {
          this.userIDs.push(this.users[user].id);
        }
      }
      
      // or this 
      this.selected = [];
      for (user in this.users) {
          this.selected.push(this.users[user].id);
      }
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

