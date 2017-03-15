<!-- Main menu -->
<nav class="nav-mainmenu" role="navigation" aria-label="Hovedmenu">
    <ul class="nav-mainmenu__list nav nav-stacked list-group">
        @if(!empty($main_menu_items))
            @foreach($main_menu_items as $menu_item)
                @if(!empty($menu_item['sub_items']))
                    <li class="collapse{!! $menu_item['is_active'] === true ? ' active' : '' !!}">
                        <a href="#{{ $menu_item['url'] }}" class="list-group-item collapsed" data-toggle="collapse" data-parent="#mainmenu" role="button" aria-expanded="false">
                            <span class="fa-stack fa-lg" aria-hidden="true">
                                <i class="mdi md-24" aria-hidden="true">{{ $menu_item['icon'] }}</i>
                            </span>
                            {{$menu_item['label']}}
                            <span class="caret"></span>
                        </a>
                        @if(!empty($menu_item['sub_items']))
                            <ul class="list-group-submenu collapse" id="{{ $menu_item['url'] }}" aria-expanded="true">
                            @foreach($menu_item['sub_items'] as $sub_item)
                                <li class="list-group-item" data-parent="#{{ $menu_item['url'] }}"><a href="#">{{ $sub_item }}</a></li>
                            @endforeach
                            </ul>
                        @endif
                    </li>
                @else
                    <li{!! $menu_item['is_active'] === true ? ' class="active"' : '' !!}{!! !empty($menu_item['sub_items']) ? ' class="collapse"' : '' !!}>
                        <a href="#{{ $menu_item['url'] }}" class="list-group-item">
                            <span class="fa-stack fa-lg" aria-hidden="true">
                                <i class="mdi md-24" aria-hidden="true">{{ $menu_item['icon'] }}</i>
                            </span>
                            {{$menu_item['label']}}
                        </a>
                    </li>
                @endif
            @endforeach
        @else
            <li class="active"><a href="#menu1" class="list-group-item">
                   <span class="fa-stack fa-lg" aria-hidden="true">
                       <i class="mdi md-24" aria-hidden="true">home</i>
                   </span>
                    Forside</a>
                </a></li>
            <li><a href="#menu2" class="list-group-item">
                    <span class="fa-stack fa-lg" aria-hidden="true">
                        <i class="mdi md-24" aria-hidden="true">access_time</i>
                    </span>
                    Her og nu
                </a></li>
            <li><a href="#menu3" class="list-group-item">
                    <span class="fa-stack fa-lg" aria-hidden="true">
                        <i class="mdi md-24" aria-hidden="true">accessibility</i>
                    </span>
                    Find b&oslash;rn
                </a></li>
            <li><a href="#menu4" class="list-group-item">
                    <span class="fa-stack fa-lg" aria-hidden="true">
                        <i class="mdi md-24" aria-hidden="true">map</i>
                    </span>
                    Hvem er hvor
                </a></li>
            <li class="collapse">
                <a href="#menu5" class="list-group-item" data-toggle="collapse" data-parent="#mainmenu" role="button">
                    <span class="fa-stack fa-lg" aria-hidden="true">
                       <i class="mdi md-24" aria-hidden="true">chat</i>
                    </span>
                    Kommunikation <span class="caret"></span>
                </a>
                <ul class="collapse list-group-submenu" id="menu5">
                    <li class="list-group-item" data-parent="#menu5"><a href="#">Action</a></li>
                    <li class="list-group-item" data-parent="#menu5"><a href="#">Another action</a></li>
                    <li class="list-group-item" data-parent="#menu5"><a href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="collapse">
                <a href="#menu6" class="list-group-item" data-toggle="collapse" data-parent="#mainmenu" role="button">
                    <span class="fa-stack fa-lg" aria-hidden="true">
                        <i class="mdi md-24" aria-hidden="true">event</i>
                    </span>
                    Planl&aelig;ning <span class="caret"></span>
                </a>
                <ul class="collapse list-group-submenu" id="menu6">
                    <li class="list-group-item" data-parent="#menu6"><a href="#">Action</a></li>
                    <li class="list-group-item" data-parent="#menu6"><a href="#">Another action</a></li>
                    <li class="list-group-item" data-parent="#menu6"><a href="#">Something else here</a></li>
                </ul>
            </li>
            <li><a href="#menu7" class="list-group-item">
                    <span class="fa-stack fa-lg" aria-hidden="true">
                        <i class="mdi md-24" aria-hidden="true">list</i>
                    </span>
                    Lister
                </a></li>
            <li class="collapse">
                <a href="#menu8" class="list-group-item" data-toggle="collapse" data-parent="#mainmenu" role="button">
                    <span class="fa-stack fa-lg" aria-hidden="true">
                        <i class="mdi md-24" aria-hidden="true">settings</i>
                    </span>
                    Administratorer <span class="caret"></span>
                </a>
                <ul class="collapse list-group-submenu" id="menu8">
                    <li class="list-group-item" data-parent="#menu8"><a href="#">Action</a></li>
                    <li class="list-group-item" data-parent="#menu8"><a href="#">Another action</a></li>
                    <li class="list-group-item" data-parent="#menu8"><a href="#">Something else here</a></li>
                </ul>
            </li>
        @endif
    </ul>
</nav><!-- /#nav-mainmenu -->