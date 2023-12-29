import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

import './main'

new Swiper('.blog__swiper', {
    pagination: {
        el: '.blog__swiper__pagination',
        clickable: true,
    },

    initialSlide: 0,
    centeredSlides: true,
    spaceBetween: 150,
    speed: 1500,
    slidesPerView: 'auto',
});
