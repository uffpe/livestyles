
$(document).ready(function () {

    // Main menu open/close variables
    var menu_toggle = '.navbar-toggle',
        mainmenu = '.nav-mainmenu',
        mainmenu_header = '.nav-mainmenu .list-group-header a',
        overlay = '.main-wrapper__overlay',
        isOpen = false;

    // Main menu button open/close
    $(menu_toggle).click(function () {
        if (isOpen == true){
            close_mainmenu();
        } else{
            open_mainmenu();
        }
    });

    // Main menu close triggers
    $(mainmenu_header + "," + overlay).click(function () {
        if (isOpen == true)
            close_mainmenu();
    });

    // Main menu open function
    function open_mainmenu() {
        isOpen = true;
        $(mainmenu + ',' + menu_toggle + ',' + overlay).removeClass('is-closed');
        $(mainmenu + ',' + menu_toggle + ',' + overlay).addClass('is-open');
    }

    // Main menu close function
    function close_mainmenu() {
        isOpen = false;
        $(mainmenu + ',' + menu_toggle + ',' + overlay).removeClass('is-open');
        $(mainmenu + ',' + menu_toggle + ',' + overlay).addClass('is-closed');
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
        $(".panel-heading a.toggle_collapse").click(function(e){
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