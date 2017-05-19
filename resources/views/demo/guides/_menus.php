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
                        <li>Include a <code>data-toggle=collapsed</code> and a <code>aria-haspopup</code> on the parent button indicates that a popup i available. This is important to include because the submenu is hidden from screen-readers when it is collapsed.</li>
                        <li>The <code>aria-expanded</code> tells screen readers if the submenu is collapsed or not.</li>
                        <li>When the list has a submenu the <code>caret</code> is included. This has the <code>aria-hidden=true</code> applied to it to hide it from screen readers (Only a visual helper element).</li>
                        <li>If it is closed/collapsed the class <code>collapsed</code> must be added to the parent button.</li>
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
{/code}'],
    [
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
{/code}'],
    [
        'title' => 'Sub-header navbar',
        'is_anchor' => true,
        'desc' => '<p>The <b>sub-header</b> is an optional element placed directly under the top-header. should be used for generel page functions such as "Create new", "Save (Page)", Back (to previous page)" or "Sort by" dropdowns.</p>
                    <p><b>Sub-header navbar:</b>
                    <ul>
                        <li>The sub-header is basically a horizontal navbar element with class <code>navbar navbar-inverse navbar-fixed-top</code> and the ID <code>sub-header</code>.</li>
                        <li>When needed it should be included in top of the view content and widthin the <code>.main-container__content</code> container (Usually in top of the main twig view).</li>
                        
                    </ul></p>
                    <p>
                    <b>Buttons & dropdowns</b>
                    <ul>
                        <li>All links should be placed as list element in a <code>ul</code> list with class <code>navbar-right</code>.</li>
                        <li>As a rule of thump all links should have a text and an icon placed to the left of the text.</li>
                        <li>For back buttons use the icon <code>fa-chevron-left</code> and add <code>.navbar-back</code> to the <b>li</b> element.</li>
                        <li>To hide the text part on smaller screens, wrap the link text in a span with either class <code>hidden-xs</code> or <code>hidden-xxs</code> (NB: <b>hidden-xs</b> breaks on a width of 768px and <b>hidden-xxs</b> on a width of 480px).</li>
                    </ul>
                    </p>',
        'code' => '
{code}<!-- Sub-header Navbar -->
<nav id="sub-header" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">    
        <ul class="nav navbar-nav navbar-right">
                
            <!-- Navbar back button -->
            <li class="navbar-back">
                <a href="#" title="Back to previous">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    <span class="hidden-xs">Back to previous</span>
                </a>
            </li>
        
            <!-- Simple link with icon -->
            <li>
                <a href="#" title="Save page">
                    <i class="fa fa-save" aria-hidden="true"></i>
                    <span class="hidden-xs">Save page</span>
                </a>
            </li>
            
            <!-- Dropdown toggle with icon -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <span class="hidden-xxs">Vælg element</span> 
                    <span class="caret" aria-hidden="true"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </li>  
                      
        </ul><!-- /.navbar_right -->        
    </div><!-- /.container -->
</nav>
{/code}']

];