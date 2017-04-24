<?php

$guide_images = [
    [
        'title' => 'Images',
        'is_anchor' => true,
        'desc' => '<p>Images should in general have the class <code>img-responsive</code> applied to it. This will assure that the image will change size and fit the layout on smaller screens.</p>
                    <p><ul>
                        <li>Include an alternative text <code>alt=myImageText</code> that conveys the information or function of that image to assistive technologies (ie. screen readers).</li>
                        <li>If the image is only used for decorative purposes the <code>aria-hidden=true</code> should be added to hide it from assistive technologies.</li>
                    </ul></p>',
        'code' => '
<h4>Responsive image:</h4>
{code}<!-- Normal images -->
<img src="http://placekitten.com/420/280" class="img-responsive" alt="A relevant image title" >
{/code}
<br /><br />
<h4>Thumbnail/gallery image:</h4>
{code}
<!-- thumbnail/gallery images -->
<img src="http://placekitten.com/140/140" class="img-thumbnail" alt="Gallery image 1" >{/code}'
    ],
    [
        'title' => 'Icon set - FontAwesome',
        'is_anchor' => true,
        'desc' => '<p>In the new responsive version of Tabulex we use Font Awesome icons.</p>
                    <p>These are included in inline elements such as the <b>i</b> or <b>span</b>, and uses the css class <code>fa fa-iconname</code>, where iconname is the name of the icon. 
                    To see all posibilities go to the official Font Awesome website <a href="http://fontawesome.io/icons/" target="_blank" title="Go to Font Awesome website">fontawesome.io</a>.</p>',
        'code' => '
{code}<i class="fa fa-user"></i> Your profile{/code}'],
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
{/code}'],
    [
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