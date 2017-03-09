
$(document).ready(function () {

    // Main menu open/close variables
    var trigger = '.navbar-toggle',
        mainmenu = '.nav-mainmenu',
        overlay = '.main-wrapper__overlay',
        isOpen = false;

    // Main menu open/close triggers
    $(trigger).click(function (e) {
        e.stopPropagation();
        console.log("Open menu");
        if (isOpen == true) {
            close_mainmenu();
        } else {
            open_mainmenu();
            // Close menu if click outside menu
            $(document).one('click',function(elm) {
                // console.log(elm.target.className);
                if($(mainmenu).has(elm.target).length === 0) {
                    close_mainmenu();
                }
                // elm.stopPropagation();
            });
        }
    });

    // Main menu open function
    function open_mainmenu() {
        $(mainmenu + ',' + trigger + ',' + overlay).removeClass('is-closed');
        $(mainmenu + ',' + trigger + ',' + overlay).addClass('is-open');
        isOpen = true;
    }

    // Main menu close function
    function close_mainmenu() {
        $(mainmenu + ',' + trigger + ',' + overlay).removeClass('is-open');
        $(mainmenu + ',' + trigger + ',' + overlay).addClass('is-closed');
        isOpen = false;
    }

    // Main menu - Multi-level function
    (function() {
        var submenu = 'li.dropdown-submenu';
        $(submenu).click(function(event) {
            console.log("Open submenu");
            event.stopPropagation();
            if ($(this).hasClass('open')){
                $(this).removeClass('open');
            }else{
                $(submenu).removeClass('open');
                $(this).addClass('open');
            }
        });
    })();


    // Adding functionality to collapsed elements
    (function() {
        $(".panel-heading a").click(function(e){
            e.preventDefault();
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