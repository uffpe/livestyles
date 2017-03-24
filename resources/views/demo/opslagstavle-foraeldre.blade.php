@extends('layouts.tabulex-parent')
@section('content')
    <div id="content-div">
        <div class="content-div_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="no-margin-top">Opslagstavle</h3>
                    </div>
                </div>
                <div class="row single-gutter">
                    <div class="col-sm-8">
                        <div class="row single-gutter">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">P&aring; tur med 1. klasserne</h4>
                                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>
                                    </div>
                                    <div class="panel-collapse collapse in">
                                        <div class="panel-body ">
                                            <div class="row single-gutter">
                                                <div class="col-ms-6"><img src="http://placekitten.com/350/280" class="media-object" style="max-width: 100%"></div>
                                                <div class="col-ms-6">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus [...]</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="text-right">
                                                <a href="#">L&aelig;s mere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row single-gutter">
                            <div class="col-ms-6">
                                <div class="post-it yellow">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </div>
                            <div class="col-ms-6">
                                <div class="post-it yellow">
                                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est</p>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row single-gutter">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Vejledninger til programmet</h4>
                                    <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>

                                </div>
                                <div class="panel-collapse collapse in">
                                    <div class="panel-body ">
                                        <div class="col-ms-6"><img src="http://placekitten.com/340/290" class="media-object" style="max-width: 100%"></div>
                                        <div class="col-ms-6 ">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="fa fa-street-view" aria-hidden="true"></i>
                                Status
                            </h4>
                            <a href="#" class="toggle_collapse"><i class="fa fa-chevron-down"></i></a>

                        </div>
                        <div class="panel-collapse collapse in">
                            <div class="panel-body">
                                Ikke kommet
                            </div>
                        </div>
                    </div>

                        <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title text-center">
                                <a href="#" class="pull-left"><i class="fa fa-chevron-left"></i></a>
                                Uge 10
                                <a href="#" class="pull-right"><i class="fa fa-chevron-right"></i></a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse in">

                                <table class="table">

                                    <tr>
                                        <th colspan="2">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            Mandag 6. marts</th>
                                    </tr>
                                    <tr>
                                        <td>14:00</td>
                                        <td>Hentes af farfar John <br> Hush taske og madpakke.</td>
                                    </tr>

                                    <tr>
                                        <th colspan="2"><i class="fa fa-calendar" aria-hidden="true"></i> Tirsdag 7. marts</th>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <th colspan="2">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> Onsdag 8. marts
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <th colspan="2">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> Torsdag 9. marts
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <th colspan="2">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> Fredag 10. marts
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>-</td>
                                        <td>Ferie/Fri</td>
                                    </tr>

                                </table>

                        </div>
                    </div>

                        <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                F&oslash;dselsdage</h4>
                            <a href="#" class="toggle_collapse">
                                <i class="fa fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="panel-collapse collapse in">
                            <div class="panel-body">
                                <h5>F&oslash;dselsdag i dag:</h5>

                                <div class="media" style="background-color: #eee; padding-right: 10px">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" width="50px" src="http://lorempixel.com/120/120/people" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body">

                                            <h5 class="media-heading" style="font-weight: bold; margin-bottom: 0; margin-top: 2px">Bruce Banner</h5>
                                            13 &aring;r<span class="pull-right">9. klasse</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                        <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <h4 class="panel-title">
                                <i class="fa fa-image" aria-hidden="true"></i>
                                Billeder
                            </h4>
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
