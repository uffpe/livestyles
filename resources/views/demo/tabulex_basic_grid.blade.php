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
                        <h1>h1 - Big header</h1>
                        <p>"Oswald", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 36px - font-weight: 500</p>
                        <hr>
                        <h2>h2 - Main UI header</h2>
                        <p>"Oswald", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 30px - font-weight: 500</p>
                        <hr>
                        <h3>h3 - Sub header</h3>
                        <p>"Oswald", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 24px - font-weight: 500</p>
                        <hr>
                        <h4>h4 - Small header</h4>
                        <p>"Roboto", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 18px - font-weight: 500</p>
                        <hr>
                        <p>p - Body text</p>
                        <p>"Roboto", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 14px - font-weight: 300</p>
                        <hr>
                        <strong>strong - Important body text</strong>
                        <p>"Roboto", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 14px - font-weight: 500</p>
                        <hr>
                        <small>small - Caption text</small>
                        <p>"Roboto", Helvetica, Arial, sans-serif  - line-height: 1 - font-size: 12px - font-weight: 300</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->
@endsection
