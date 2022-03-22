<template>
  <div class="out-margin"></div>
</template>

<script>
export default {
  name: 'list-item',
  data: function() {
    return {
      list: null,
    }
  },
  props: ['id', 'login', 'email', 'fullname', 'currency', 'amount', 'banco'],
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
