/* author: Alexander Kuziv */
/* e-mail: hola.kuziv@gmail.com */
<template>
  <div>
    <input type="file" v-on:change="uploadFile" ref="file" class="cls-file" />
    <button v-on:click="submitFile" class="btn btn-upload">Upload!</button>
  </div>
</template>

<script>
export data {
  name: 'simple-upload-file',
  data() {
    images: null,
  },
  methods: {
    uploadFile() {
      this.images = this.$refs.file.files[0];
    },
    submitFile() {
      const formData = new FormData();
      formData.append('file', this.images);
      const headers = { 'Content-Type': 'multipart/form-data' };
      axios.post( 'https://mi-sitio-web/post', formData, { headers } )
        .then(function(res){
          res.data.files; // binary representation of the file 
          res.status; // HTTP status
        });
    }
  }
}
</script>

<style lang="css" scope>
.cls-file {
  border: 1px solid #e7e7e7;
}
.btn-upload {
  padding: 5px 21px;
  font-size: 14px;
  background-color: #e7e7e7;
  color: #000000;
  border: 1px solid #e8e8e8; 
}
</style>

