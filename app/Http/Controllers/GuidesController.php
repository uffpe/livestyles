<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guidesController extends Controller
{
    function index()
    {
        $guide_overview = [
            [
                'title' => 'About this Style Guide',
                'is_anchor' => true,
                'desc' => '',
                'code' => '']
            ];

        $guide_fonts = [
            [
                'title' =>  'Body and button text',
                'is_anchor' => true,
                'desc' =>   '<p><b>Roboto</b> is used general body and button text. It is a departure from the IST brand but is chosen for its high level of readability in small sizes.</p>
                            <p><code>font-family: "Roboto", Helvetica, Arial, sans-serif</code></p>',
                'code' => '
<p>p - Body text</p>
<p>"Roboto", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 14px - font-weight: 300</p>
<hr>
<strong>strong - Important body text</strong>
<p>"Roboto", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 14px - font-weight: 500</p>
<hr>
<small>small - Caption text</small>
<p>"Roboto", Helvetica, Arial, sans-serif  - line-height: 1 - font-size: 12px - font-weight: 300</p>
<hr>
<button class="btn btn-primary" type="button">Text on buttons</button>
            '],
            [
                'title' =>  'Headers',
                'is_anchor' => true,
                'desc' =>   '<p><b>Oswald</b> is the main ”IST-font” and is used for all headings.</p>
                            <p><code>font-family: "Oswald", Helvetica, Arial, sans-serif</code></p>',
                'code' => '
<h1>h1 - Big header</h1>
<p>"Oswald", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 36px - font-weight: 500</p>
<hr>
<h2>h2 - Main UI header</h2>
<p>"Oswald", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 30px - font-weight: 500</p>
<hr>
<h3>h3 - Sub header</h3>
<p>"Oswald", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 24px - font-weight: 500</p>
<hr>
<h4>h4 - Small header</h4>
<p>"Roboto", Helvetica, Arial, sans-serif  - line-height: 1.5 - font-size: 18px - font-weight: 500</p>
            ']
        ];

        $guide_grids = [
            [

                'title' => 'grid_content',
                'is_anchor' => true,
                'desc' => '',
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
                'title' => 'Panel',
                'is_anchor' => true,
                'desc' => '<p>Panels are used to put HTML content in a box.</p>
                            <p>Besides the <code>.panel</code> class a style variant must be added. Default variant is <code>.panel-default</code> (As used in the example).</p>',
                'code' => '
{code}<div class="panel panel-default">
    <div class="panel-body">
        A default panel container with content - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </div>
</div>{/code}
            '],[

                'title' => 'Panel header and footer',
                'is_anchor' => true,
                'desc' => '<p><label>Panel header:</label> A heading container can be added to the panel with <code>.panel-heading</code>. Although any h1- h5 can be used to make the text stand out use a h4 with a .panel-title class <code>&#60;h4 class="panel-title"&#62;Title&#60;/h4&#62;</code>.</p>
                           <p><label>Panel footer:</label> Added through the <code>.panel-footer</code> and is generally used to add buttons or links to the panel.</p>',
                'code' => '
{code}<!-- Panel with Header and a Footer-->
<div class="panel panel-default">
    <div class="panel-heading">
         <h4 class="panel-title">Panel header (h4)</h4>
    </div>
    
    <div class="panel-body">
        Panel content...
    </div>
    
    <div class="panel-footer">
        <button class="btn btn-default" type="button">Button in panel footer</button>
    </div>
</div>{/code}
        '],[

                'title' => 'Panel with header icon',
                'is_anchor' => true,
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
        Panel content - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </div>
</div>
{/code}
        '],[
                'title' => 'Panel variations',
                'is_anchor' => true,
                'desc' => '<p>Possible variation for the panels.</p>',
                'code' => '
{code}<!-- Panel with a header icon -->
<div class="panel panel-default">
    <div class="panel-heading">
         <h4 class="panel-title">
            <i class="fa fa-check" aria-hidden="true"></i> Panel with icon
         </h4>
    </div>
    <div class="panel-body">
        <p>Panel content - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>
{/code}
{code}
<!-- Panel-inverse -->
<div class="panel panel-inverse">
    <div class="panel-heading">
         <h4 class="panel-title">
            <i class="fa fa-check" aria-hidden="true"></i> Panel .panel-inverse
         </h4>
    </div>
    <div class="panel-body">
        <p>Panel content - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>
{/code}
        '],[

                'title' => 'Panel with dropdown content',
                'is_anchor' => true,
                'desc' => 'It is possible to add an accordian hide/show functinality to a panel.',
                'code' => '
{code}<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <i class="fa fa-check" aria-hidden="true"></i> Header on collapsible panel
        </h4>
        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    </div>
    <div class="panel-collapse collapse">
        <div class="panel-body">
            Panel content - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
    </div>
</div>{/code}'],[

                'title' => 'Panel with sub-panel',
                'desc' => '',
                'code' => '
{code}<div class="panel panel-default panel_selector">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a href="#juniorklub">
                <i class="fa fa-home" aria-hidden="true"></i> Juniorklub
                <span class="count pull-right">8 / 24</span>
            </a></h4>
        <a href="#" class="toggle_collapse"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
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

        $guide_dialogs = [
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
{/code}' ]
        ];

        $guide_buttons = [
            [
                'title' => 'Basic buttons',
                'is_anchor' => true,
                'desc' => '',
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
                'code' => ''
            ],[
            'title' => 'WCAG - aria-hidden',
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


            'title' => 'WCAG - aria-label (or aria-labelledBy)',
            'desc' => '
<p>This attribute is designed to help assistive technology (e.g. screen readers) attach an invisible label to an otherwise anonymous HTML element.</p>
<p>In the example below is a typical "close" button with an X in the middle. A blind person using assistive technology might just hear "X" read aloud, which does not mean much without the visual clues. <code>aria-label</code> explicitly tells them what the button will do.</p>
                            ',
            'code' => '
{code}<button type="button" class="btn btn-primary" aria-label="Close" onclick="myDialog.close()">X</button>{/code}'
            ]
        ];



        $guide_styles = [
            'overview' => $guide_overview,
            'fonts' => $guide_fonts,
            'grids' => $guide_grids,
            'containers' => $guide_containers,
            'dialogs' => $guide_dialogs,
            'buttons' => $guide_buttons,
            'wcag' => $guide_wcag
        ];


        // Make sure 'url' are the same as $guide_styles array names
        $main_menu = [
            ['url' => 'overview', 'label' => 'Overview', 'icon' => 'fa-bars', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'fonts', 'label' => 'Fonts', 'icon' => 'fa-font', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'grids', 'label' => 'Grids', 'icon' => 'fa-columns', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'containers', 'label' => 'Containers', 'icon' => 'fa-id-card-o', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'dialogs', 'label' => 'Dialogs', 'icon' => 'fa-window-maximize', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'buttons', 'label' => 'Buttons', 'icon' => 'fa-link', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'wcag', 'label' => 'WCAG 2', 'icon' => 'fa-blind', 'is_active' => false, 'sub_items' => [] ]
        ];

        foreach($main_menu as $key => $menu_item){
            foreach($guide_styles[$menu_item['url']] as $style_item) {
                if(!empty($style_item['is_anchor'])){
                    $elm = array('url' => '?p='.$menu_item['url'].'#'.urlencode($style_item['title']), 'label' => $style_item['title']);
                    array_push( $main_menu[$key]['sub_items'], $elm );
                }
            }
        }


        return view('demo.guide', ['snippets' => $guide_styles, 'has_submenu' => false, 'main_menu_items' => $main_menu]);
    }
}
