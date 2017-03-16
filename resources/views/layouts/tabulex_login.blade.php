<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body{{ $has_submenu === true ? ' class=include-subbar' : '' }}>
<div id="main-container">
    <div class="main-wrapper__overlay"></div>

    @include('layouts.menus.top_menu_login')

    <div class="main-wrapper__content container">
        @yield('content')
    </div>
</div><!-- /container -->

</div><!-- /#main_container -->

<footer class="login_footer">
    @yield('footer_content')
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/lib/bootstrap.min.js"></script>
<script src="../js/tabulex.js"></script>
</body>
</html>
