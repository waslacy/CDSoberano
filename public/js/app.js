$(document).ready(() => {
    $(window).scroll(() => {
        if(this.scrollY > 20){
            $('#site-header').addClass('sticky')
        } else {
            $('#site-header').removeClass('sticky')
        }
    })
})
