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

                </div><!-- /.container-fluid -->
            </nav>

            <div class="container-fluid">
                <div class="page-header">
                    <h2>Find b&oslash;rn</h2>
                </div>

                <ul class="list-group children-grid">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-3"><img src="http://livestyles.dev/images/male_icon_120x120.png" alt=""></div>
                            <div class="col-md-9">456</div>
                        </div>
                    </li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>

            </div>



        </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection
