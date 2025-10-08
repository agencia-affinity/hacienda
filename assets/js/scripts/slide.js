const thumbsSlide = new Swiper('.thumb-lazer', {
    direction: 'vertical',
    slidesPerView: 6,
    spaceBetween: 26,
    watchSlidesProgress: true,
    mousewheel: true,

    scrollbar: {
        el: '.thumb-lazer .swiper-scrollbar',
        draggable: true,
    },

    breakpoints: {
        320: {
            slidesPerView: 4,
            spaceBetween: 16,
            direction: 'horizontal',
            mousewheel: false, // desativa scroll vertical no mobile,
            scrollbar: {
                enabled: false,
            },
        },
        768: {
            slidesPerView: 5,
            spaceBetween: 20,
            direction: 'horizontal',
            mousewheel: false,
            scrollbar: {
                enabled: false,
            },
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 26,
            direction: 'vertical',
            mousewheel: true,
            scrollbar: {
                enabled: true,
            },
        },
    }
});

const mainSlide = new Swiper('.slide-lazer', {
    slidesPerView: 1,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.thumb-lazer .swiper-scrollbar',
        draggable: true,
    },
    thumbs: {
        swiper: thumbsSlide,
    },
});

Fancybox.bind('[data-fancybox]', {
    theme: 'light'
});