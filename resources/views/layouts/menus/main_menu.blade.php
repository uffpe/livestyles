<!-- Main menu -->
<nav class="nav-mainmenu" role="navigation" aria-label="Hovedmenu">
    <ul class="nav-mainmenu__list nav nav-stacked list-group">

        <li class="list-group-header">
            <a href="#close" class="list-group-item">
                <span class="fa-stack" aria-hidden="true">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </span>
                Menu
                <span class="fa-stack pull-right" aria-hidden="true">
                   <i class="fa fa-close" aria-hidden="true"></i>
                </span>
            </a>
        </li>

        @if(!empty($main_menu_items))
            @foreach($main_menu_items as $menu_item)
                <?php
                    $this_page = '';
                    if(isset($_GET['p'])) $this_page = $_GET['p'];
                ?>
            @if(!empty($menu_item['sub_items']))
                    <li id="{!! '¨menu_'.$menu_item['url'] !!}" class="collapse{!! $menu_item['is_active'] === true || $this_page === $menu_item['url'] ? ' active' : '' !!}">
                        <a href="#{{ $menu_item['url'] }}" class="list-group-item {!! $this_page === $menu_item['url'] ? '' : 'collapsed' !!}" data-toggle="collapse" data-parent="#mainmenu" role="button" aria-expanded="{!! $this_page === $menu_item['url'] ? 'true' : 'false' !!}">
                            <span class="fa-stack" aria-hidden="true">
                                 <i class="fa {{ $menu_item['icon'] }}" aria-hidden="true"></i>
                            </span>
                            {{$menu_item['label']}}
                            <span class="caret" aria-hidden="true"></span>
                        </a>
                        @if(!empty($menu_item['sub_items']))
                            <ul class="list-group-submenu collapse {!! $this_page === $menu_item['url'] ? 'in' : '' !!}" id="{{ $menu_item['url'] }}" aria-expanded="{!! $this_page === $menu_item['url'] ? 'true' : 'false' !!}">
                            @foreach($menu_item['sub_items'] as $sub_item)
                                <li class="list-group-item {{ $sub_item['subclass'] }}" data-parent="#{{ $menu_item['url'] }}"><a href="{{ $sub_item['url'] }}#{{ $sub_item['subclass'] }}" onclick="activeSubmenu('{{ $sub_item['subclass'] }}')">{{ $sub_item['label'] }}</a></li>
                            @endforeach
                            </ul>
                        @endif
                    </li>
                @else
                    <li class="{!! $menu_item['is_active'] === true || $this_page === $menu_item['url'] ? ' active' : '' !!}{!! !empty($menu_item['sub_items']) ? ' collapse' : '' !!}">
                        <a href="{{ $menu_item['url'] }}" class="list-group-item">

                            <span class="fa-stack" aria-hidden="true">
                                 <i class="fa {{ $menu_item['icon'] }}" aria-hidden="true"></i>
                            </span>
                            {{$menu_item['label']}}
                        </a>
                    </li>
                @endif
            @endforeach
        @else
            <li><a href="#menu1" class="list-group-item">
                   <span class="fa-stack" aria-hidden="true">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                   </span>
                    Check-in</a>
                </a></li>
            <li><a href="#menu2" class="list-group-item">
                    <span class="fa-stack" aria-hidden="true">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </span>
                    Her og nu
                </a></li>
            <li class="active"><a href="#menu3" class="list-group-item">
                    <span class="fa-stack" aria-hidden="true">
                        <i class="fa fa-child" aria-hidden="true"></i>
                    </span>
                    Find b&oslash;rn
                </a></li>
            <li><a href="#menu4" class="list-group-item">
                    <span class="fa-stack" aria-hidden="true">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                    Hvem er hvor
                </a></li>
            <li class="collapse">
                <a href="#menu5" class="list-group-item collapsed" data-toggle="collapse" data-parent="#mainmenu" role="button" aria-expanded="false" aria-haspopup="true">
                    <span class="fa-stack" aria-hidden="true">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
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
                <a href="#menu6" class="list-group-item collapsed" data-toggle="collapse" data-parent="#mainmenu" role="button" aria-expanded="false" aria-haspopup="true">
                    <span class="fa-stack" aria-hidden="true">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
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
                    <span class="fa-stack" aria-hidden="true">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    </span>
                    Lister
                </a></li>
            <li class="collapse">
                <a href="#menu8" class="list-group-item collapsed" data-toggle="collapse" data-parent="#mainmenu" role="button" aria-expanded="false" aria-haspopup="true">
                    <span class="fa-stack" aria-hidden="true">
                        <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
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