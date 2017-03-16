<nav id="header" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-clock">
            <a href="#clock">
                <span class="hidden-xs">{{ date('H:i:s') }}</span>
                <i class="mdi md-18" aria-hidden="true" style="margin-bottom: -4px">access_time</i>
                <span>{{ date('d-m-Y') }}</span>
                <i class="fa fa-calendar fa-md visible-xs-inline" aria-hidden="true"></i>
            </a>
        </div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
{{--                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>--}}
                <i class="mdi md-24" aria-hidden="true">menu</i>
            </button>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="#" role="button" data-toggle="modal" data-target="#change_department">
                    <i class="mdi md-18" aria-hidden="true" style="margin-bottom: -4px">home</i>
                    <span class="hidden-xs">Afdeling B</span>
                </a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#link">
                    <i class="mdi md-18" aria-hidden="true" style="margin-bottom: -4px">block</i>
                </a></li>
            <li><a href="#link">
                    <i class="mdi md-18" aria-hidden="true" style="margin-bottom: -4px">chat_bubble_outline</i>
                </a>
            </li>


            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="hidden-xs">{{ Auth::user()->name }}
                            <span class="hidden-xs hidden-sm txt_secondary"> </span>
                        </span>
                        <i class="mdi md-18" aria-hidden="true" style="margin-bottom: -4px">person</i>
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('guide') }}">Live style guide</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('basic-grid') }}">Basic grid</a></li>
                        <li><a href="{{ route('login-demo') }}">Login demo</a></li>
                        <li><a href="{{ route('personal-data') }}">Stamkort</a></li>
                        <li><a href="{{ route('child-grid') }}">Children grid</a></li>
                        <li><a href="{{ route('parents-dekstop') }}">Opslagstavle - for&aelig;ldre</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div><!-- /container -->
</nav>