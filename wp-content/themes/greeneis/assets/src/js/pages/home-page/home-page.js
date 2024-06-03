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

    function menu() {
        const iconMenu = document.querySelector(".btn-burger");
        if (!iconMenu) return;
        iconMenu.addEventListener("click", openCloseMenu);

        function openCloseMenu(event) {
            const menuBody = document.querySelector(".header__menu");
            const headerBody = document.querySelector('.header');

            if (iconMenu && open) {
                open = false;
                document.body.classList.toggle('fixed');
                iconMenu.classList.toggle("menuIsActive");
                menuBody.classList.toggle("menuIsActive");
                headerBody.classList.toggle("menuIsActive");
                delay(500, true);
            }
        }

        //*******************</Menu>*********************/

        //*******************<Delay>*********************/
        function delay(time, status) {
            setTimeout(() => {
                open = status;
            }, time);
        }
    }
    menu();

    function accordionMenu() {
        if (window.matchMedia('(max-width: 1249.58px)').matches) {
            $('header .menu-item-has-children > a').on('click', function (e) {
                e.preventDefault();
                $(this).next().slideToggle();
                $(this).next().toggleClass('opened');
                $(this).toggleClass('opened');
            });
        }
    }
    accordionMenu();


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
            breakpoints: {
                260: {
                    slidesPerView: 1,
                    spaceBetween: 16,
                },
                767.98: {
                    slidesPerView: 1.7,
                    spaceBetween: 16,
                },
                1023.98: {
                    spaceBetween: 24,
                    slidesPerView: 3,
                }

            },
        })

        const mobileSliders = document.querySelectorAll('.cards-content__slider');

        mobileSliders.forEach((slider, index) => {
            let cardsMobileSlider;



            const breakpoint = window.matchMedia('(min-width:1023.98px)');

            function breakpointChecker() {
                if (breakpoint.matches === true) {
                    if (cardsMobileSlider !== undefined) cardsMobileSlider.destroy(true, true);
                    return;
                } else if (breakpoint.matches === false) {
                    return enableSwiper();
                }
            };
            function enableSwiper() {
                cardsMobileSlider = new Swiper(slider, {
                    observer: true,
                    observeParents: true,
                    watchOverflow: true,
                    speed: 500,
                    slidesPerView: 1.3,
                    spaceBetween: 16,

                    // centeredSlides: true,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true,
                    },
                    breakpoints: {
                        260: {
                            slidesPerView: 1.3,
                            spaceBetween: 16,
                        },

                    },
                });
            }

            breakpoint.addEventListener("change", breakpointChecker);
            breakpointChecker();
        })

        const teamSliders = document.querySelectorAll('.our-team__slider');

        teamSliders.forEach((slider, index) => {
            let teameSlider;



            const breakpoint = window.matchMedia('(min-width:1023.98px)');

            function breakpointChecker() {
                if (breakpoint.matches === true) {
                    if (teameSlider !== undefined) teameSlider.destroy(true, true);
                    return;
                } else if (breakpoint.matches === false) {
                    return enableSwiper();
                }
            };
            function enableSwiper() {
                teameSlider = new Swiper(slider, {
                    observer: true,
                    observeParents: true,
                    watchOverflow: true,
                    speed: 500,
                    slidesPerView: 2,
                    spaceBetween: 16,

                    // centeredSlides: true,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true,
                    },
                    breakpoints: {
                        260: {
                            slidesPerView: 2,
                            spaceBetween: 16,
                            slidesPerGroup: 2,
                        },
                        767.98: {
                            slidesPerView: 3,
                            spaceBetween: 16,
                            slidesPerGroup: 3,
                        },

                    },
                });
            }

            breakpoint.addEventListener("change", breakpointChecker);
            breakpointChecker();
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

    function moveElemAfter(width, selector, destination, home) {
        if (!document.querySelector(selector)) return;

        if ($(window).width() < width) {
            $(selector).appendTo(destination);
        } else {
            $(selector).appendTo(home);
        }
    }

    moveElemAfter(1023.98, '.cards-slider__slider-actions ', '.cards-slider .container', '.cards-slider__header');
    $(window).on('scroll', function () {
        fixedHeaderActions();

    });
    $(window).on('resize', function () {
        fixedHeaderActions();
        moveElemAfter(1023.98, '.cards-slider__slider-actions ', '.cards-slider .container', '.cards-slider__header');

    });
});
