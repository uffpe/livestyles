@extends('layouts.tabulex')
@section('content')
    <!-- Page Content -->
    <div id="content-div">
        <div class="content-div__wrapper">

            <nav id="sub-header" class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">

                    <!-- Navbar links - right -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                V&aelig;lg <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#print"><span class="hidden-xs">Print</span> <i class="fa fa-print fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#gem"><span class="hidden-xs">Gem alt</span> <i class="fa fa-save fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                V&aelig;lg element <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul><!-- Navbar links - right -->

                </div><!-- /.container-fluid -->
            </nav>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Overskrift</h1>
                        <p>This testpage shows the basic responsive and grid for the main content. It also have the top navigantion and the main sidemenu.  </p>
                        <p>Make sure to keep all page content within the <code>#content-div_wrapper</code>.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection
