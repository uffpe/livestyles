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



            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection
