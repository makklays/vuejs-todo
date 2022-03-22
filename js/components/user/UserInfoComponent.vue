<template>
  <div class="out-margin">
    <div v-if="!is_updating">
      <div>Login: {{ login }}</div>
      <div>E-mail: {{ email }}</div>
      <div>Currency: {{ currency }}</div>
      <div>Money: {{ money }}</div>

      <button name="update-data" v-on:click.prevent="updateData" >Update</button>
    </div>
    <div v-else>
      <i>Updating...</i>
    </div>
  </div>
</template>

<script>
export default {
  name: 'user-info',
  data: function() {
    return {
      login: null,
      email: null,
      currency: 'USD',
      money: '0.00',
      is_updating: false,
    }
  },
  mounted() {
    console.log('mounted', 'This is mounted!');
    this.login = 'User-11',
    this.email = 'user11@gmail.com',
    this.currency = 'EUR',
    this.money = '500.01',
  },
  methods: {
    updateData() {
      
      let vm = this;
      
      axios.get('/api/v1.0.3/user/11/')
        .then(function(response){
          vm.is_updating = true;
          console.log('response', response.data);
          vm.login = response.data.login;
          vm.email = response.data.email;
          vm.currency = response.data.currency;
          vm.money = response.data.money;
          console.log('response', 'Updated datas!');
          vm.is_updating = false;
        })
        .catch(function(error){
          console.log('catch', 'Erro in catch!');
        });
    }
  }
}
</script>

<style>
.out-margin {
  margin-left: 10px;
}
</style>
