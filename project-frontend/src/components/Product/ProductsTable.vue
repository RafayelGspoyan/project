<template>
  <div>
    <b-container>
      <b-row cols="8" class="mx-auto">
        <input type="text" placeholder="Search" v-model="search_input" class="form-control-lg">
          <b-table :fields="table_params.field" :items="product"  striped bordered>
              <template v-slot:cell(action)="data">
                <button @click="removeProduct(data.item.id)" class="btn btn-danger">Delete</button>
              </template>
          </b-table>
      </b-row>
    </b-container>
  </div>
</template>


<script>

  export default {

      data(){
        return{
          search_input: "",
          product:[
            {
              id: 15,
              name: "PR 1",
              description : "Some Description",
              price: 15,
            },
            {
              id: 7,
              name: "PR 2",
              description : "Some Description",
              price: 68,
            },
            {
              id: 14,
              name: "PR 3",
              description : "Some Description",
              price: 95,
            }
          ],
        table_params:{
            field:[
              {key: "id"},
              {key: "name"},
              {key: "description"},
              {key: "price",formatter: (item,key,row) => {
                    return `${item}.00$`
                  }
                },
              {key: "action"},
            ]
        },


        }
      },
    methods:{
      removeProduct(id){
        if (!confirm("Are you Sure to remove this object product?")) return ;
        this.product.splice(this.product.indexOf(id.item),1);
      },
    },
    watch:{
       search_input(NewValue){
            this.product = this.product.filter(product => {
              return  product.name.includes(this.search_input)
            })
       }
    }
  }
</script>


<style scoped>

</style>
