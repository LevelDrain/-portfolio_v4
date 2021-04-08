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
    $('.c-accordion--parent').on('click', () => {
        $('.c-accordion--child').slideToggle();
    });
}

export default {
    animsition, accordion
}
