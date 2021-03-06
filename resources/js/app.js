/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import 'babel-polyfill'

// window.Vue = require('vue');

// import Vue from 'vue'
// import Vuetify from 'vuetify'

// Vue.use(Vuetify)

// const opts = {}

// export default new Vuetify(opts)

import Vue from 'vue'
import Vuetify from 'vuetify' // path to vuetify export
// mdi font is loaded from sass
// import 'material-design-icons-iconfont/dist/material-design-icons.css'
// import '@mdi/font/css/materialdesignicons.css'
//    "@mdi/font": "^4.4.95",


Vue.use(Vuetify);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.component('product-list', require('./shop/ProductList.vue').default);
Vue.component('side-bar', require('./shop/SideBar.vue').default);

Vue.component('product-card', require('./components/ProductCard.vue').default);
Vue.component('cart-items', require('./components/CartItems.vue').default);
Vue.component('user-nav-icon', require('./components/UserNavIcon.vue').default);


/**
 * Admin Components
 */

// User Components
Vue.component('add-user-form', require('./admin/AddUserForm.vue').default);
Vue.component('edit-user-form', require('./admin/EditUserForm.vue').default);
Vue.component('user-list', require('./admin/UserList.vue').default);

// Product Field Components
Vue.component('admin-product', require('./admin/product/AdminProduct.vue').default);
Vue.component('admin-product-list', require('./admin/product/AdminProductList.vue').default);
Vue.component('product-categories', require('./admin/product/ProductCategories.vue').default);
Vue.component('product-category-fields', require('./admin/product/ProductCategoryFields.vue').default);

/**
 * General Components
 */
Vue.component('snack-bar', require('./components/SnackBar.vue').default);

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('header-navigation', require('./components/HeaderNavigation.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify({
        theme: {
    	    themes: {
            light: {
              primary: '#1D1D1B',
              secondary: '#f5f5f5',
              accent: '#82B1FF',
              error: '#FF5252',
              info: '#2196F3',
              success: '#4CAF50',
              warning: '#FFC107',
              
              // secondary: '#E1341E',
              // Grandiose Colors
              red: '#D42427',
              green: '#81b14d',
              text: '#1D1D1B'
            }
    	    }
        },
        // iconfont: 'mdi'
        icons: {
            iconfont: 'mdi'
        }
    }),
    
    data () {
      return {
        // drawers
        drawer: null,
        cartdrawer: null,
        items: [
          { title: 'Home', icon: 'dashboard' },
          { title: 'About', icon: 'question_answer' },
        ],

        //login
        valid: true,
        email: '',
        emailrules: [
          value => !!value || 'Required',
          value => /.+@.+\..+/.test(value) || 'E-mail must be valid'
            // const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            //   return pattern.test(value) || 'Invalid e-mail'
        ],
        password: '',
        passwordrules: [
          value => !!value || 'Required',
          value => (value && value.length > 8) || 'Password must be atleast 8 characters',
        ],




      }
    },
    methods: {
      validate () {
        if (this.$refs.form.validate()) {
          this.snackbar = true;
        }
      }
    }
    // watch: {
    //   email () {
    //     this.errorMessages = ''
    //   },
    // }


});