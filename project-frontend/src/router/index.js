import Vue from 'vue'
import Router from 'vue-router'
import ProductsTable from "../components/Product/ProductsTable";
import circle from "../components/test/circle";


Vue.use(Router)

export default new Router({
  mode: "history",
  routes: [
    {
      path: '/',
      name: 'ProductsTable',
      component: ProductsTable
    },
    {
      path: '/circle',
      name: 'Circle',
      component: circle
    },
  ]
})
