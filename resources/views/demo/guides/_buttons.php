<?php

$guide_buttons = [
    [
        'title' => 'Basic buttons',
        'is_anchor' => true,
        'desc' => '<p>The button classes can be used on <code>a</code>, <code>button</code>, or <code>input</code> elements.</p>',
        'code' => '
<div class="side-by-side">
{code}
  <a class="btn btn-default" href="#" role="button">Link</a>
  
  <button class="btn btn-default" type="button">Button</button>
  
  <input class="btn btn-default" type="button" value="Input">
  
  <input class="btn btn-default" type="button" value="Submit">
{/code}
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
        'title' => 'Button Block style',
        'is_anchor' => true,
        'desc' => '<p>Adding <code>btn-block</code> to the buttons will make it full-width. This styling can also be used alone as a clickable content element.</p>
                    <p>
                        <b>Multiple clickable elements:</b>
                        <ul>
                            <li>The <code>btn-block</code> is full-width element and should therefore be used inside a grid column element (i.e. col-md-6).</li>
                            <li>Used alone is is mainly used on pages with multiple clickable elements (Child, institution etc.).</li>
                            <li>Text will wrap inside this button variation.</li>
                            <li>Where the standard buttons should only have a short, the <code>btn-block</code> used alone can have multiple lines and content in it.</li>
                        </ul>
                        <b>Even height buttons:</b> <small> (Shown in the example below)</small>
                        <ul>
                            <li>The height can be preset with these classes:<br />
                                <code>height-small</code>: 50px, <code>height-medium</code>: 90px, <code>height-big</code>: 140px.<br/> 
                                When using a preset height the class  <code>.valign</code> can be used to center the content vertically.</li>
                        </ul>
                    </p>',
        'code' => '
<div class="row">  
    <div class="col-md-12"> 
        <button class="btn btn-primary btn-block" type="button">Block title (btn-primary btn-block)</button>
    </div>
<br /><br />
    <div class="col-sm-4 col-md-4">   
      <a class="btn btn-block" href="#" role="button">
        <b>Block title (btn-block)</b><p>Possible to have multiple lines of text.</p>
      </a>
    </div>
    
    <div class="col-sm-4 col-md-4">   
      <a class="btn btn-block" href="#" role="button">
        <b>Block title (btn-block)</b><p>Possible to have multiple lines of text.</p>
      </a>
    </div>
    
    <div class="col-sm-4 col-md-4">   
      <a class="btn btn-block" href="#" role="button">
        <b>Block title (btn-block)</b><p>Possible to have multiple lines of text.</p>
      </a>
    </div>
    
{code}<div class="col-sm-4 col-md-4">   
    <a class="btn btn-block height-big valign" href="#" role="button">
        <b>Block title</b>
        <p>(btn-block height-big valign)</p>
    </a>
</div>
{/code}
</div>']
];