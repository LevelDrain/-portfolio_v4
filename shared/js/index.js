import threeObj from './threeObj.js';

const init = () => {
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

    threeObj.drawThreejs();

    // jQuery
    $('.animsition').animsition({
        outClass: 'fade-out-left',
        outDuration: 800,
        linkElement: '.animsition-link',
        loading: true,
        loadingParentElement: 'body',
        timeout: true,
        timeoutCountdown: 400,
        onLoadEvent: true,
        browser: ['animation-duration', '-webkit-animation-duration']
    });
}

onload = init;