<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guidesController extends Controller
{
    function index()
    {
        $snippets = [
[
'title' => 'Modal - Popup vindue',
'desc' => 'This is a dialog box/popup window that is displayed on top of the current page.<br/>
The <code>data-target</code> attribute on the trigger has to be unique and match the ID of the dialog window.<br />
- <a href="https://www.w3schools.com/bootstrap/bootstrap_modal.asp">Read more about bootstrap modal here</a>',
'code' => '<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
  Launch demo modal 2
</button>' ],[

'title' => 'Highlight',
'desc' => 'Beskrivelse..',
'code' => '<div class="starter-template">
    <h3>Bootstrap starter template</h3>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div>'],[

'title' => 'grid_content',
'desc' => 'Beskrivelse..',
'code' => '<div class="show-grid">
  <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>
<div class="show-grid">
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <!-- Optional: clear the XS cols if their content doesn\'t match in height-->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
</div>'],[

'title' => 'Basis dropdown',
'desc' => 'Beskrivelse..',
'code' => '<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>'],
];
//dd($snippets);
        $main_menu = [
            ['url' => '?style=basic', 'label' => 'Basis elementer', 'icon' => 'fa-bars', 'is_active' => true],
            ['url' => '?style=wcag', 'label' => 'WCAG 2', 'icon' => 'fa-blind', 'is_active' => false],
        ];
//        $main_menu = [];

        return view('demo.guide', ['snippets' => $snippets, 'has_submenu' => false, 'main_menu_items' => $main_menu]);
    }
}
