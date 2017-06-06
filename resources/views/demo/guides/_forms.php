<?php

$guide_forms = [
    [
        'title' => 'Label and input',
        'is_anchor' => true,
        'desc' => '<p>The label should be used whenever possible together with the form control to explicitly describe the purpose of the element.</p>
                    <p>
                    <b>Form control:</b>
                    <ul>
                        <li>These includes any type of text fields, selects, checkboxes, radio buttons, and drop-down menus.</li>
                        <li>Add the class <code>form-control</code> to the these form control elements.</li>
                        <li>Wrap labels and controls in a <code>form-group</code> div for optimum spacing.</li>
                    </ul>
                    <b>Label element:</b>
                    <ul>
                        <li>Make sure to include a <code>for</code> attribute on the label and match it to the id of the form control.</li>
                        <li>An icon can easily be added to the label if needed. Simply add the <b>i</b> tag with the wanted <code>fa fa-iconName</code> class inside the label.</li>
                        <li>To indicate an element is required, add a span inside the label with a star and the class <code>required</code>.</li>
                    </ul></p>
                        <p>NB: In case a <b>label</b> is not wanted for some reason, add the class <code>sr-only</code> to it (hidden label only visible to screen readers).
                        OR include an <code>aria-label=someLabel</code> attribute on the input element to describe its purpose to assistive technologies.</p>',
        'code' => '
{code}<!-- Basic label and input -->
<div class="form-group">
    <label for="yourName" class="control-label">Your name<span class="required">*</span></label>
    <input type="text" class="form-control" id="yourName" name="yourName">
</div>

<!-- Input and label with icon -->
<div class="form-group">
    <label for="thisEmail" class="control-label"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
    <input type="email" class="form-control" id="thisEmail" name="">
</div>

<!-- Input disabled -->
<div class="form-group">
    <label for="thisInput" class="control-label"> Disabled input</label>
    <input type="text" class="form-control" id="thisInput" name="" disabled>
</div>
{/code}'],
    [
        'title' => 'Inline form',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
{code}<form class="form-inline">
    <div class="form-group">
        <label for="yourName" class="control-label"> Your name</label>
        <input type="text" class="form-control" id="yourName" name="yourName">
    </div>
    
    <div class="form-group">
        <label for="thisEmail" class="control-label"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
        <input type="email" class="form-control" id="thisEmail" name="">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>{/code}'],
    [
        'title' => 'Horizontal form',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
{code}<form class="form-horizontal">
    <div class="form-group">
        <label for="yourName" class="control-label col-sm-2"> Your name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="yourName" name="yourName">
        </div>
    </div>
    
    <div class="form-group">
        <label for="thisEmail" class="control-label col-sm-2"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="thisEmail" name="">
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>{/code}'],
    [
        'title' => 'Checkboxes and Radios',
        'is_anchor' => true,
        'desc' => '<p>Default markup for checkboxes and radiobuttons is stacked on top of eachother, and with a label to the right. The bootstrap way of markup is to wrap it in a <b>div</b> with the checkbox/radio class and include it inside the label.</p>
                    <p>
                    <ul>
                        <li><b>Label title: </b> To make sure assistive technologies understand that the label text applies to the input, make sure to include a <code>for="theInputId"</code> attribute on the label and match it to the id of the form control.</li>
                        <li><b>Disabled state: </b> Besides the standard disabled attribute on the input itself, a <code>disabled</code> class should be added to the parent div. This will provide a "not-allowed" cursor on hover of the parent <code>label</code>.</li>
                    </ul>
</p>',
        'code' => '
{code}<!-- Checkboxes -->
<div class="checkbox">
    <label for="firstOption">
        <input type="checkbox" id="firstOption" value="...">Option 1
    </label>
</div>
<div class="checkbox disabled">
    <label for="secondOption">
        <input type="checkbox" id="secondOption" value="..." disabled>Option 2 disabled
    </label>
</div>

<hr />

<!-- Radio buttons -->
<div class="radio">
    <label for="myRadio1">
        <input type="radio" name="myRadios" id="myRadio1" value="..." checked>Radio 1
    </label>
</div>
<div class="radio">
    <label for="myRadio2">
        <input type="radio" name="myRadios" id="myRadio2" value="...">Radio 2
    </label>
</div>
<div class="radio disabled">
    <label for="myRadio3">
        <input type="radio" name="myRadios" id="myRadio3" value="..." disabled>Radio 3 disabled
    </label>
</div>{/code}'],
    [
        'title' => 'Checkboxes/Radios inline',
        'is_anchor' => false,
        'desc' => '<p>To make the checkboxes or radios appear on the same line, use the <code>.checkbox-inline</code> or <code>.radio-inline</code> on the parent wrapper.</p>',
        'code' => '
{code}<!-- Checkboxes -->
<div class="checkbox-inline">
    <label for="firstOption">
        <input type="checkbox" id="firstOption" value="...">Option 1
    </label>
</div>
<div class="checkbox-inline">
    <label for="secondOption">
        <input type="checkbox" id="secondOption" value="...">Option
    </label>
</div>

<hr />

<!-- Radio buttons -->
<div class="radio-inline">
    <label for="myRadio1">
        <input type="radio" name="myRadios" id="myRadio1" value="..." checked>Yes
    </label>
</div>
<div class="radio-inline">
    <label for="myRadio2">
        <input type="radio" name="myRadios" id="myRadio2" value="...">No
    </label>
</div>{/code}'],
    [
        'title' => 'Editor markup',
        'is_anchor' => true,
        'desc' => '<p>For text input where a formating is needed we use CKEditor - a lightweight WYSIWYG text editor.</p>
                    <p>In the example the editor can be initialized by the javascript function <code>CKEDITOR.replace("this-editor")</code>, where <b>this-editor</b> is the ID of the textarea.</p>',
        'code' => '
{code}<!-- Textarea with editor  -->
<div id="editor" style="display:block;">
    <textarea name="textareaName" id="this-editor"></textarea>
</div>{/code}
<script type="text/javascript" src="https://www.devsfoweb.dk/lib/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace("this-editor");
</script>']
];