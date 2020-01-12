$("#bdesc").on("click", function() {
    if ($("#description").hasClass("show") == false) {
        $('html,body').animate({
            scrollTop: $("#section2").offset().top
        }, '2000');

    } else {
        $('html,body').animate({
            scrollTop: $("#section1").offset().top
        }, 'slow');
    }
})