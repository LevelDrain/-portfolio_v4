import threeObj from './threeObj.js';
import jQueryObj from './jQueryObj.js';
import Swiper from 'swiper/bundle';

const init = () => {
    jQueryObj.animsition();
    jQueryObj.accordion();
    jQueryObj.topbtn();

    //プロフィールのページ内リンクのみSPメニュー閉じる
    let prof = document.querySelector('#ProfileBtn');
    let checkbox = document.querySelector('#MenuspClick');
    let close = document.querySelector('.c-spmenu--content');
    prof.addEventListener('click', event => {
        console.log(close.style);
        close.style.left = '100%';
        checkbox.classList.toggle(':checked');
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
