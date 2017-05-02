<?php

$guide_containers = [
    [
        'title' => 'Panel',
        'is_anchor' => true,
        'desc' => '<p>We use panels to put HTML content in a box.</p>
                            <p>Besides the <code>.panel</code> class a style variant should be added. Default variant is <code>.panel-default</code> (As used in the example).</p>',
        'code' => '
{code}<div class="panel panel-default">
    <div class="panel-body">
        A default panel container with content - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </div>
</div>{/code}
            '],
    [

        'title' => 'Panel - Header and Footer',
        'is_anchor' => false,
        'desc' => '<p><label>Panel header:</label> A heading container can be added to the panel with <code>.panel-heading</code>. To make the text stand out a h4 with a .panel-title class can be applied (See example below).</p>
                           <p><label>Panel footer:</label> If needed this can be added through the <code>.panel-footer</code>. It is generally used to add buttons or links to the panel.</p>',
        'code' => '
{code}<!-- Panel with Header and a Footer-->
<div class="panel panel-default">
    <div class="panel-heading">
         <h4 class="panel-title">Panel header (h4)</h4>
    </div>
    
    <div class="panel-body">
        ...
    </div>
    
    <div class="panel-footer">
        <button class="btn btn-default" type="button">Button in panel footer</button>
    </div>
</div>{/code}
        '],
    [

        'title' => 'Panel with header icon',
        'is_anchor' => false,
        'desc' => '<p>When adding an icon to the header, make sure to keep a space before the title text</p>
                            <p>Since the icon itself is not relevant to screen-readers, the attribute <code>aria-hidden="true"</code> should be added (See more about this under WCAG.)</p>',
        'code' => '
{code}<!-- Panel with a header icon -->
<div class="panel panel-default">
    <div class="panel-heading">
         <h4 class="panel-title">
            <i class="fa fa-check" aria-hidden="true"></i> Panel with icon
         </h4>
    </div>
    
    <div class="panel-body">
        ...
    </div>
</div>
{/code}
        '],
    [
        'title' => 'Panel variations',
        'is_anchor' => true,
        'desc' => '<p>Possible style variation for the panels.</p>',
        'code' => '
<!-- Panel - No variant -->
<div class="panel">
    <div class="panel-heading">
         <h4 class="panel-title"><i class="fa fa-check" aria-hidden="true"></i> panel (no variation class)</h4>
    </div>
    <div class="panel-body"><p>...</p></div>
</div>

<!-- Panel-default -->
<div class="panel panel-default">
    <div class="panel-heading">
         <h4 class="panel-title"><i class="fa fa-check" aria-hidden="true"></i> panel panel-default</h4>
    </div>
    <div class="panel-body"><p>...</p></div>
</div>


{code}<!-- Panel-primary -->
<div class="panel panel-primary">
    <div class="panel-heading">
         <h4 class="panel-title"><i class="fa fa-check" aria-hidden="true"></i> panel panel-primary</h4>
    </div>
    <div class="panel-body"><p>...</p></div>
</div>
{/code}

<!-- Panel-secondary -->
<div class="panel panel-secondary">
    <div class="panel-heading">
         <h4 class="panel-title"><i class="fa fa-check" aria-hidden="true"></i> panel panel-secondary</h4>
    </div>
    <div class="panel-body"><p>...</p></div>
</div>

<!-- Panel-tertiary -->
<div class="panel panel-tertiary">
    <div class="panel-heading">
         <h4 class="panel-title"><i class="fa fa-check" aria-hidden="true"></i> panel panel-tertiary</h4>
    </div>
    <div class="panel-body"><p>...</p></div>
</div>

<!-- Panel-grey -->
<div class="panel panel-grey">
    <div class="panel-heading">
         <h4 class="panel-title"><i class="fa fa-check" aria-hidden="true"></i> panel panel-grey</h4>
    </div>
    <div class="panel-body"><p>...</p></div>
</div>

<!-- Panel-danger -->
<div class="panel panel-danger">
    <div class="panel-heading">
         <h4 class="panel-title"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> panel panel-danger</h4>
    </div>
    <div class="panel-body"><p>...</p></div>
</div>
        '],
    [

        'title' => 'Collapsible panel',
        'is_anchor' => true,
        'desc' => '<p>One of the often used elements is the collapsible panel. This type of panel has a <code>.toggle_collapse</code> button (an arrow at the right side) and the panel-body is placed within a div with <code>.panel-collapse</code>.</p>
                    <p><b>Toggle-button:</b>
                    <ul>
                        <li>Include a <code>aria-label</code> or a <code>.sr-only</code> element to indicate what this does (ie. "Open stamkort info"). This is important to apply since the toggle-button is only an icon and by this does not have any descriptive text.</li>
                        <li>The <code>aria-haspopup</code> on the button indicates that a popup i available. This is important to include because the panel-body is hidden from screen-readers when it is collapsed.</li>
                    </ul>
                    </p>
                    <p><b>Panel-collapse:</b>
                    <ul>
                        <li>Use the <code>aria-label</code> on the panel-collapse to provide an accessible label to indicate what the dropdown panel is about (ie. "Stamkort info").</li>
                    </ul>
                    </p>
                    <p><b>Collapse variations:</b>
                    <ul>
                        <li>To set the panel body to be <b>open from start</b>. This is done by using <code>aria-expanded=true</code> on toggle and insert the class <b>in</b> on the <code>panel-collapse</code></li>
                        <li>The basic collapsible panel is with an arrow as the toggle button - The <code>.fa-chevron-up</code> icon. This icon has the up/down arrow function on toggle. In case the panel body is open from start, this should be set to <code>.fa-chevron-down</code>.</li>
                        <li>It is possible to apply another icon if needed (See example below).</li>
                        <li>The basic collapsible panel is with an arrow as the toggle button - The <code>.fa-chevron-up</code> icon. In case the panel body is open from start, this chould be set to <code>.fa-chevron-down</code>.</li>
                    </ul>
                    </p>',
        'code' => '
{code}<!-- Collapse panel example 1 -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-check" aria-hidden="true"></i> 
            Header title
        </h4>
        <a href="#" class="toggle_collapse" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Open collapsible panel</span>
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-collapse collapse" aria-label="Some Info Panel">
        <div class="panel-body"><p>...</p></div>
    </div>
</div>

<!-- Collapse panel example 2 -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-comment" aria-hidden="true"></i>
            Header title - Alternate icon toggle
        </h4>
        <a href="#" class="toggle_collapse" aria-haspopup="true" aria-label="Open collapsible panel" aria-expanded="false">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-collapse collapse" aria-label="Some Info Panel">
        <div class="panel-body"><p>...</p></div>
    </div>
</div>
{/code}'],
    [

        'title' => 'Panel with nested panels',
        'is_anchor' => true,
        'desc' => '<p>It is posible to have panels inside panels.
                    <ul>
                        <li>In the shown example the nested panel 2 is set to be open from start. This is done by using <code>aria-expanded=true</code> on toggle and insert the class <b>in</b> on the <code>panel-collapse</code></li>
                        <li>To differentiate the inner panels these should use paragraph for the <code>panel-title</code> instead og the normal <b>H4</b> header.</li>
                    </ul>
                    </p>',
        'code' => '
{code}<!-- Outer panel -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-list" aria-hidden="true"></i> Outer Panel</h4>
        <a href="#" class="toggle_collapse" aria-haspopup="true" aria-expanded="false" aria-label="Open panel">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-collapse collapse" aria-label="Info Panel with panels">
        <div class="panel-body">
            <!-- Panel-group container -->
            <div class="panel-group">
                                               
                <!-- Nested panel -->             
                <div class="panel panel-default">
                    <div class="panel-heading">                        
                        <p class="panel-title"><i class="fa fa-check" aria-hidden="true"></i>Inner panel 1</p>
                        
                        <a href="#" data-toggle="collapse" class="toggle_collapse" aria-label="Open inner panel 1" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="panel-collapse collapse" aria-label="Info Panel">
                        <div class="panel-body">...</div>
                    </div>
                </div>
                          
                                
                <!-- Nested panel -->             
                <div class="panel panel-default">
                    <div class="panel-heading">                        
                        <p class="panel-title"><i class="fa fa-check" aria-hidden="true"></i>Inner panel 2 (Open from start)</p>
                        
                        <a href="#" data-toggle="collapse" class="toggle_collapse" aria-label="Open inner panel 2" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-chevron-up" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="panel-collapse collapse in" aria-label="Info Panel">
                        <div class="panel-body">...</div>
                    </div>
                </div>
                
            </div>  
        </div>
    </div>
</div>

{/code}'],
    [

        'title' => 'Selection panels',
        'is_anchor' => true,
        'desc' => '<p>This is an example of the type of selection panels used in some modal dialogs such as Department selection.</p>
                            <p>
                            <ul>
                                <li>It is designed to have a link on the icon/title part and a toggle button for the collapsible panel-body. </li>
                                <li>The element <code>.subtext</code> under the title is optional. </li>
                                <li>In case there is no content in panel-body the <code>toggle_collapse</code> button and the <code>panel-collapse</code> can be omitted.</li>
                            </ul>
                            </p>',
        'code' => '
{code}<!-- Selection: .panel-grey with subtext -->
<div class="panel panel-grey panel_selector">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a href="#juniorklub">
                <i class="fa fa-home" aria-hidden="true"></i>
                Juniorklub
                <br /><span class="subtext">This is subtext in small</span>
                <span class="count">8 / 24</span>
            </a>
        </h4>
        <a href="#" class="toggle_collapse" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Open this collapsible panel</span>
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-collapse collapse" aria-label="Some Info Panel">
        <div class="panel-body">
        ...        
        </div>
    </div>
</div>
{/code}'],
    [

        'title' => 'Selection panel variations',
        'is_anchor' => true,
        'desc' => 'All the Panel variants can be used for selection panels (See under <b>Panel variations</b>). The following 3 is though mainly used with the <code>panel_selector</code>.',
        'code' => '
<!-- Panel-grey -->
<div class="panel panel-grey panel_selector">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a href="#juniorklub">
                <i class="fa fa-home" aria-hidden="true"></i>
                Panel-grey (Department)
                <span class="count pull-right">8 / 24</span>
            </a>
        </h4>
        <a href="#" class="toggle_collapse" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Open this collapsible panel</span>
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-collapse collapse" aria-label="Some Info Panel">
        <div class="panel-body">
        ...        
        </div>
    </div>
</div>

<!-- Panel-default -->
<div class="panel panel-default panel_selector">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a href="#juniorklub">
                <i class="fa fa-home" aria-hidden="true"></i>
                Panel-default (Joint departments)
                <span class="count pull-right">8 / 24</span>
            </a>
        </h4>
        <a href="#" class="toggle_collapse" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Open this collapsible panel</span>
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-collapse collapse" aria-label="Some Info Panel">
        <div class="panel-body">
        ...        
        </div>
    </div>
</div>

{code}<!-- Panel-inverse -->
<div class="panel panel-primary panel_selector">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a href="#juniorklub">
                <i class="fa fa-home" aria-hidden="true"></i>
                Panel-inverse (Whole institution)
                <span class="count pull-right">8 / 24</span>
            </a>
        </h4>
        <a href="#" class="toggle_collapse" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Open this collapsible panel</span>
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-collapse collapse" aria-label="Some Info Panel">
        <div class="panel-body">
        ...        
        </div>
    </div>
</div>
{/code}']
];