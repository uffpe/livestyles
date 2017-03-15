@extends('layouts.tabulex-parent')
@section('content')
    <div id="content-div">
        <div class="content-div_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <h3>Opslagstavle</h3>
                </div>
                <div class="row">
                    <div class="col-sm-8 alpha">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">P&aring; tur med 1. klasserne</h4>
                                <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>

                            </div>
                            <div class="panel-collapse collapse in">
                                <div class="panel-body ">
                                    <div class="col-sm-6 alpha"><img src="http://placekitten.com/350/280" class="media-object" style="max-width: 100%"></div>
                                    <div class="col-sm-6 omega">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 omega">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Status</h4>
                                <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>

                            </div>
                            <div class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Ikke kommet
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">F&oslash;dselsdage</h4>
                                <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>

                            </div>
                            <div class="panel-collapse collapse in">
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Billeder</h4>
                                <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>

                            </div>
                            <div class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <img src="http://placekitten.com/250/180" class="media-object" style="max-width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection
