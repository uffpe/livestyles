@extends('layouts.tabulex')
@section('content')
    <div id="content-div">
        <div class="content-div_wrapper">

            <nav id="sub-header" class="navbar navbar-inverse navbar-fixed-top">
                <div class="container" style="outline: none;">
                    <!-- Navbar links - right -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Klasser <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul><!-- Navbar links - right -->

                </div><!-- /.container -->
            </nav>

            <div class="container-fluid">
                <div class="page-header">
                    <h2>Check-in</h2>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">



                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-check" aria-hidden="true"></i>Medlemmer</h4>
                            </div>
                            <div class="panel-body" style="padding: 0;">
                                <button class="btn btn-secondary btn-sm btn-block" type="button">Udfør for gruppen</button>
                            </div>

                            <!-- List group -->
                            <div class="list-group list-condensed">
                                <a href="#1" class="list-group-item flex-group">
                                    <div class="flex-group-item">
                                        <i class="fa fa-times icon-danger fa-lg" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex-group-item">
                                        0B
                                    </div>
                                    <div class="flex-group-item flex-item-stretch">
                                        <b class="txt">Bruce B</b>
                                    </div>
                                    <div class="flex-group-item">
                                        <button class="btn btn-primary btn-sm" type="button" title="Meld syg">
                                            <i class="fa fa-medkit" aria-hidden="true"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm" type="button" title="Opret en aftale">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </a>


                                <a href="#2" class="list-group-item flex-group">
                                    <div class="flex-group-item">
                                        <i class="fa fa-times icon-danger fa-lg" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex-group-item">
                                        0B
                                    </div>
                                    <div class="flex-group-item flex-item-stretch">
                                        <b class="txt">Clark K</b>
                                    </div>
                                    <div class="flex-group-item">
                                        <button class="btn btn-primary btn-sm" type="button" title="Meld syg">
                                            <i class="fa fa-medkit" aria-hidden="true"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm" type="button" title="Opret en aftale">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </a>


                                <a href="#3" class="list-group-item flex-group">
                                    <div class="flex-group-item">
                                        <i class="fa fa-times icon-danger fa-lg" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex-group-item">
                                        0B
                                    </div>
                                    <div class="flex-group-item flex-item-stretch">
                                        <b class="txt">Harvey D</b>
                                    </div>
                                    <div class="flex-group-item">
                                        <button class="btn btn-primary btn-sm" type="button" title="Meld syg">
                                            <i class="fa fa-medkit" aria-hidden="true"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm" type="button" title="Opret en aftale">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </a>


                                <a href="#4" class="list-group-item flex-group list-group-item-success">
                                    <div class="flex-group-item" style="">
                                        <i class="fa fa-home icon-success fa-lg" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex-group-item" style="">
                                        0B
                                    </div>
                                    <div class="flex-group-item flex-item-stretch">
                                        <b class="txt">Maximilliano J</b>
                                    </div>
                                    <div class="flex-group-item" style="">
                                        <button class="btn btn-primary btn-sm" type="button" title="Meld syg">
                                            <i class="fa fa-medkit" aria-hidden="true"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm" type="button" title="Opret en aftale">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </a>


                                <a href="#5" class="list-group-item flex-group">
                                    <div class="flex-group-item">
                                        <i class="fa fa-times icon-danger fa-lg" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex-group-item">
                                        0B
                                    </div>
                                    <div class="flex-group-item flex-item-stretch">
                                        <b class="txt">Samantha B</b>
                                    </div>
                                    <div class="flex-group-item">
                                        <button class="btn btn-primary btn-sm" type="button" title="Meld syg">
                                            <i class="fa fa-medkit" aria-hidden="true"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm" type="button" title="Opret en aftale">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </a>


                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- /.container-fluid -->




        </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection
