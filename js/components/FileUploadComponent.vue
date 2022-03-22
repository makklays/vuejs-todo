<template>
  <form enctype="multipart/form-data" novalidate v-if="isInitial || isSaving">
    <h1>Upload images</h1>
    <div class="dropbox">
      <input type="file" multiple :name="uploadFieldName" :disabled="isSaving" @change="filesChange($event.target.name, $event.target.files); fileCount = $event.target.files.length"
      accept="image/*" class="">
      
      
    </div>
  </form>
</template>

<script>

</script>

<style>

</style>
