import { Swiper, SwiperSlide } from 'vue-awesome-swiper';

export default { 
    name: 'CustomSwiper',
    components: {
        Swiper,
        SwiperSlide
    },
    data: function() {
        return {
            swiperOptions: {
                loop: true,
                autoplay: {
                    delay: 5000,
                    stopOnLastSlide: false,
                    disableOnInteraction: true
                },
                lazy: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: "bullets",
                    clickable: true
                }
            }
        }
    }
}