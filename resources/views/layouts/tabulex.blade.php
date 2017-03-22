<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IST - Tabulex') }}</title>

    <!-- Current old styles -->
    <link href="https://www.sfoweb.dk/css/tmsfo/style.css?v=1488928677" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://www.sfoweb.dk/css/tmsfo/style_sfoweb.css">
    <link rel="stylesheet" type="text/css" href="https://www.sfoweb.dk/lib/jquery-ui/css/smoothness/jquery-ui-1.10.3.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.sfoweb.dk/css/tmsfo/jScrollPane.css">
    <link rel="stylesheet" type="text/css" href="https://www.sfoweb.dk/css/tmsfo/scrollbar.css?v=1488928677">
    {{--<link rel="stylesheet" type="text/css" href="https://www.sfoweb.dk/css/generic.css">--}}
    <link rel="stylesheet" type="text/css" href="https://www.sfoweb.dk/css/sfoweb.css">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}?{{ time() }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/atom-one-light.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body{!! $has_submenu === true ? ' class=include-subbar' : '' !!}>
<div class="main-container">
    <div class="main-container__overlay"></div>

    @include('layouts.menus.top_menu')

    <div class="main-container__content container">
        @include('layouts.menus.main_menu')
        @yield('content')
    </div>
</div><!-- /container -->

</div><!-- /#main_container -->

<!-- Modal -->
<div class="modal fade" id="change_department" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-home"></i> V&aelig;lg afdelign</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default panel_selector">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#juniorklub">
                                <i class="fa fa-home"></i> Juniorklub
                                <span class="count pull-right">8 / 24</span>
                            </a></h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 0B</div>
                                <div class="col-xs-6 text-right">5</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 1B</div>
                                <div class="col-xs-6 text-right">10</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 2B</div>
                                <div class="col-xs-6 text-right">1</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel_selector">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#maanehoejA">
                                <i class="fa fa-home"></i> M&aring;neh&oslash;jen A
                                <span class="count pull-right">0 / 18</span>
                            </a></h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 0B</div>
                                <div class="col-xs-6 text-right">5</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 1B</div>
                                <div class="col-xs-6 text-right">10</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 2B</div>
                                <div class="col-xs-6 text-right">1</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel_selector">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#maanehoejB">
                                <i class="fa fa-home"></i> M&aring;neh&oslash;jen B
                                <span class="count pull-right">16 / 20</span>
                            </a></h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 0B</div>
                                <div class="col-xs-6 text-right">5</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 1B</div>
                                <div class="col-xs-6 text-right">10</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 2B</div>
                                <div class="col-xs-6 text-right">1</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel_selector">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#solhojen">
                                <i class="fa fa-home red"></i> Solh&oslash;jen B
                                <span class="count pull-right">8 / 19</span>
                            </a></h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 0B</div>
                                <div class="col-xs-6 text-right">5</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 1B</div>
                                <div class="col-xs-6 text-right">10</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 2B</div>
                                <div class="col-xs-6 text-right">1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuller</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="calendar_view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-home"></i> V&aelig;lg afdelign</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default panel_selector">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#juniorklub">
                                <i class="fa fa-home"></i> Juniorklub
                                <span class="count pull-right">8 / 24</span>
                            </a></h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 0B</div>
                                <div class="col-xs-6 text-right">5</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 1B</div>
                                <div class="col-xs-6 text-right">10</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 2B</div>
                                <div class="col-xs-6 text-right">1</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel_selector">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#maanehoejA">
                                <i class="fa fa-home"></i> M&aring;neh&oslash;jen A
                                <span class="count pull-right">0 / 18</span>
                            </a></h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 0B</div>
                                <div class="col-xs-6 text-right">5</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 1B</div>
                                <div class="col-xs-6 text-right">10</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 2B</div>
                                <div class="col-xs-6 text-right">1</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel_selector">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#maanehoejB">
                                <i class="fa fa-home"></i> M&aring;neh&oslash;jen B
                                <span class="count pull-right">16 / 20</span>
                            </a></h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 0B</div>
                                <div class="col-xs-6 text-right">5</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 1B</div>
                                <div class="col-xs-6 text-right">10</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 2B</div>
                                <div class="col-xs-6 text-right">1</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel_selector">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#solhojen">
                                <i class="fa fa-home red"></i> Solh&oslash;jen B
                                <span class="count pull-right">8 / 19</span>
                            </a></h4>
                        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 0B</div>
                                <div class="col-xs-6 text-right">5</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 1B</div>
                                <div class="col-xs-6 text-right">10</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><i class="fa fa-user"></i> 2B</div>
                                <div class="col-xs-6 text-right">1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuller</button>
            </div>
        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>

    <script src="{{ asset('js/tabulex.js') }}?{{ time() }}"></script>
</body>
</html>
