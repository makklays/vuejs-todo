<template>
  <div>
    <form action="#" method="post" >
      <label for="id_title">Title</label>
      <input id="id_title" v-model="title" /> <br/>
      
      <label for="id_value">Value</label>
      <input id="id_value" v-model="value" /> <br/>
      
      <input type="button" value="" />
    </form>
    
    <div v-if="is_success" class="alert alert-success">
      Send data successfully!
    </div>
  </div>
</template>

<script>
export default {
  name: 'some-form',
  data() {
    return {
      title: null,
      value: null,
      is_success: false,
    }
  },
  methods: {
    send() {
      // send
      let vm = this;
      
      vm.is_success = true;
    }
  }
}
<script>
