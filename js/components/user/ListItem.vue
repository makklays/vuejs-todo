<template>
  <div class="out-margin">
    <div>#{{ id }} {{ login }} {{ email }} {{ fullname }} {{ amount }}{{ currency }} [{{ banco }}]</div>
  </div>
</template>

<script>
export default {
  name: 'list-item',
  props: ['id', 'login', 'email', 'fullname', 'currency', 'amount', 'banco'],
  data: function() {
    return {
      list: null,
    }
  },
  mounted: {
    // ¿Donde está error? =)) 
  }
}
</script>

<style>
.out-margin {
  margin-left: 10px;
  font-size: 14px;
}
</style>
