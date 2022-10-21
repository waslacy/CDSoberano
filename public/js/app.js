$(document).ready(() => {
    $(window).scroll(() => {
        if (this.scrollY > 20) {
            $('#site-header').addClass('sticky')
        } else {
            $('#site-header').removeClass('sticky')
        }
    })

    $('.menu-toggler').click(() => {
        $('.menu-toggler').toggleClass("active");
        $(".site-nav").toggleClass("active");
    });

    $('.link-nav').click(() => {
        $('.menu-toggler').toggleClass('active');
        $('.site-nav').toggleClass('active')
    })
})


// init Form Orçamento

let input = $('#group-arquivo #arquivo')
let span = $('#group-arquivo .nomeArquivo')

input.on('input propertychange', (e) => {
    let valueChanged = false;

    if (e.type=='propertychange') {
        valueChanged = e.originalEvent.propertyName=='value';
    } else {
        valueChanged = true;
    }
    if (valueChanged) {
        span.html(input[0].files[0].name)
    }
})

// End Form Orçamento

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