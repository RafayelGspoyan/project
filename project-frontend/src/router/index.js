import Vue from 'vue'
import Router from 'vue-router'
import ProductsTable from "../components/Product/ProductsTable";
import MainPage from "../components/Product/MainPage";
import ShowProduct from "../components/Product/ShowProduct";
import EditProduct from "../components/Product/EditProduct";


Vue.use(Router)

export default new Router({
  mode: "history",
  routes: [
    {
      path: '/',
      name: 'Mainpage',
      component: MainPage
    },
    {
      path: '/show',
      name: 'ShowPage',
      component: ShowProduct
    },
    {
      path: '/edit',
      name: 'EditProduct',
      component: EditProduct
    },
  ]
})
