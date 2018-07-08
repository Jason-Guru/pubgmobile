
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('popper.js').default;
    require('bootstrap');
    var dtBs4 = require( 'datatables.net-bs4' )();
} catch (e) {
}

window.Vue = require('vue');

import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
const app = new Vue({
    el: '#app',
    data:{
        isActive : true,
        windowWidth: 0,
        active:1,
        displayed:true,
        pageValue:"",
    },
    mounted() {
        this.$nextTick(function() {
            window.addEventListener('resize', this.getWindowWidth);
            this.getWindowWidth();
            
            var global = this;
            (function(val, global){
                global.pageValue = val;
                if(val == "how_to_join"){
                    global.active=4;
                }
                if(val == "welcome"){
                    global.active=1;
                }
                if(val == "tournament"){
                    global.active=2;
                }
                if(val == "rules"){
                    global.active=3;
                }
                if(val == "contact"){
                    global.active=5;
                }
            })(this.$refs.page.getAttribute("pageValue"), global);

        });
    
      },
      methods: {
        getWindowWidth(event) {
            this.windowWidth = document.documentElement.clientWidth;
            if(this.windowWidth < 568) {
                this.isActive = false;
                this.displayed = false;
            }else{
                this.isActive = true;
                this.displayed = true;
            }
          },

          activate:function(el){
            this.active_el = el;
        }
      },
      beforeDestroy() {
        window.removeEventListener('resize', this.getWindowWidth);
      },

      
});
