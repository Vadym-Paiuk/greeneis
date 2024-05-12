import Global from "../../global/global";


class HomePage {
    constructor() {
        this.global = Global;
    }

    static getInstance() {
        if (!this.instance) {
            this.instance = new this();
        }
        return this.instance;
    }
}

$(function () {
    HomePage.getInstance();

    function initSlider() {
        if (!document.querySelector('.swiper')) return;
        const sliderCards = document.querySelector('.cards-slider__slider');
        const cardsSlider = new Swiper(sliderCards, {
            observer: true,
            observeParents: true,
            watchOverflow: true,
            spaceBetween: 24,
            slidesPerView: 3,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        })
    }
    let scrollPrev;

    function fixedHeaderActions() {
        let header = $('.header');
        let scrolled = $(window).scrollTop();
        if (scrolled > 0) {
            header.addClass('fixed');

        } else {
            header.removeClass('fixed');
        }
        if (scrolled > 100 && scrolled > scrollPrev) {
            header.addClass('anim');
        } else {
            header.removeClass('anim');
        }
        scrollPrev = scrolled;
    }

    initSlider();

    $(window).on('scroll', function () {
        fixedHeaderActions();

    });
});
