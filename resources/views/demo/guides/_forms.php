<?php

$guide_forms = [
    [
        'title' => 'Label and input',
        'is_anchor' => true,
        'desc' => '<p>The label should be used whenever possible together with the form control to explicitly describe the purpose of the element.</p>
                    <p>
                    <b>Form controlS:</b>
                    <ul>
                        <li>These includes any type of text fields, selects, checkboxes, radio buttons, and drop-down menus.</li>
                        <li>Add the class <code>form-control</code> to the these form control elements.</li>
                        <li>Wrap labels and controls in a <code>form-group</code> div for optimum spacing.</li>
                    </ul>
                    <b>Label element:</b>
                    <ul>
                        <li>Make sure to include a <code>for</code> attribute on the label and match it to the id of the form control.</li>
                        <li>An icon can easily be added to the label if needed. Simply add the <b>i</b> tag with the wanted <code>fa fa-iconName</code> class inside the label.</li>
                        <li>NOTE: In case a <b>label</b> is not wanted for some reason, add the class <code>sr-only</code> to the <b>label</b> OR include an <code>aria-label=someLabel</code> attribute on the form-control to describe its purpose to assistive technologies.</li>
                    </ul></p>',
        'code' => '
{code}<!-- Basic label and input -->
<div class="form-group">
    <label for="yourName" class="control-label"> Your name</label>
    <input type="text" class="form-control" id="yourName" name="yourName">
</div>

<!-- Input and label with icon -->
<div class="form-group">
    <label for="thisEmail" class="control-label"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
    <input type="email" class="form-control" id="thisEmail" name="">
</div>
{/code}']
];