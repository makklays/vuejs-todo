<template>
  <div v-if="is_lista">
    <div v-for="item in lista" class="tabla">
      <row-tabla v-bind.item="item" v-on:remove="removeRow"></row-tabla>
    </div>
  </div>
  <div v-else="is_lista">
    
  </div>
</template>

<script>
import RowTabla from './components/RowTabla.vue';

export data {
  name: 'tabla-component',
  data() {
    return {
      lista: null,
      is_lista: true,
    }
  },
  mounted: {
    let json = {
      {id: 1, titulo: 'Besar y abrazar', fecha: '30-03-2022'},
      {id: 2, titulo: 'Estudiar español', fecha: '29-03-2022'},
      {id: 3, titulo: 'Programar', fecha: '28-03-2022'},
      {id: 4, titulo: 'Aprender nuevas tecnologías', fecha: '28-03-2022'},
      {id: 5, titulo: 'Llamar mi amor', fecha: '29-03-2022'},
      {id: 6, titulo: 'Cocinar la comida', fecha: '30-03-2022'},
      {id: 7, titulo: 'Desarrollador mi sitio web', fecha: '26-03-2022'},
      {id: 8, titulo: 'Ir a trabajar', fecha: '28-03-2022'}, 
    };
    this.lista = json;
  }
  methods: {
    remove(id) {
      //
      return '';
    }
  }
  components: {
    'row-tabla': RowTabla,  
  }
}
</script>

<style lang="scss" scope>
.tabla {
  background-color: #FFFFFF;
  
}
</style>

