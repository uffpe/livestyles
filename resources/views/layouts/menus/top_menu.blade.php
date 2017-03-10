<nav id="header" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-clock">
            <a href="#clock">
                <span class="hidden-xs">{{ date('H:i:s') }}</span>
                <i class="fa fa-clock-o fa-lg hidden-xs" aria-hidden="true"></i>
                <span>{{ date('d-m-Y') }}</span>
                <i class="fa fa-calendar fa-md visible-xs-inline" aria-hidden="true"></i>
            </a>
        </div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-building fa-lg" aria-hidden="true"></i>
                    <span class="hidden-xs">Afdeling B</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#Afd-a">Afdeling A</a></li>
                    <li><a href="#Afd-b">Afdeling B</a></li>
                    <li class="dropdown-submenu">
                        <a href="#Afd-c" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Afdeling C <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li><a href="#Sommerfuglen">Sommerfuglen</a></li>
                    <li><a href="#Stjernen">Stjernen</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#link">
                    <i class="fa fa-ban fa-lg" aria-hidden="true"></i>
                </a></li>
            <li><a href="#link">
                    <i class="fa fa-comment-o fa-lg" aria-hidden="true"></i>
                </a>
            </li>


            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="hidden-xs">{{ Auth::user()->name }}
                            <span class="hidden-xs hidden-sm txt_secondary"> - Teacher </span>
                        </span> <i class="fa fa-user fa-lg" aria-hidden="true"></i>  <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">First link </a></li>
                        <li><a href="#">Second link</a></li>
                        <li><a href="#">This is the third link</a></li>
                        <li><a href="#">4th link</a></li>
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