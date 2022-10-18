$(document).ready(() => {
    $(window).scroll(() => {
        if (this.scrollY > 20) {
            $('#site-header').addClass('sticky')
        } else {
            $('#site-header').removeClass('sticky')
        }
    })

    $('.menu-toggler').click(() =>{
        $(this).toggleClass("active");
        $(".site-nav").toggleClass("active");
    });

    $('.link-nav').click(() => {
        $('.menu-toggler').removeClass("active");
    })
})


new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
    perView: 3,
    autoplay: 6000,
    gap: 30,
    breakpoints: {
        1130: {
            perView: 2
        },
        768: {
            perView: 1
        }
    }
}).mount()