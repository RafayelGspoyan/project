<template>
  <b-table  :items="products"
           :fields="table_params.fields"
           striped
           borderless
  >
    <template class="d-flex" v-slot:cell(actions)="data,index">
      <router-link :to="{name: 'ShowPage',params: {id: products[data.index].id}}">
      <button  class="btn btn-info" @click="showProduct(products[data.index].id )">Show</button>
      </router-link>
      <button class="btn btn-warning">Edit</button>
      <button class="btn btn-danger" @click="removeProduct(products[data.index].id)">Delete</button>
    </template>
  </b-table>
</template>
​
<script>
  export default {
    props: {
      products: {type: Array}
    },
    data() {
      return {
        table_params: {
          fields: [
            {key: 'id'},
            {key: 'name'},
            {key: 'description', label: 'DESC'},
            {key: 'price', formatter: (item, key, row) => {
                return `${item}.00$`
              }
            },
            {key: 'actions'}

          ]
        }
      }
    },
    methods: {
      removeProduct(id) {
        if(!confirm('Are you sure to remove this product?')) return;
        this.$parent.removeProduct(id);
      },
      showProduct(id) {
        this.$parent.showProduct(id);
      }
    }
  }
</script>
​

