$(function () {

    var button_up = $('.button_up');
    button_up.on('click', function(){
        $('html, body').animate({
            scrollTop: 0
        }, 700);
    });

    var heightOfTop = 250;
    var open = false;

    $(document).on('scroll', function () {
        var topHeight = $(this).scrollTop();
        if(!open && topHeight > heightOfTop) {
            open = true;
            button_up.stop(true).fadeIn(350);
        } else if(open && topHeight <= heightOfTop) {
            open = false;
            button_up.stop(true).fadeOut(350);
        }
    });

});