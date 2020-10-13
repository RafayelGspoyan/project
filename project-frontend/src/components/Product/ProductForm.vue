<template>
  <div>
    <b-form>
      <b-form-group>
        <b-form-input
          placeholder="Name"
          v-model="item_data.name"
        ></b-form-input>
      </b-form-group>
      <b-form-group>
        <b-form-input
          placeholder="Description"
          v-model="item_data.description"
        ></b-form-input>
      </b-form-group>
      <b-form-group>
        <b-form-input
          type="number"
          placeholder="Price"
          v-model="item_data.price"
        ></b-form-input>
      </b-form-group>
      <b-button  >
        Save
      </b-button>
    </b-form>
  </div>
</template>
​
<script>
  export default {
    props: {
      products: {type: Array}
    },
    data() {
      return {
        item_data: {
          name: null,
          description: null,
          price: null
        }
      }
    },
    methods: {
      submit() {
        this.item_data.id = this.getId();
        this.$emit('wantToCreateProduct', Object.assign({}, this.item_data));
      },
      getId() {
        let id_arr = this.products.map(product => product.id)
        let max = Math.max(...id_arr);
        return ++max;
      }
    }
  }
</script>
​<style scoped>


</style>

