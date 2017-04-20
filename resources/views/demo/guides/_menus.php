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
        'desc' => '<p>The base navigational menu is a <b>ul</b> list <code>.list-group .nav</code> containing one or more list-elements with links <code>.list-group-item</code> and related icons.</p>
                    <p><b>Collapse button:</b>
                    <ul>
                        <li>Include a <code>data-toggle=collapsed</code> and a <code>aria-haspopup</code> on the button indicates that a popup i available. This is important to include because the submenu is hidden from screen-readers when it is collapsed.</li>
                        <li>The <code>aria-expanded</code> tells screen readers if the submenu is collapsed or not.</li>
                        <li>When the list has a submenu the <code>caret</code> is included. This has the <code>aria-hidden=true</code> applied to it to hide it from screen readers (Only a visual helper element).</li>
                    </ul>
                    </p>
                    <p><b>Submenu:</b>
                    <ul>
                        <li>Use the <code>aria-label</code> to provide an accessible label to indicate what the dropdown menu is.</li>
                        <li>If the submenu is open from start include the class <code>in</code> on the <b>ul</b> part of the submenu list.</li>
                    </ul>
                    </p>',
        'code' => '
{code}<!-- Menu list -->
<ul class="list-group nav nav-stacked">
    <li>
        <a href="#menu1" class="list-group-item collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-haspopup="true">
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
        <a href="#menu1_active" class="list-group-item" data-toggle="collapse" role="button" aria-expanded="true" aria-haspopup="true">        
            <span class="fa-stack" aria-hidden="true"><i class="fa fa-check" aria-hidden="true"></i></span>
            Menu element 1 (Submenu open)
            <span class="caret" aria-hidden="true"></span>
        </a>
        <ul class="list-group-submenu collapse in" id="menu1_active" aria-label="submenu">
            <li class="list-group-item" data-parent="#menu1_active">
                <a href="#">Submenu 1</a>
            </li>
            <li class="list-group-item  active" data-parent="#menu1_active">
                <a href="#">Submenu 2</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="list-group-item">       
            <span class="fa-stack" aria-hidden="true"><i class="fa fa-check" aria-hidden="true"></i></span>
            Menu element 2
        </a>
    </li>
</ul>
{/code}']
];