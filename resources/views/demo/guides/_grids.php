<?php

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
</div>{/code}'],[

        'title' => 'No padding between elements',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
{code}no-gutter{/code}'],[

        'title' => 'Padding right only',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
{code}single-gutter{/code}']
];