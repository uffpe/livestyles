@extends('layouts.tabulex-parent')
@section('content')
    <div id="content-div">
        <div class="content-div_wrapper">
            <div class="container-fluid">

                <div class="row page_header">
                    <div class="col-md-12">
                        <h3>Billeder - Galleri visning:</h3>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-primary">
                            <div class="panel-body">

                                @for ($x = 1; $x <= 5; $x++)
                                    <div class="panel panel-primary panel-gallery-element">
                                        <div class="panel-body">
                                            <a href="#" title="Nature Portfolio" class="gallery-image" >
                                                <img src="http://lorempixel.com/90/130/nature/4" class="img-responsive" alt="Nature Portfolio">
                                            </a>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="gallery-title">Gallery title - tall image {{ $x }}</div>
                                            <div class="gallery-subtitle">12 images</div>
                                        </div>
                                    </div>


                                    <div class="panel panel-primary panel-gallery-element">
                                        <div class="panel-body">
                                            <a href="#" title="Nature Portfolio" class="gallery-image">
                                                <img src="http://lorempixel.com/130/90/nature/4" class="img-responsive" alt="Nature Portfolio">
                                            </a>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="gallery-title">Gallery title - wide image {{ $x }}</div>
                                            <div class="gallery-subtitle">12 images</div>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div><!-- /.panel-gallery -->

                    </div>
                </div>



                <div class="row page_header">
                    <div class="col-md-12">
                        <h3>Billede visning:</h3>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default panel-gallery">
                            <div class="panel-body">

                                @for ($x = 1; $x <= 5; $x++)
                                    <div class="panel panel-primary panel-gallery-element">
                                        <div class="panel-body">
                                            <a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="gallery-image lightbox">
                                                <img src="http://lorempixel.com/90/130/nature/4" class="img-responsive" alt="Nature Portfolio">
                                            </a>
                                        </div>
                                    </div>


                                    <div class="panel panel-primary panel-gallery-element">
                                        <div class="panel-body">
                                            <a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="gallery-image" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                                <img src="http://lorempixel.com/130/90/nature/4" class="img-responsive" alt="Nature Portfolio">
                                            </a>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div><!-- /.panel-gallery -->

                        <script>
                            (function(){
                                $("a.lightbox").lightBox({
                                    fixedNavigation:true,
                                    maxHeight: 500,
                                    maxWidth: 700,
                                    onShowImage: function(settings, caption) {
                                        var src = settings.imageArray[settings.activeImage][0].replace('files/gallery/9990012/89/large/', '');
                                        caption.html('<a href="/download.php?i=' + src + '&f=gallery&m=89">Hent billede</a>');
                                    }
                                });
                            })();
                        </script>

                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection
