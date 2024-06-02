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
    Fancybox.bind();
    $(document).on('click', '.event-modal', function (e) {
        let contentText = $(this).closest('.card').find('.card__content p').text();

        $('#input_4_11').val(contentText);
    });

    $(document).on('click', '.our-team__loadmore', function (e) {
        e.preventDefault();
        
        let btn = $(this),
            parent = btn.parent(),
            card = parent.find('.our-team__card');

        btn.remove();
        card.removeClass('hidden');
    });

    function videoControlls() {
        let videoWrap = document.querySelector('.block-video');

        if (!videoWrap) return;
        videoWrap.addEventListener('click', videoHandler)


        function videoHandler(e) {
            e.preventDefault();
            let currentClick = e.target;
            if (!checkCurrentClass(currentClick)) {
                return;
            }
            let videoContainer = e.target.closest('.block-video__inner');
            let video = videoContainer.querySelector('video');
            let videoBtn = videoContainer.querySelector('.block-video__inner button');

            if (checkCurrentClass(currentClick) && video.paused) {
                videoBtn.classList.add('hide');
                video.play();
            } else if (checkCurrentClass(currentClick) && !video.paused) {
                video.pause();
                videoBtn.classList.remove('hide');
            }

        }

        function checkCurrentClass(click) {
            if (click.classList.contains('block-video__btn') || click.classList.contains('block-video__video')) {
                return true;
            } else return false

        }
    }

    videoControlls();


    $(window).on('scroll', function () {
        fixedHeaderActions();

    });
});
