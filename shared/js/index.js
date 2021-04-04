var init = function () {
    // スライダーライブラリ Swiper.js
    new Swiper('.swiper-container', {
        loop: false,
        watchOverflow: false,
        direction: 'horizontal',
        slidesPerView: 'auto',
        spaceBetween: 20,
        centerdSlides: true,
        autoplay: false,
        navigation: {
            prevEl: '.swiper-button-prev',
            nextEl: '.swiper-button-next'
        },
    });

    // three.js
    const $canvas = document.querySelector('.canvas'),
        width = 100,
        height = 100;
    const scene = new THREE.Scene();

}

document.addEventListener('DOMContentLoaded', init);