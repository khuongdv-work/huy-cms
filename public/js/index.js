


window.onload = function() {
    var swiper = new Swiper('.swiper-container', {
        cssMode: true,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination'
        },
        mousewheel: true,
        keyboard: true,
    });
};
