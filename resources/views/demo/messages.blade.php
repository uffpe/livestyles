@extends('layouts.tabulex-parent')
@section('content')
    <div id="content-div">
        <div class="content-div_wrapper">
            <div class="container-fluid">
                <div class="row page_header">
                    <div class="col-md-12">
                        <h3>Topbar - Beskeder</h3>

                        <div class="panel panel-filter-bar">

                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-search" aria-hidden="true"></i>
                                    Søg i beskeder
                                </h4>
                                <a href="#" class="toggle_collapse" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Søg i beskeder</span>
                                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                </a>
                            </div>

                            <div class="panel-collapse collapse" aria-label="Some Info Panel">
                                <div class="panel-body">

                                    <form id="" action="" class="form-inline row single-gutter">
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label class="input-group-addon">Søg</label>
                                                    <input type="text" class="form-control" id="search-text" aria-label="thisSearchLabel">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-xs-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label class="input-group-addon">Fra</label>
                                                    <input type="text" class="form-control" id="search-startdate" aria-label="Specify a start date">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-xs-6">
                                            <div class="form-group">
                                                <div class="input-group">

                                                    <label class="input-group-addon">Til</label>
                                                    <input type="text" class="form-control" id="search-enddate" aria-label="Specify an end date">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-xs-12">
                                            <button type="submit" class="btn btn-primary pull-right">
                                                <i class="fa fa-search" aria-hidden="true"></i> Søg
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div><!-- /.panel-filter-bar -->


                    </div>
                </div><!-- /.page_header -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Content</h4>
                            </div>
                            <div class="panel-body"><p>Here comes content</p></div>
                        </div>
                    </div>
                </div>




                <div class="row page_header">
                    <div class="col-md-12">
                        <h3>Topbar - Checkin v1</h3>

                        <div class="panel panel-filter-bar">

                            <div class="panel-body">

                                <form id="" action="" class="form-inline row single-gutter">
                                    <div class="col-sm-8 col-xs-12">
                                        <span class="h5 center-vertically" style="display: inline-block;"><i class="fa fa-check-square-o" aria-hidden="true"></i> Marker barn som: <b> Kommet</b></span>

                                        <div class="form-group" style="display: none;">
                                            <div class="input-group">
                                                <label class="input-group-addon">Sæt status: </label>
                                                <input type="text" class="form-control" id="search-text" value="Kommet" aria-label="thisLabel">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <button type="submit" class="btn btn-primary pull-right">
                                            Skift markering
                                        </button>
                                    </div>
                                </form>

                            </div>

                        </div><!-- /.panel-filter-bar -->

                    </div>
                </div><!-- /.page_header -->




                <div class="row page_header">
                    <div class="col-md-12">
                        <h3>Topbar - Checkin v2</h3>

                        <div class="panel panel-filter-bar">

                            <div class="panel-body">

                                <div class="btn-group pull-right" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i> Kommet
                                    </button>
                                    <button type="button" class="btn btn-primary"><span class="caret"></span></button>
                                </div>

                            </div>

                        </div><!-- /.panel-filter-bar -->

                    </div>
                </div><!-- /.page_header -->




                <div class="row page_header">
                    <div class="col-md-12">
                        <h3>Topbar - Checkin v3</h3>


                        <div class="panel panel-filter-bar">

                            <div class="panel-body">

                                <form id="" action="" class="form-inline row single-gutter">
                                    <div class="col-sm-8 col-xs-12">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <label class="input-group-addon">Sæt status: </label>
                                                <input type="text" class="form-control" id="search-text" value="Kommet" aria-label="thisLabel" readonly="readonly">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <button type="submit" class="btn btn-primary pull-right">
                                            Skift status
                                        </button>
                                    </div>
                                </form>

                            </div>

                        </div><!-- /.panel-filter-bar -->


                    </div>
                </div>


                <div class="row page_header">
                    <div class="col-md-12">
                        <h3>Billeder</h3>
                    </div>
                </div>

                <style>
                    .panel-gallery-element {
                        display: inline-block;
                        float: left;
                        margin-left: 12px;
                        margin-right: 12px;
                    }
                    .panel-gallery-element > .panel-body {
                        padding: 0;
                        position: relative;
                        /*background-color: #f5f5f5;*/
                        display: table;
                    }

                    .panel-gallery-element a.gallery-link {
                        display: table-cell;
                        height: 154px;
                        vertical-align: middle;
                        width: 170px;
                        transition: all 0.2s;
                    }
                    .panel-gallery-element a.gallery-link:hover{
                        background-color: #CEDFE9;
                    }

                    .panel-gallery-element a.gallery-link img {
                        margin: 0 auto;
                        transition: all 0.1s;
                    }
                    .panel-gallery-element a.gallery-link:hover img {
                        border-color: #6B9CBA;
                    }

                    .panel-gallery-element > .panel-footer {
                        background-color: #f5f5f5;
                        padding: 5px 15px;
                    }
                    .panel-gallery-element .gallery-title {
                        display: block;
                        font-weight: 600;
                        width: 100%;
                    }
                    .panel-gallery-element .btn-default {
                        width: 100%;
                        position: absolute;
                        bottom: 0;
                    }
                </style>

                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-primary panel-gallery">
                            <div class="panel-body">

                                @for ($x = 1; $x <= 6; $x++)
                                    {{--<article class="col-xs-12 col-sm-4 col-md-4 col-lg-3">--}}
                                    <div class="panel panel-primary panel-gallery-element">
        {{--                                <div class="panel-heading">
                                            <b class="panel-title">Gallery title {{ $x }}</b>
                                        </div>--}}
                                        <div class="panel-body">
                                            <a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="gallery-link" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                                <img src="http://lorempixel.com/90/130/nature/4" class="img-responsive" alt="Nature Portfolio">
                                                <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                            </a>
                                            {{--<h5 class="gallery-title">Gallery title {{ $x }}</h5>--}}
                                            {{--<a class="btn btn-default" href="#" role="button">Gallery title {{ $x }}</a>--}}
                                        </div>
                                        <div class="panel-footer">
                                            <div class="gallery-title">Gallery title {{ $x }}</div>
                                            <div class="small">12 billeder</div>
                                        </div>
                                    </div>


                                    {{--<article class="col-xs-12 col-sm-4 col-md-4 col-lg-3">--}}
                                    <div class="panel panel-primary panel-gallery-element">
                                        {{--                                <div class="panel-heading">
                                                                            <b class="panel-title">Gallery title {{ $x }}</b>
                                                                        </div>--}}
                                        <div class="panel-body">
                                            <a href="http://lorempixel.com/350/350/nature/4" title="Nature Portfolio" class="gallery-link" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                                <img src="http://lorempixel.com/130/90/nature/4" class="img-responsive" alt="Nature Portfolio">
                                                <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                            </a>
                                            {{--<h5 class="gallery-title">Gallery title {{ $x }}</h5>--}}
                                            {{--<a class="btn btn-default" href="#" role="button">Gallery title {{ $x }}</a>--}}
                                        </div>
                                        <div class="panel-footer">
                                            <div class="gallery-title">Gallery title {{ $x }}</div>
                                            <div class="small">12 billeder</div>
                                        </div>
                                    </div>

                                @endfor

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection