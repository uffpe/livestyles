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
    <link rel="stylesheet" type="text/css" href="https://www.sfoweb.dk/css/generic.css">
    <link rel="stylesheet" type="text/css" href="https://www.sfoweb.dk/css/sfoweb.css">

    <!-- new styles -->
    <link href="https://personale.devsfoweb.dk/css/main.css?{{ time() }}" rel="stylesheet">

    <!-- Used for syntax highlighting only -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/atom-one-light.min.css">

    <style>
        /* FONT PATH - Temporary fix when guide runs from local computer */
        @font-face {
            font-family: 'FontAwesome';
            src: url("{{ asset('fonts/fontawesome-webfont.eot?v=4.7.0') }}");
            src: url("{{ asset('fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') }}") format("embedded-opentype"),
            url("{{ asset('fonts/fontawesome-webfont.woff2?v=4.7.0') }}") format("woff2"),
            url("{{ asset('fonts/fontawesome-webfont.woff?v=4.7.0') }}") format("woff"),
            url("{{ asset('fonts/fontawesome-webfont.ttf?v=4.7.0') }}") format("truetype"),
            url("{{ asset('fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') }}") format("svg");
            font-weight: normal;
            font-style: normal; }
    </style>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>

    <script src="https://personale.devsfoweb.dk/js/tabulex.ui.js?{{ time() }}"></script>
    <script src="{{ asset('js/tabulex.guide.js') }}?{{ time() }}"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div class="main-container">
        <div class="main-container__overlay"></div>

        @include('layouts.menus.top_menu_guide')

        <div class="main-container__content container">
            @include('layouts.menus.main_menu')
            @yield('content')
        </div>
    </div><!-- /#main_container -->

    <script>
        // STYLE-GUIDE ONLY function
        (function(){
            @if(isset($_GET["p"]))
                $(".guide-parts#<?= $_GET['p'] ?>").show();
            @else
                $(".guide-parts:first-child").show();
            @endif
        })();

        if(window.location.hash){
            activeSubmenu(window.location.hash.substr(1));
        } else {
            $("ul.nav-mainmenu__list li:first-child li:first-child").addClass("active");
        }

        function activeSubmenu(submenu){
            $("ul.list-group-submenu li").removeClass("active");
            $("li." + submenu).addClass("active");
            console.log("li." + submenu);
        }

    </script>
</body>
</html>
