import jQuery from 'jquery';
import 'lity';
import 'animsition';

const $ = jQuery;

const animsition = () => {
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

const accordion = () => {
    $('.c-accordion--parent').on('click', function () {
        $(this).next().slideToggle();
        $(this).toggleClass('open');
        $('.c-accordion--parent').not(this).removeClass('open');
    });
}

const topbtn = () => {
    $('#TopBtn').click(() => {
        $('html,body').animate({scrollTop: 0}, 500);
    });
}

// リサイズでリストが消えたままにならないようにする
$(window).resize(function () {
    if (window.matchMedia('(max-width: 767px)').matches) {
        $('.c-accordion--child').css('display', 'none');//スマホ処理
    } else if (window.matchMedia('(min-width:768px)').matches) {
        $('.c-accordion--child').css('display', 'block');//PC処理
    }
});

export default {
    animsition, accordion, topbtn
}
