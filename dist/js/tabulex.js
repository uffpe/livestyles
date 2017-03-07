
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

    // Adding functionality to collapsed elements
    (function() {
        $(".panel-heading a").click(function(){
            var collapse_elem = $(this).closest('.panel').find('.panel-collapse');
            collapse_elem.collapse('toggle');
            $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
        });
    })();

    // Adding highlight syntax to all pre code elements
    (function() {
        $('pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    })();

    // Adding copy/paste button for each pre element
    (function(){
        var pre = document.getElementsByTagName('pre');
        for (var i = 0; i < pre.length; i++) {
            var button = document.createElement('button');
            button.className = 'btn btn-default btn-xs btn-clipboard';
            button.textContent = 'Copy';

            pre[i].appendChild(button);
        }

        if ($('.btn-clipboard').length) {
            var copyCode = new Clipboard('.btn-clipboard', {
                target: function(trigger) {
                    return trigger.previousElementSibling;
                }
            });

            copyCode.on('success', function(event) {
                event.clearSelection();
                event.trigger.textContent = 'Copied';
                window.setTimeout(function() {
                    event.trigger.textContent = 'Copy';
                }, 2000);
            });
        }
    })();

});