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

new Swiper('.teamPage__experts__swiper', {
    pagination: {
        el: '.teamPage__experts__swiper__pagination',
        clickable: true,
    },

    initialSlide: 0,
    spaceBetween: 125,
    speed: 1500,
    slidesPerView: 'auto',

    breakpoints: {
        320: {
            spaceBetween: 45
        },
        1301: {
            spaceBetween: 125
        }
    }
});


new Swiper('.teamPage__advisor__swiper', {
    pagination: {
        el: '.teamPage__advisor__swiper__pagination',
        clickable: true,
    },

    initialSlide: 0,
    spaceBetween: 125,
    speed: 1500,
    slidesPerView: 'auto',

    breakpoints: {
        320: {
            spaceBetween: 45
        },
        1301: {
            spaceBetween: 125
        }
    }
});

new Swiper('.item__container__swiper', {
    pagination: {
        el: '.item__container__swiper__pagination',
        clickable: true,
    },

    initialSlide: 0,
    spaceBetween: 66,
    speed: 1500,
    slidesPerView: 'auto',

    breakpoints: {
        320: {
            spaceBetween: 5,
            slidesPerView: 1,
        },
        425: {
            spaceBetween: 10,
            slidesPerView: 2,
        },
        801: {
            spaceBetween: 15,
            slidesPerView: 3,
        },
        1010: {
            spaceBetween: 25,
            slidesPerView: 4,
        },
        1230: {
            spaceBetween: 40,
            slidesPerView: 5,
        },
        1301: {
            spaceBetween: 66,
            slidesPerView: 'auto',
        }
    }
});
