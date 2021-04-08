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

// セクションスライドイン
const showSection = () => {
    let showElm = document.getElementsByClassName('section-fadein');
    if (!showElm) return; //要素がなかったらキャンセル

    let showTiming = window.innerHeight > 768 ? 200 : 40;
    let scrollY = window.pageYOffset;
    let windowH = window.innerHeight;

    for (let i = 0; i < showElm.length; i++) {
        let elmClientRect = showElm[i].getBoundingClientRect();
        let elmY = scrollY + elmClientRect.top;
        if (scrollY + windowH - showTiming > elmY) {
            showElm[i].classList.add('is-show');
        } else if (scrollY + windowH < elmY) {
            //スクロールして再度非表示
            showElm[i].classList.remove('is-show');
        }
    }
}
showSection();
window.addEventListener('scroll', showSection);