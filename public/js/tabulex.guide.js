
$(document).ready(function () {
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
            button.className = 'btn btn-primary btn-xs btn-clipboard';
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

    if (getHash() != null) {
        activeSubmenu(window.location.hash.replace('#', ''));
        scrollToAnchor(getHash());
    } else {
        $("ul.nav-mainmenu__list li:first-child li:first-child").addClass("active");
    }
});

// listen for hash change event here
/*        window.onhashchange = function() {
 scrollToAnchor();
 };*/
// return hash if so or null if hash is empty
function getHash() {
    var hash = window.location.hash.replace('#', '');
    if (hash != '') {
        return hash;
    } else {
        return null;
    }
}

function activeSubmenu(submenu){
    $("ul.list-group-submenu li").removeClass("active");
    $("li." + submenu).addClass("active");
    scrollToAnchor(submenu);
}

function scrollToAnchor(thisName) {
    var elem = $('a[name='+ thisName +']');

    if (elem.length > 0) {

        // Offset from top to position under Top-headers
        var topOffset = 70;
        if($('body.include-subbar')) topOffset = topOffset + 50;

        if( elem.closest(".col-md-12").is('div:first-child') ){
            topOffset = topOffset + 100;
            console.log("Is first");
        }

        $('html, body').stop().animate({
            scrollTop: Math.floor(elem.offset().top - topOffset)
        }, 500);
        console.log("Scroll-offset = " + Math.floor(elem.offset().top) );
    }
}
