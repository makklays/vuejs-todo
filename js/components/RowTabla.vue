<template>
  <tr class="tr-row">
    <td>{{ item.id }}</td>
    <td>{{ item.titulo }}</td>
    <td>{{ item.fecha }}</td>
    <td><button class="btn btn-success" v-on:click="removeRow">Delete</button></td>
  </tr>
</template>

<script>
export default {
  name: 'row-tabla',
  props: ['item'],
  methods: {
    removeRow: function() {
      //this.list = this.list.filter(item => item.id !== id);
      this.$emit('remove', this.item.id);
    }
  }
}
</script>

<style lang="scss" scope>
.tr-row {
  font-size: 14px;
}
</style>
