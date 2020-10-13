<template>
  <div>
    <h1>Hello</h1>
    <b-container>
      <b-row>
        <b-col cols="10" class="mx-auto ">
          <b-col class="d-flex">
          <input type="text"
                 class="form-control w-25 mb-2 "
                 placeholder="search"
                 v-model="search_term"
          >
          <b-button @click ="showForm" class="ml-auto">Create Product</b-button>
          </b-col>
          <products-table :products="products"/>
        </b-col>
      </b-row>
    </b-container>
    <b-container :class="{'hide': !clicked, 'show': clicked}">
      <b-row>
        <b-col cols="4" class="mx-auto">
          <product-form  :products="products" @wantToCreateProduct="createProduct"/>
        </b-col>
      </b-row>
    </b-container>

  </div>
</template>
​
<script>
  import ProductForm from "./ProductForm";
  import ProductsTable from "./ProductsTable";
  export default {
    components: {ProductsTable, ProductForm  },
    data() {
      return {
        id: null,
        my_var: 15,
        clicked: false,
        search_term: '',
        products: null,
      }
    },
    watch: {
      'item_data.description': function (new_value, old_value) {
        console.log('new', new_value);
      },
      my_var(new_v, old_v) {
        console.log('old', old_v);
      },
      item_data: {
        handler(new_val) {
          console.log(new_val);
        },
        deep: true
      }
    },
    methods: {
      removeProduct(id) {
        this.products = this.products.filter(item => item.id !== id)
        this.axios.get(`/product/delete/${id}`).then((res) => {

        })
      },
      createProduct(product) {
        this.products.push(product)
      },
      showForm(){
        this.id = this.product.filter(item => item.id === id)
      },
      showProduct(id){
        this.id = id;
        console.log(this.id)
        this.products = this.products.filter(item => item.id === id)
      }
    },
    mounted() {
      this.axios.get("/product").then((res) => {
        this.products = res.data.data[0];
      })
    },
    computed: {
      filteredProducts() {
        return this.products.filter(product => {
          return product.name.toLowerCase().includes(this.search_term.toLowerCase()) ||
            product.description.toLowerCase().includes(this.search_term.toLowerCase());
        })
      },
    }
  }
</script>
​
<style scoped>
  .show{
    display: block;
  }
  .hide{
    display: none;
  }
</style>
