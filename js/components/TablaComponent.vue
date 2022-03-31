<template>
  <div class="tbl">
    <div v-if="is_lista">
      <table class="table table-dashed">
        <thead>
          <tr>
            <th class="my-th">ID</th>
            <th class="my-th">Título</th>
            <th class="my-th">Fecha</th>
            <th class="my-th">Acción</th>
          </tr>
        </thead>
        <tbody v-for="(item, index) in lista" :key="item.id" class="tabla">
          <row-tabla v-bind.item="item" v-on:remove="removeRow"></row-tabla>
        </tbody>
      </table>
    </div>
    <div v-else="is_lista">
      No tiene ningúnas datas
    </div>
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
    this.is_lista = true;
    
    let json = [
      {id: 1, titulo: 'Besar y abrazar', fecha: '30-03-2022'},
      {id: 2, titulo: 'Estudiar español', fecha: '29-03-2022'},
      {id: 3, titulo: 'Programar', fecha: '28-03-2022'},
      {id: 4, titulo: 'Aprender nuevas tecnologías', fecha: '28-03-2022'},
      {id: 5, titulo: 'Llamar mi amor', fecha: '29-03-2022'},
      {id: 6, titulo: 'Cocinar la comida', fecha: '30-03-2022'},
      {id: 7, titulo: 'Desarrollador mi sitio web', fecha: '26-03-2022'},
      {id: 8, titulo: 'Ir a trabajar', fecha: '28-03-2022'}, 
    ];
    this.lista = json;
  }
  methods: {
    remove(id) {
      return this.lista.splice(this.lista.indexOf(id), 1);
      
      //this.lista = this.lista.filter(item => item.id !== id);
      /*return this.lista = this.lista.filter(function(item){
        if (item.id !== id) {
          return item;
        }
      });*/
      
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
.my-th {
  font-weight: bold;
}
</style>

