<?php

$guide_images = [
    [
        'title' => 'Icon with badge',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
{code}<!-- Menu icon -->
 <a href="#link">
    <span class="has-badge-wrapper" aria-hidden="true">
        <i class="fa fa-comment"></i>
        <span class="badge badge-info">12</span>
    </span>
    Messages
</a>
{/code}'],[
        'title' => 'Icon with badge icon',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
 <a class="btn btn-default" href="#" role="button">
    <span class="has-badge-wrapper" aria-hidden="true">
        <i class="fa fa-user" aria-hidden="true"></i>
        <span class="badge badge-icon"><i class="fa fa-times-circle"></i></span>
    </span>
    New appointment
</a>

{code}<!-- Menu icon -->
 <a class="btn btn-default" href="#" role="button">
    <span class="has-badge-wrapper" aria-hidden="true">
        <i class="fa fa-calendar" aria-hidden="true"></i>
        <span class="badge badge-icon"><i class="fa fa-plus-circle"></i></span>
    </span>
    New appointment
</a>
{/code}']
];