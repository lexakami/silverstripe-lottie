import Vue from 'vue';
import Lottie from './Lottie.vue';

// const element = document.getElementById('lottie');
// bodymovin.loadAnimation({
//     container: element, // the dom element that will contain the animation
//     renderer: 'svg',
//     loop: true,
//     autoplay: true,
//     path: 'assets/fixtures/data.json' // the path to the animation json
// });

new Vue({
    el: '#lottie-app',
    components: {
        'vue-lottie': Lottie,
    },
});