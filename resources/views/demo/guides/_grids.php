<?php

$guide_grids = [
    [

        'title' => 'Grid system',
        'is_anchor' => true,
        'desc' => '<p>The layout of this website is based on the responsive and fluid 12 column grid-system provided by Bootstrap 3. 
                    Basically it is a series of rows and columns that contains the content of the pages.</p>
                    <p><b>Short introduction:</b>
                    <ul>
                        <li>Rows must be placed within a <code>.container-fluid</code> for proper alignment and padding.</li>
                        <li>Use rows (<code>.row</code> to create horizontal groups of columns.</li>
                        <li>Content should be placed within columns, and only columns may be immediate children of rows.</li>
                        <li>Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on rows.</li>
                        <li>Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three <code>.col-md-4</code>.</li>
                    </ul>
                    </p>
                    <p>For a more thorough description of the grid system go to <a href="http://getbootstrap.com" target="_blank">Getbootstrap.com</a>.</p>',
        'code' => '
<div class="show-grid">
{code}
  <div class="row">    
      <div class="col-md-8">.col-md-8</div>
      <div class="col-md-4">.col-md-4</div>
  </div>
{/code}
</div>'],
    [

        'title' => 'Grid breakpoints',
        'is_anchor' => true,
        'desc' => '<p>The website makes use of a predefined set of breakpoints. These aims at different device sizes (or more specifically the screen-width of the device).</p>',
        'code' => '
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th> <h5>Device width</h5> </th>
                <th> <h5>Class prefix</h5> </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <b>Extra small devices</b><br />Phones (&lt;768px) </td>
                <td><code>.col-xs-</code></td>
            </tr>
            <tr>
                <td> <b>Small devices </b><br />Tablets (≥768px) </td>
                <td><code>.col-sm-</code></td>
            </tr>
            <tr>
                <td> <b>Medium devices</b> <br />Desktops (≥992px) </td>
                <td><code>.col-md-</code></td>
            </tr>
            <tr>
                <td> <b>Large devices</b> <br />Desktops (≥1200px) </td>
                <td><code>.col-lg-</code></td>
            </tr>
        </tbody>
    </table>
</div>
'],
    [

        'title' => 'Example: Mobile, tablet, desktop',
        'is_anchor' => true,
        'desc' => '<p>The 12-columns grid is responsive and will shrink and expand to fit the device width (Or as you resize the browser window). 
                    Remember that the 12 columns has a total width of 100%.</p>
                    <p>In the shown example the column are set up like this: </p>
                    <ul>
                        <li><b>Extra small devices:</b> Each will have a width of 100% (<code>.col-xs-12</code>)</li>
                        <li><b>Small devices:</b> Each will have a width of 50% (<code>.col-sm-6</code>)</li>
                        <li><b>Medium devices:</b> Each will have a width of 25% (<code>.col-md-3</code>)</li>
                        <li><b>Large devices:</b> Is not set but will inherit from medium.</li>
                    </ul>
                    </p>',
        'code' => '
<!--
<div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3">.col-xs-12 .col-sm-6 .col-md-3</div>
      <div class="col-xs-12 col-sm-6 col-md-3">.col-xs-12 .col-sm-6 .col-md-3</div>
      <div class="col-xs-12 col-sm-6 col-md-3">.col-xs-12 .col-sm-6 .col-md-3</div>
      <div class="col-xs-12 col-sm-6 col-md-3">.col-xs-12 .col-sm-6 .col-md-3</div>
    </div>
</div>
-->

{code}
    <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
    </div>
{/code}'],
    [

        'title' => 'Example: No padding',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
{code}
    <div class="row no-gutter">
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
    </div>
{/code}'],
    [

        'title' => 'Example: Padding right only',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
{code}
    <div class="row single-gutter">
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="http://placekitten.com/250/160" class="img-responsive" alt="..." >
          </div>
    </div>
{/code}']
];