<template>
  <form @submit.prevent="submit">
  
        <div class="form-group">
            <label for="id-title">Title</label>
            <!-- input id="id-title2" type="text" name="title" value="" placeholder="some text" / -->
            <input id="id-title" name="title" v-model="fields.title" class="form-control" placeholder="some text" />
            <div v-if="errors && errors.title" class="text-danger">{{ errors.title[0] }}</div>
        </div>
        
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" v-model="fields.email" />
            <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
        </div>
        
        <button type="submit" class="btn btn-primary">Send</button>

        <div v-if="success" class="alert alert-success mt3">
            Message sent! 
        </div>
        
    </form>
</template>

<script>
export default {
  data() {
    return {
      fields: {},
      errors: {},
    }
  },
  methods: {
    submit() {
      this.errors = {};
      axios.post('/vue-todo-submit', this.fields).then(response => {
        alert('Nessage sent!');
      }).catch(error => {
        if (error.response.status === 422) {
          this.errors = error.response.data.errors || {};
        }
      });
    },
  },
}
</script>
