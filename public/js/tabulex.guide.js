
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

/*


    function galleryViewer(galleryID, galleryTitle) {
        console.log('Gallery ID: ' + galleryID + ' (Title: '+ galleryTitle +')');

        // Insert modal #galleryViewer in page
        if($('#modalViewer').length == 0){
            var modalFooter     = '<span class="pull-left" id="modalCounter"></span>'
                + '<button class="btn btn-primary">Download</button>'
                + '<button class="btn btn-default" data-dismiss="modal">Close</button></div>';

            var modalCarousel   = '<div id="modalCarousel" class="carousel"><div class="carousel-inner"></div>'
                + '     <a class="carousel-control left" href="#modalCarousel" data-slide="prev"><span><i class="fa fa-chevron-left" aria-hidden="true"></i></span></a>'
                + '     <a class="carousel-control right" href="#modalCarousel" data-slide="next"><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>'
                + '</div>';

            var modalHTML       = '<div class="modal fade" id="modalViewer" role="dialog" tabindex="-1" aria-labelledby="" aria-hidden="true">'
                + '   <div class="modal-dialog"><div class="modal-content">'
                + '     <div class="modal-body">' + modalCarousel + '</div>'
                + '     <div class="modal-footer">' + modalFooter + '</div>'
                + '   </div></div>'
                + '</div>';

            $('body').append(modalHTML);
        }


        // Copy images into carousel
        $('#'+ galleryID + ' a').each(function(j) {
            var image = $(this).attr("href");
            var title = $(this).attr("title");
            var key = $(this).attr("data-slide-to");
            var label = $(this).attr("data-label");
            var item = $('<div class="item" title="'+title+'"><img src="'+image+'" class="img-responsive" alt="'+title+'" data-label="'+ label +'" data-slide-to="'+ key +'"></div>');
            item.appendTo('#modalCarousel .carousel-inner');
            if (j==0){ // set first item active
                item.addClass('active');
            }
        });

        // Activate the carousel
        $('#modalCarousel').carousel({interval:false});

        // Change modal info when slide changes
        $('.carousel').on('slid.bs.carousel', function () {
            var key = $(this).find('.active').attr('data-slide-to');
            var label = $(this).find('.active').attr('data-label');
            $('#modalLabel').html(label);
        })

        // Clicking the thumbnail image
        $('#'+ galleryID + ' a').click(function(e){
            e.preventDefault();
            var key = $(this).attr('data-slide-to');

            $('#modalViewer').modal('show'); // show the modal
            $('#modalCarousel').carousel(parseInt(key)); // slide carousel to selected
        });

    };

*/


});