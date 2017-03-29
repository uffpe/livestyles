<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guidesController extends Controller
{
    function index()
    {
        $guide_overview = [
            [
                'title' =>  'Modal - Popup vindue',
                'is_anchor' => true,
                'desc' =>   '
<p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page.<br/>
- <a href="https://www.w3schools.com/bootstrap/bootstrap_modal.asp">Read more about bootstrap modal here</a></p>
<p>The <code>data-target="#myModal"</code> on the trigger (button or link) has to be unique and points to the ID of the dialog window.</p>
<p>[WCAG) Use the <code>aria-labelledby</code> on the modal to provide an accessible label to indicate what the modal dialog is about (ie. "Select department" or "Appointment").</p>
',
                'code' => '
{code}<!-- Modal trigger -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal dialog -->
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
{/code}' ],[
/*
                'title' => 'Highlight',
                'desc' => 'Beskrivelse..',
                'code' => '
{code}<div class="starter-template">
    <h3>Bootstrap starter template</h3>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div>{/code}'],[
*/

                'title' => 'grid_content',
                'is_anchor' => true,
                'desc' => 'Beskrivelse..',
                'code' => '
{code}<div class="show-grid">
  <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>
<div class="show-grid">
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <!-- Optional: clear the XS cols if their content doesn\'t match in height-->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
</div>{/code}']
            ];

        $guide_containers = [
            [
                'title' => 'Panels',
                'is_anchor' => true,
                'desc' => 'Beskrivelse..',
                'code' => '
{code}<!-- Panel --><div class="panel panel-default">
    <div class="panel-body">
        Panel content... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
</div>
<!-- Panel with header -->
<div class="panel panel-default">
    <div class="panel-heading">
         Panel header
    </div>
    <div class="panel-body">
        Panel content... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
</div>{/code}
    '],[

                'title' => 'Panel med sub-panel',
                'desc' => 'Beskrivelse..',
                'code' => '
{code}<div class="panel panel-default panel_selector">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a href="#juniorklub">
                <i class="fa fa-home"></i> Juniorklub
                <span class="count pull-right">8 / 24</span>
            </a></h4>
        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up"></i></a>
    </div>
    <div class="panel-collapse collapse">
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6"><i class="fa fa-user"></i> 0B</div>
                <div class="col-xs-6 text-right">5</div>
            </div>
            <div class="row">
                <div class="col-xs-6"><i class="fa fa-user"></i> 1B</div>
                <div class="col-xs-6 text-right">10</div>
            </div>
            <div class="row">
                <div class="col-xs-6"><i class="fa fa-user"></i> 2B</div>
                <div class="col-xs-6 text-right">1</div>
            </div>
        </div>
    </div>
</div>{/code}']
        ];

        $guide_buttons = [
            [
                'title' => 'Basic buttons',
                'is_anchor' => true,
                'desc' => 'Beskrivelse..',
                'code' => '
<div class="side-by-side">

  <button class="btn btn-default" type="button">
    Button [class=btn-default] 
  </button>
  
  <button class="btn btn-primary" type="button">
    Button [class=btn-primary] 
  </button>
  
  <button class="btn btn-secondary">
    Button [class=btn-secondary] 
  </button>
  
<br />

{code}<!-- Button with icon -->
  <button class="btn btn-default">
    <i class="fa fa-check" aria-hidden="true"></i> 
      Button width icon [class=default]
  </button>
{/code}
</div>'],[

                'title' => 'Button dropdowns',
                'desc' => ' <p>Turn a standard button into a dropdown toggle. Place it in a <code>div class="btn-group"</code> with a menu-list, and add some basic markup.</p>
                            <p>[WCAG) Use the <code>aria-label</code> on the dropdown-menu to provide an accessible label to indicate what the modal dialog is about (ie. "Admin menu").</p>',
                'code' => '
<div class="side-by-side">
{code}<!-- Button (Dropdown toggle) -->
<div class="btn-group">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown [class=btn-default] 
    <span class="caret"></span>
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
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown [btn-primary] 
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-label="dropdownLabel">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
  </ul>
</div>
<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown [btn-secondary] 
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-label="dropdownLabel">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>']
            ];

        $guide_wcag = [
            [
                'title' => 'WCAG - visual impairments',
                'is_anchor' => true,
                'desc' => '
<p>Zoom level</p>
<p>More info: <a href="https://www.nngroup.com/articles/touchscreen-screen-readers/" target="_blank">Screen readers and Touchscreen Devices</a></p>',
                'code' => ''],[


                'title' => 'WCAG - aria-label (or aria-labelledBy)',
                'desc' => '
<p>This attribute is designed to help assistive technology (e.g. screen readers) attach an invisible label to an otherwise anonymous HTML element.</p>
<p>In the example below is a typical "close" button with an X in the middle. A blind person using assistive technology might just hear "X" read aloud, which does not mean much without the visual clues. <code>aria-label</code> explicitly tells them what the button will do.</p>
                            ',
                'code' => '
{code}<button type="button" class="btn btn-primary" aria-label="Close" onclick="myDialog.close()">X</button>{/code}']
        ];



        $guide_styles = [
            'overview' => $guide_overview,
            'containers' => $guide_containers,
            'buttons' => $guide_buttons,
            'wcag' => $guide_wcag
        ];


        // Make sure 'url' are the same as $guide_styles array names
        $main_menu = [
            ['url' => 'overview', 'label' => 'Overview', 'icon' => 'fa-bars', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'containers', 'label' => 'Containers', 'icon' => 'fa-bars', 'is_active' => true, 'sub_items' => [] ],
            ['url' => 'buttons', 'label' => 'Buttons', 'icon' => 'fa-bars', 'is_active' => true, 'sub_items' => [] ],
            ['url' => 'wcag', 'label' => 'WCAG 2', 'icon' => 'fa-blind', 'is_active' => false, 'sub_items' => [] ]
        ];

        foreach($main_menu as $key => $menu_item){
            foreach($guide_styles[$menu_item['url']] as $style_item) {
                if(!empty($style_item['is_anchor'])){
                    $elm = array('url' => '#'.urldecode($style_item['title']), 'label' => $style_item['title']);
                    array_push( $main_menu[$key]['sub_items'], $elm );
                }
            }
        }


        return view('demo.guide', ['snippets' => $guide_styles, 'has_submenu' => false, 'main_menu_items' => $main_menu]);
    }
}
