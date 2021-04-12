import Vue from 'vue';
import Dropdown from './components/dropdown';
import Features from './components/features';
import SearchComplete from './components/search-complete';
import CustomSwiper from './components/custom-swiper';

Vue.config.productionTip = false;

new Vue({
    el: document.getElementById('page'),
    components: {
        CustomSwiper,
        Dropdown,
        Features,
        SearchComplete
    }
});