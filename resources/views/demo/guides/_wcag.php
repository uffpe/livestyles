<?php

$guide_wcag = [
    [
        'title' => 'Zoom-level and visual impairments',
        'is_anchor' => true,
        'desc' => '
<p>Zoom level</p>
<p>More info: <a href="https://www.nngroup.com/articles/touchscreen-screen-readers/" target="_blank">Screen readers and Touchscreen Devices</a></p>',
        'code' => ''
    ],[
        'title' => 'Aria-hidden',
        'is_anchor' => true,
        'desc' => ' <p>The aria-hidden is used to hide visibly rendered content from assistive technologies to improve the experience for users of assistive technologies by removing redundant or extraneous content.</p>
                        <p>Usually icons on buttons and links are reduntant eye-candy and should be attached with the <code>aria-hidden="true"</code> attibute. 
                        It is though important to make sure that any element with relevant information or functionality has an descriptive text, label or title that will convay its purpose to assistive technologies (ie. screen-readers).</p>',
        'code' => '
{code}<!-- Button with visually reduntant icon -->
<button type="button" class="btn btn-primary" >
    <i class="fa fa-check" aria-hidden="true"></i> Button with icon
</button>{/code}
                '
    ],[


        'title' => 'Aria-label (or aria-labelledBy)',
        'is_anchor' => true,
        'desc' => '<p>This attribute is designed to help assistive technology (e.g. screen readers) attach an invisible label to an otherwise anonymous HTML element.</p>
                        <p>In the example below is a typical "close" button with an X in the middle. A blind person using assistive technology might just hear "X" read aloud, which does not mean much without the visual clues. <code>aria-label</code> explicitly tells them what the button will do.</p>
                            ',
        'code' => '
{code}<button type="button" class="btn btn-primary" aria-label="Close" onclick="myDialog.close()">X</button>{/code}'
    ],[


        'title' => 'Aria-haspopup',
        'is_anchor' => true,
        'desc' => ' <p>The <code>aria-haspopup="true"</code> should be applied to the link or trigger for modal dialogs, dropdown-menus and collapsible panels. Is used to indicate that an element has a popup context menu or sub-level menu.</p>
                            ',
        'code' => '
{code}<div class="btn-group">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown button example <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-label="dropdownLabel">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
  </ul>
</div>{/code}'
    ],[


        'title' => 'Focus management - dialog popups',
        'is_anchor' => true,
        'desc' => '<p>When using custom dialogs, it is vital to move the focus to the displayed dialog (and back to the trigger once it is closed). This is especially important as most dialogs are inserted far from the point in the source code that triggers them. Without proper focus management through scripting, keyboard users may find it hard or impossible to identify and interact with the custom dialog.</p>
                            <h5>Scripted focus management should:</h5>
                            <ul>        
                                <li>move the keyboard focus from the triggering element (link or button) to the custom dialog (or one of the focussable elements within it)</li>
                                <li>keep it within the custom dialog until the dialog is closed (this makes the dialog effectively modal)</li>
                                <li>move it back to the triggering element when the user closes the dialog by activating one of the choices offered.</li>
                            </ul>',
        'code' => 'This is fortunately managed by BootStrap js, but it need to be tested to validate it works for all dialogs. In case a dialog has custom functionality or is not handled by bootstrap modal, this specification needs to be applied.'
    ]
];