require('./bootstrap');

import Vue from 'vue'
import StageFilter from './components/StageFilter.vue'

Vue.component('stageFilter', StageFilter)

const app = new Vue({
    el: '#app'
})