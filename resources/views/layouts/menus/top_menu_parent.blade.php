<nav id="top_header" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="sr-only">Toggle navigation</span>
                {{--<i class="mdi md-24" aria-hidden="true">menu</i>--}}
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="#" role="button" data-toggle="modal" data-target="#change_department">
                    <span class="navbar-list-image"><img src="{{ asset('images/male_icon_120x120.png') }}" alt="Peter Parker" /></span>
                    <span class="hidden-xs">Peter Parker</span>
                </a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#link">
                    <span class="has-badge-wrapper">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span class="badge badge-add">+</span>
                    </span>
                    <span class="hidden-xs">Opret aftale</span>
                </a>
            </li>
            <li><a href="#link">
                    <span class="has-badge-wrapper">
                        <i class="fa fa-medkit" aria-hidden="true"></i>
                        <span class="badge badge-add">+</span>
                    </span>
                    <span class="hidden-xs">Meld syg</span>
                </a>
            </li>
            <li><a href="#link">
                    <span class="has-badge-wrapper">
                        <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                        <span class="badge badge-add">+</span>
                    </span>
                    <span class="hidden-xs">Meld fridag</span>
                </a>
            </li>

            <li><a href="#link">
                    <span class="has-badge-wrapper">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                        <span class="badge notification">42</span>
                    </span>
                    <span class="hidden-xs">Beskeder</span>
                </a>
            </li>

            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="hidden-xs">
                            <span class="hidden-xs hidden-sm txt_secondary"> </span>
                        </span>
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