
$(document).ready(function () {
    var trigger = $('.navbar-toggle'),
        mainmenu = $('#mainmenu'),
        overlay = $('.overlay'),
        isClosed = false;

    trigger.click(function () {
        open_mainmenu();
    });

    function open_mainmenu() {

        if (isClosed == true) {
            overlay.hide();
            mainmenu.removeClass('is-open');
            mainmenu.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            mainmenu.removeClass('is-closed');
            mainmenu.addClass('is-open');
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $('#main-container').toggleClass('toggled');
    });
});