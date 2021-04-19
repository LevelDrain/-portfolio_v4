import threeObj from './threeObj.js';
import jQueryObj from './jQueryObj.js';
import Swiper from 'swiper/bundle';

const init = () => {
    jQueryObj.animsition();
    jQueryObj.accordion();
    jQueryObj.topbtn();

    //SPメニュー操作
    const $box = document.querySelector('#MenuspClick');
    const $content = document.querySelector('#MenuspContent');
    const $prof = document.querySelector('#ProfileBtn');
    $box.addEventListener('click', event => {
        $box.classList.toggle('active');
        $content.classList.toggle('active');
    });
    //プロフィールのページ内リンクのみSPメニュー閉じる
    $prof.addEventListener('click', event => {
        $box.classList.remove('active');
        $content.classList.remove('active');
    });

    // スライダーライブラリ Swiper.js
    let swiper = new Swiper('.swiper-container', {
        slidesPerView: 1.2,
        breakpoints: {
            640: {
                slidesPerView: 3.3,
            },
        },
        loop: true,
        direction: 'horizontal',
        spaceBetween: 20,
        autoplay: true
    });

    threeObj.drawThreejs();
};
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
};
showSection();
window.addEventListener('scroll', showSection);
