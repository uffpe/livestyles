<?php

$guide_dialogs = [
    [
        'title' =>  'Modal - Popup vindue',
        'is_anchor' => true,
        'desc' =>   '
<p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page.<br/>
- <a href="https://www.w3schools.com/bootstrap/bootstrap_modal.asp">Read more about bootstrap modal here</a></p>
<p>The <code>data-target="#myModal"</code> on the trigger (button or link) has to be unique and points to the ID of the dialog window.</p>
<h5>WCAG:</h5>
<ul>
<li>The <code>aria-haspopup="true"</code> should be applied to the trigger to indicate that it refers to a popup dialog.</li>
<li>Use the <code>aria-label</code> on the dialog to provide an accessible label that indicates what the modal dialog is about (ie. "Select department").</li>
<li>The dialog container must have a <code>role=dialog</code> to specify this element contains the dialog content.</li>
<li>By giving the dialog a <code>tabindex=-1</code> value removes it from the default navigation flow (i.e., a user cannot tab to it).</li>
<li>When opened it is vital to programmatically move the <code>focus</code> to the displayed dialog and once it is closed back to the trigger. If it only contains a list of links the focus should be on the first link in the dialog. The <code>aria-hidden</code> attribute should furthermore be set to true once the dialog is displayed, to false when it is closed again</li>
</ul>
',
        'code' => '
{code}<!-- Modal trigger -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" aria-haspopup="true">
  Launch demo modal
</button>

<!-- Modal dialog -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="dialogLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{/code}' ]
];