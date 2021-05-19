let swiper = new Swiper('.mySwiper', {
    spaceBetween: 10,
    slidesPerView: 16,
    noSwiping: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
        768: {
            noSwiping: false,
        },

        850: {
            slidesPerView: 5,
            spaceBetween: 20,
        },

        1024: {
            slidesPerView: 6,
            spaceBetween: 20,
        },

        1200: {
            slidesPerView: 10,
            spaceBetween: 10,
        },
        1440: {
            slidesPerView: 16,
            spaceBetween: 10,
        },
    },
});

let swiper2 = new Swiper('.mySwiper2', {
    slidesPerView: 1,
    cssMode: false,
    noSwiping: true,
    initialSlide: 1,
    direction: 'horizontal',
    keyboard: {
        enabled: true,
        onlyInViewport: false,
        pageUpDown: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 1,
            enabled: true,
        },
        320: {
            direction: 'vertical',
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: swiper,
    },
});

let goUpControl = document.getElementById('goUp');

goUpControl.addEventListener('click', () => {
    swiper2.slideTo(1);
    console.log('I was clicked');
});