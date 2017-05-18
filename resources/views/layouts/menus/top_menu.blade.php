<nav id="top_header" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-clock">
            <a href="#clock" role="button" data-toggle="modal" data-target="#calendar_view">
                <span class="hidden-xs">{{ date('H:i:s') }} </span>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span class="hidden-xs"> {{ date('d-m-Y') }}</span>
            </a>
        </div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="#" role="button" data-toggle="modal" data-target="#change_department" aria-label="Skift afdeling">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="hidden-xs">Afdeling B</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    Left menu
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Submenu 1</a></li>
                    <li><a href="#">Submenu 2</a></li>
                    <li><a href="#">Submenu 3</a></li>
                </ul>
            </li>
        </ul>


        <ul class="nav navbar-nav navbar-right">
            <li><a href="#link">
                    <i class="fa fa-ban" aria-hidden="true"></i>
                </a>
            </li>

            <li><a href="#link">
                    <span class="has-badge-wrapper">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                        <span class="badge">42</span>
                    </span>
                </a>
            </li>


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
                        <li><a href="{{ route('parents-desktop') }}">Opslagstavle - for&aelig;ldre</a></li>
                        <li><a href="{{ route('messages') }}">Kommunikation</a></li>
                        <li><a href="{{ route('readmessages') }}">Læs/svar beskeder</a></li>
                        <li><a href="{{ route('gallery') }}">Gallerier</a></li>
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
