<!-- Main menu -->
<nav class="nav-mainmenu" role="navigation" aria-label="Hovedmenu">
    <ul class="nav-mainmenu__list nav nav-stacked list-group">
        @if(!empty($main_menu_items))
            @foreach($main_menu_items as $menu_item)
                <li{!! $menu_item['is_active'] === true ? ' class="active"' : '' !!}{!! !empty($menu_item['sub_items']) ? ' class="collapse"' : '' !!}>
                    <a href="{{ $menu_item['url'] }}" class="list-group-item">
                        <span class="fa-stack fa-lg" aria-hidden="true"><i class="fa {{ $menu_item['icon'] }} fa-stack-1x"></i></span>
                        {{$menu_item['label']}}
                    </a>
                    @if(!empty($menu_item['sub_items']))
                        <ul class="list-group-submenu collapse in" id="menu5" aria-expanded="true">
                        @foreach($menu_item['sub_items'] as $sub_item)
                            <li class="list-group-item" data-parent="#menu5"><a href="#">Action</a></li>
                        @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        @else
        <li class="active"><a href="#menu1" class="list-group-item">
               <span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-dashboard fa-stack-1x"></i></span>
                Forside</a>
            </a></li>
        <li><a href="#menu2" class="list-group-item">
                <span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-dashboard fa-stack-1x "></i></span>
                Her og nu
            </a></li>
        <li><a href="#menu3" class="list-group-item">
                <span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-dashboard fa-stack-1x "></i></span>
                Find b&oslash;rn
            </a></li>
        <li><a href="#menu4" class="list-group-item">
                <span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-dashboard fa-stack-1x "></i></span>
                Hvem er hvor
            </a></li>
        <li class="collapse">
            <a href="#menu5" class="list-group-item" data-toggle="collapse" data-parent="#mainmenu" role="button">
                <span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-dashboard fa-stack-1x "></i></span>
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
                <span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-dashboard fa-stack-1x "></i></span>
                Planl&aelig;ning <span class="caret"></span>
            </a>
            <ul class="collapse list-group-submenu" id="menu6">
                <li class="list-group-item" data-parent="#menu6"><a href="#">Action</a></li>
                <li class="list-group-item" data-parent="#menu6"><a href="#">Another action</a></li>
                <li class="list-group-item" data-parent="#menu6"><a href="#">Something else here</a></li>
            </ul>
        </li>
        <li><a href="#menu7" class="list-group-item">
                <span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-dashboard fa-stack-1x "></i></span>
                Lister
            </a></li>
        <li class="collapse">
            <a href="#menu8" class="list-group-item" data-toggle="collapse" data-parent="#mainmenu" role="button">
                <span class="fa-stack fa-lg" aria-hidden="true"><i class="fa fa-dashboard fa-stack-1x "></i></span>
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