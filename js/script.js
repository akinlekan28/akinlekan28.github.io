function fadeEffect() {
    var scroll_transparency = false;

    $(window).scroll(function () {
        if ($(window).scrollTop() == 0) {
            scroll_transparency = false;
            $('.navbar-default').animate("fast", 1);
        }
        else if (scroll_transparency == false && $(window).scrollTop() > 0) {
            $('.navbar-default').animate("fast", 9);
            scroll_transparency = true;
        }
    })
}