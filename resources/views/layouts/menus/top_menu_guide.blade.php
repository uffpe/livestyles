<nav id="top_header" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-left" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <a class="navbar-brand" href="#">Living Style Guide</a>
        </div>


        <ul class="nav navbar-nav navbar-right">


            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <span class="hidden-xs">{{ Auth::user()->name }}
                            <span class="hidden-xs hidden-sm txt_secondary"> </span>
                        </span>
                        <span class="sr-only">Min profil menu</span>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('guide') }}">Live style guide</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('basic-grid') }}">Basic grid</a></li>
                        <li><a href="{{ route('login-demo') }}">Login demo</a></li>
                        <li><a href="{{ route('personal-data') }}">Stamkort</a></li>
                        <li><a href="{{ route('child-grid') }}">Children grid</a></li>
                        <li><a href="{{ route('messages') }}">Kommunikation</a></li>
                        <li><a href="{{ route('parents-desktop') }}">Opslagstavle - for&aelig;ldre</a></li>
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
