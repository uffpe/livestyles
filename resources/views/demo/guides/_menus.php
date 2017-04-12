<?php

$guide_menus = [
    [
        'title' => 'Basic nav Menu',
        'is_anchor' => true,
        'desc' => '<p>The base navigational menu is a stacked list-group (<code>.list-group .nav .nav-stacked</code>) containing one or more elements (<code>.list-group-item</code>) with links and related icons.</p>',
        'code' => '
{code}<!-- Menu list -->
<ul class="nav nav-stacked">
    <li>
        <a href="menu1" class="list-group-item">        
            <span class="fa-stack" aria-hidden="true"><i class="fa fa-check"></i></span>
            Menu element 1
        </a>
    </li>
    <li>
        <a href="menu2" class="list-group-item">        
            <span class="fa-stack" aria-hidden="true"><i class="fa fa-check"></i></span>
            Menu element 2
        </a>
    </li>
</ul>
{/code}'],[
        'title' => 'Nav Menu with submenu',
        'is_anchor' => true,
        'desc' => '<p>The base navigational menu is a <b>ul</b> list <code>.list-group .nav</code> containing one or more list-elements with links <code>.list-group-item</code> and related icons.</p>',
        'code' => '
{code}<!-- Menu list -->
<ul class="list-group nav nav-stacked">
    <li>
        <a href="#menu1" class="list-group-item" data-toggle="collapse" role="button" aria-expanded="false" aria-haspopup="true">
            <span class="fa-stack" aria-hidden="true"><i class="fa fa-th-list"></i></span>
            Menu element 1
            <span class="caret" aria-hidden="true"></span>
        </a>
        <ul class="list-group-submenu collapse" id="menu1" aria-label="submenu">
            <li class="list-group-item" data-parent="#menu1">
                <a href="#">Submenu 1</a>
            </li>
            <li class="list-group-item" data-parent="#menu1">
                <a href="#">Submenu 2</a>
            </li>
        </ul>
    </li>
</ul>
{/code}'],[
        'title' => 'Nav Menu - Active state',
        'is_anchor' => true,
        'desc' => '<p>The currently chosen menu element should be attached with an <code>.active</code> class on the li-tag.</p>',
        'code' => '
{code}<!-- Menu list -->
<ul class="list-group nav nav-stacked">
    <li class="active">
        <a href="menu3" class="list-group-item">        
            <span class="fa-stack" aria-hidden="true"><i class="fa fa-check" aria-hidden="true"></i></span>
            Menu element 1
        </a>
    </li>
    <li>
        <a href="menu3" class="list-group-item">        
            <span class="fa-stack" aria-hidden="true"> <i class="fa fa-check" aria-hidden="true"></i></span>
            Menu element 2
        </a>
    </li>
</ul>
{/code}']
];