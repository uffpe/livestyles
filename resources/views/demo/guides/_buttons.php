<?php

$guide_buttons = [
    [
        'title' => 'Basic buttons',
        'is_anchor' => true,
        'desc' => '<p>The button classes can be used on <code>a</code>, <code>button</code>, or <code>input</code> elements.</p>
                    <p>
                    <ul>
                        <li><b>Buttons: </b>The type should be set to either <code>button</code>, <code>submit</code> or <code>reset</code>. If a button inside a form should not <b>submit</b> the form, it is important to specify type as <code>button</code>.</li>
                        <li><b>Links: </b>If the <code>&lt;a&gt;</code> acts as a button, rather than navigation to another document or section, they should be given the attribute <code>role="button"</code>.</li>
                    </ul>
                    </p>',
        'code' => '
<div class="side-by-side">
{code}
  <a class="btn btn-default" href="#" role="button">Link</a>
  
  <button class="btn btn-default" type="submit">Submit</button>
  
  <input class="btn btn-default" type="button" value="Input">
  
  <input class="btn btn-default" type="button" value="Button">
{/code}
</div>'],
    [
        'title' => 'Button variations',
        'is_anchor' => true,
        'desc' => '<p>There are 2 basic button variations used on the website. Both of these does furthermore have a specific styling if being set as disabled.
                    <ul>
                        <li>The <code>btn-primary</code> is used for the primary action of a function, dialog or interaction. For example Save, Send, Apply, Open, etc. There should preferably only be one primary action button per interaction.</li>
                        <li>Secondary buttons uses <code>btn-default</code> ans is for all the intermittent actions that exist within an interaction-layout. The are less prominent and as many as needed can be used(ie. Cancel, Back, Close).</li>
                    </ul>
                    </p>',
        'code' => '
<div class="side-by-side">
{code}
  <button class="btn btn-default" type="button">Cancel (btn-default)</button>
  
  <button class="btn btn-primary" type="button">Save (btn-primary)</button>
{/code}
  <br />
{code}
  <button class="btn btn-default" disabled="disabled" type="button">Cancel disabled (btn-default)</button>
  
  <button class="btn btn-primary" disabled="disabled" type="button">Save disabled (btn-primary)</button>
{/code}
</div>'],
    [
        'title' => 'Button sizes',
        'is_anchor' => false,
        'desc' => '<p>Generally the standard button should be used, but if needed additional sizes are available through the classes <code>btn-lg</code>, <code>btn-sm</code> and <code>btn-sx</code>.</p>
                    ',
        'code' => '
<div class="side-by-side">
{code}<!-- Button with icon -->
  <button class="btn btn-default btn-lg" type="button">Large button</button>
  
  <button class="btn btn-default" type="button">Default button</button>
  
  <button class="btn btn-default btn-sm" type="button">Small button</button>
  
  <button class="btn btn-default btn-xs" type="button">Extra small button</button>
{/code}
</div>
<div class="side-by-side">
<!-- Button with icon -->
  <button class="btn btn-default btn-lg" type="button">
    <i class="fa fa-check" aria-hidden="true"></i> Large button
  </button>
  
  <button class="btn btn-default" type="button">
    <i class="fa fa-check" aria-hidden="true"></i> Default button
  </button>
  
  <button class="btn btn-default btn-sm" type="button">
    <i class="fa fa-check" aria-hidden="true"></i> Small button
  </button>
  
  <button class="btn btn-default btn-xs" type="button">
    <i class="fa fa-check" aria-hidden="true"></i> Extra small button
  </button>
</div>'],
    [
        'title' => 'Button with icon',
        'is_anchor' => true,
        'desc' => '<p>An icon can be included on buttons and <code>a</code> links. This is used in many places on the website to support the funcionality of the button with an easily recognizable visual cue.</p>
                    <p><ul>
                        <li>Since the icon is only relevant for normal sighted people, make sure to add the <code>aria-hidden=true</code> on the icon to hide it from assistive technology (e.g. screen readers).</li>
                        <li>In case the button only contains an icon or if the text is hidden on small screens, add a <code>aria-label</code> or a <code>sr-only</code> element to inform screen readers of the purpose of the button.</li>
                    </ul></p>
                    ',
        'code' => '
<div class="side-by-side">
{code}<!-- Button with icon -->
  <button class="btn btn-default">
    <i class="fa fa-check" aria-hidden="true"></i> 
      Button width icon
  </button>
  
  <!-- Button with no text -->
  <button class="btn btn-default">
    <i class="fa fa-save" aria-hidden="true"></i> 
    <span class="sr-only">Save formular</span>
  </button>
{/code}
</div>'],
    [
        'title' => 'Full width Button',
        'is_anchor' => true,
        'desc' => '<p>Adding <code>btn-block</code> to the buttons will make it full-width.</p>',
        'code' => '
{code}<button class="btn btn-primary btn-block" type="button">Block title (btn-primary btn-block)</button>{/code}'],
    [
        'title' => 'Button block element',
        'is_anchor' => true,
        'desc' => '<p>The class <code>btn-block</code> can be used alone for multiple clickable content element (No other btn-default or btn-primary class should be added)</p>
                    <p>This style variation is mainly used on pages with multiple clickable elements (Child, institution etc.).</p>
                    <p>
                        <ul>
                            <li>It is possible to have multiple text lines inside these <code>btn-block</code> elements. Text will automatically wrap inside this button variation.</li>
                            <li>Simple text styling can be used (For instance bold, strong, paragraph or if a header styled text is needed, use wanted header type as a class > <code>.h4</code>)</li>
                            <li>To create multiple side-by-side elements wrap them inside grid column elements (i.e. col-md-6).</li>
                            <li>Add a height class to ensure an even height on the buttons:<br />
                                <ul>
                                    <li><code>height-small</code>: 50px</li>
                                    <li><code>height-medium</code>: 90px</li>
                                    <li><code>height-big</code>: 140px.</li>
                                </ul>
                                (The class <code>.valign</code> can be applied to center the content vertically.)
                            </li>
                        </ul>
                    </p>',
        'code' => '
<div class="row">
    <div class="col-sm-4 col-md-4">   
      <a class="btn btn-block height-medium" href="#" role="button">
        <b>Block title (btn-block)</b><p>Possible to have multiple lines of text.</p>
      </a>
    </div>
    
    <div class="col-sm-4 col-md-4">   
      <a class="btn btn-block height-medium" href="#" role="button">
        <b>Block title (btn-block)</b><p>Possible to have multiple lines of text.</p>
      </a>
    </div>
    
    <div class="col-sm-4 col-md-4">   
      <a class="btn btn-block height-medium" href="#" role="button">
        <b>Block title (btn-block)</b><p>Possible to have multiple lines of text.</p>
      </a>
    </div>
    
{code}<div class="col-sm-4 col-md-4">   
    <a class="btn btn-block height-medium valign" href="#" role="button">
        <b>Block title</b>
        <p>(btn-block height-big valign)</p>
    </a>
</div>
{/code}
</div>'],
    [

        'title' => 'Button dropdowns',
        'is_anchor' => true,
        'desc' => ' <p>Turn a standard button into a dropdown toggle. Place it in a <code>div class="btn-group"</code> with the submenu-list, and add some basic markup.</p>
                    <p>WCAG:
                    <ul>
                        <li>The <code>aria-haspopup</code> tells assistive technology (e.g. screen readers) that the button has a hidden submenu.</li>
                        <li>Be sure to add <code>aria-expanded</code> to the toggle button. This attribute explicitly defines the current state of the collapsible element to screen readers and similar assistive technologies.</li>
                        <li>Use the <code>aria-label</code> on the dropdown-menu to provide an accessible label to indicate what the dropdown menu is about (ie. "Admin menu").</li>
                     </ul>
                     </p>',
        'code' => '
<div class="side-by-side">
{code}<!-- Button (Dropdown toggle) -->
<div class="btn-group">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown (btn-default) 
    <span class="caret" aria-hidden="true"></span>
  </button>
  <!-- Dropdown menu (List of links) -->
  <ul class="dropdown-menu" aria-label="dropdownLabel">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
{/code}

<div class="btn-group">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown (btn-primary) 
    <span class="caret" aria-hidden="true"></span>
  </button>
  <ul class="dropdown-menu" aria-label="dropdownLabel">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
  </ul>
</div>
</div>'],
    [
        'title' => 'Button groups',
        'is_anchor' => true,
        'desc' => '<p>Buttons can be grouped together on a single line by wrapping them in a <code>.btn-group</code> container</p>
                    <p>To ensure that assistive technologies understands the purpose of the grouped buttons, the correct <code>role</code> and an appropriate <code>aria-label</code> attributes needs to be provided.</p>
                    <p>
                    <ul>
                        <li><b>Role:</b> The standard role on the button container is <code>role=group</code>. In certain cases where the buttons should be combined in sets of buttons, the <code>role=toolbar</code> can be used.</i>
                        <li><b>Aria-label: </b> Groups and toolbars should be given an explicit label, as most assistive technologies will otherwise not announce them. This should be a short text describing the purpose of the button set.</li>
                    </ul>
                    </p>',
        'code' => '
<p>Button group: <b>role=group</b></p>
{code}<div class="btn-group" role="group" aria-label="Administrate this element">
  <button type="button" class="btn btn-primary">Edit</button>
  <button type="button" class="btn btn-primary">Save</button>
  <button type="button" class="btn btn-primary">Delete</button>
</div>{/code}
<br /><br />
<p>Button group: <b>role=toolbar</b></p>
<div class="btn-group" role="toolbar" aria-label="First group">
  <button type="button" class="btn btn-default">1</button>
  <button type="button" class="btn btn-default">2</button>
  <button type="button" class="btn btn-default">3</button>
  <button type="button" class="btn btn-default">4</button>
</div>
<div class="btn-group" role="toolbar" aria-label="Second group">
  <button type="button" class="btn btn-default">5</button>
  <button type="button" class="btn btn-default">6</button>
  <button type="button" class="btn btn-default">7</button>
</div>'],
    [
        'title' => 'Button group vertical',
        'is_anchor' => true,
        'desc' => '<p>Stacking the btn-group vertically is possible by using the class <code>.btn-group-vertical</code>.</p>',
        'code' => '
{code}<div class="btn-group-vertical" role="group" aria-label="Administrate this element">
  <button type="button" class="btn btn-primary">Edit</button>
  <button type="button" class="btn btn-primary">Save</button>
  <button type="button" class="btn btn-primary">Delete</button>
</div>{/code}'],
    [
        'title' => 'Full width Button group',
        'is_anchor' => true,
        'desc' => '<p>To have a button group that stretches the full with, add the class <code>btn-group-justified</code> to the btn-group container</p>
                    <p>NB: The buttons needs to be an <code>&#60;a&#62;</code> tag.</p>
                    <p>In the example the btn-group is inserted in a panel replacing the normal <b>anel-footer</b></p>
                    ',
        'code' => '
<div class="row"><div class="col-sm-8 col-md-6">
{code}<div class="panel panel-grey">
    <div class="panel-heading">
         <h4 class="panel-title">Panel with full-width toolbar</h4>
    </div>
    <div class="panel-body"><p>...</p></div>
    
    <div class="btn-group btn-group-justified" role="toolbar" aria-label="Administrate this element">
      <a href="#" type="button" class="btn btn-primary">Edit</a>
      <a href="#" type="button" class="btn btn-primary">Save</a>
      <a href="#" type="button" class="btn btn-primary">Delete</a>
    </div>
    
</div>{/code}
</div></div>
']
];