<template>
  <div>
    <b-container>
      <b-row>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Products Details</strong>
              </div>
              <div  class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">ID</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ this.products.id}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ this.products.name}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Description</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ this.products.description}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label  class="col-md-3 col-form-label">Price</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ this.id}}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-outline-danger">Delete</a>
                        <a href="" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </b-row>
    </b-container>
  </div>
</template>

<script>
  import ProductForm from "./ProductForm";
  import ProductsTable from "./ProductsTable";
  export default {
    data(){
      return{
        id: null,
        products: [],
      }
    },
    mounted() {
      this.axios.get(`/product/show/${this.$route.params.id}`).then((res) => {
        this.products = res.data.data[0];
        console.log(this.id)
      })
    },
   created() {
      this.id = this.$route.params.id;
   }

  }
</script>

<style scoped>

</style>
