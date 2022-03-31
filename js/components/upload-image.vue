/* Author: Alexander Kuziv      */
/* E-mail: hola.kuziv@gmail.com */
<template>
  <div class="mi-upload-file">
    <div v-if="!image">
      <h2>Select an Image</h2>
      <input type="file" v-on:change="onFileChange" />
    </div>
    <div v-else>
      <img :src="image" />
      <button v-on:click="removeImage">Remove Image</button>
    </div>
  </div>
</template>

<script>
export data {
  name: 'upload-image',
  data() {
    return {
      image: null,
    }
  },
  methods: {
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) {
        return;
      }
      this.createImage(files[0]);
    },
    createImage(file) {
      var image = new Image();
      var reader = new FileReader();
      var vm = this;
      
      reader.onload = function(e) {
        vm.image = e.target.result
      };
      reader.readAsDataURL(file);
    },
    removeImage(e) {
      this.images = '';
    },
  }
}
</script>

<style scope>
img {
  width: 30%;
  margin: auto;
  display: block;
  margin-bottom: 10px;
}
</style>
