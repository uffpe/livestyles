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
<h4>Thumbnail image:</h4>
{code}
<!-- Thumbnail image -->
<img src="http://placekitten.com/140/140" class="img-thumbnail" alt="Gallery image 1" >{/code}'
    ],
    [
        'title' => 'Image left - text wrap',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
<div class="row">
{code}
<div class="col-lg-8">
    <!-- Image left - floating text -->
    <img src="http://placekitten.com/220/180" class="img-responsive img-pull-left" alt="A relevant image title" >
    <div class="block-with-text readMore">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis lectus quis sem lacinia nonummy.<br /><br />Proin mollis lorem non dolor. In hac habitasse platea dictumst.<br /><br />Nulla ultrices odio. Donec augue. Phasellus dui. Maecenas facilisis nisl vitae nibh. Proin vel seo est vitae eros pretium dignissim. Aliquam aliquam sodales orci. Suspendisse potenti. Nunc adipiscing euismod arcu. Quisque facilisis mattis lacus. Fusce bibendum, velit in venenatis viverra, tellus ligula dignissim felis, quis euismod mauris tellus ut urna. Proin scelerisque. Nulla in mi. Integer ac leo. Nunc urna ligula, gravida a, pretium vitae, bibendum nec, ante. Aliquam ullamcorper iaculis lectus.
    </div>
</div>
 {/code}
</div>'],
    [
        'title' => 'Image gallery',
        'is_anchor' => true,
        'desc' => '<p>Image galleries use the custom panel <code>.panel-gallery-element</code> on a <code>.panel-primary</code> panel. The panel-footer is optional but is used for image title and other relevant description.</p>
                    <p>
                    <b>Gallery body:</b>
                    <ul>
                        <li>Wrap the image inside an element with the class <code>.gallery-image</code>. This can either be a <b>link</b> or a <b>div</b> (In case no link is needed).</li>
                        <li>Remember to add an <code>alt</code> attribute on the image with the title or other descriptive text.</li>
                        <li>Add the class <code>img-responsive</code> on the image.</li>                    
                    </ul>         
                    <b>Gallery footer:</b>
                    <ul>
                        <li>Gallery title can be included with the class <code>gallery-title</code>.</li>
                        <li>The <code>gallery-subtitle</code> can be used for added info.</li>
                        <li>Both title and subtitle is styled to be in one line, meaning the text does not wrap but gets dots added (..) in case it breaks the with of the container.</li>                    
                    </ul>                
                    </p>',
        'code' => '
{code}<!-- Image gallery -->
<div class="panel panel-primary panel-gallery-element">
    <div class="panel-body">
        <a href="#" title="Gallery title" class="gallery-image" >
            <img src="http://placekitten.com/160/120" class="img-responsive" alt="Gallery title">
        </a>
    </div>
    <div class="panel-footer">
        <div class="gallery-title">Gallery title</div>
        <div class="gallery-subtitle">12 images</div>
    </div>
</div>{/code}

<div class="panel panel-primary panel-gallery-element">
    <div class="panel-body">
        <a href="#" title="Gallery title" class="gallery-image" >
            <img src="http://placekitten.com/90/130" class="img-responsive" alt="Gallery title">
        </a>
    </div>
    <div class="panel-footer">
        <div class="gallery-title">Gallery title</div>
        <div class="gallery-subtitle">12 images</div>
    </div>
</div>

<div class="panel panel-primary panel-gallery-element">
    <div class="panel-body">
        <a href="#" title="Gallery title" class="gallery-image" >
            <img src="http://placekitten.com/160/120" class="img-responsive" alt="Gallery title">
        </a>
    </div>
    <div class="panel-footer">
        <div class="gallery-title">Gallery title</div>
        <div class="gallery-subtitle">12 images</div>
    </div>
</div>

<div class="panel panel-primary panel-gallery-element">
    <div class="panel-body">
        <a href="#" title="Gallery title" class="gallery-image" >
            <img src="http://placekitten.com/90/130" class="img-responsive" alt="Gallery title">
        </a>
    </div>
    <div class="panel-footer">
        <div class="gallery-title">Gallery title</div>
        <div class="gallery-subtitle">12 images</div>
    </div>
</div>

<div class="panel panel-primary panel-gallery-element">
    <div class="panel-body">
        <a href="#" title="Gallery title" class="gallery-image" >
            <img src="http://placekitten.com/160/120" class="img-responsive" alt="Gallery title">
        </a>
    </div>
    <div class="panel-footer">
        <div class="gallery-title">Gallery title</div>
        <div class="gallery-subtitle">12 images</div>
    </div>
</div>'],
    [
        'title' => 'Image gallery viewer',
        'is_anchor' => true,
        'desc' => '<p>The <code>gallery_viewer</code> adds functionality to view big versions of the gallery images. It creates a <code>modal</code> dialog and makes use of the Bootstrap carousel to slide between the images in the gallery when opened in the modal dialog window.</p>
                    <p>In terms of markup and design the basic layout is like the <b>Image gallery</b>, but wrapped in a gallery-viewer container.</p>
                    <p>
                    <b>Gallery viewer:</b>
                    <ul>
                        <li>Wrap the images in a container with the class <code>gallery-viewer</code> and a unique ID (This outer wrapper could be the <b>panel-body</b> of an outer panel).</li>
                        <li><b>Initialize</b> the image viewer by including the function <code>galleryViewer("galleryId", "Download", "Close")</code>, where the <b>galleryId</b> is the ID of the wrapper, <b>Download</b> is the text on the download button and <b>Close</b> is the text on the modal close button.</li>
                    </ul>
                    <b>The gallery images:</b>
                    <ul>
                        <li>Since the viewer open in a modal dialog, the <code>data-target="#galleryViewer"</code> and <code>aria-haspopup="true"</code> must be included on the link of the images.</li>
                        <li>Where the <code>href</code> of the link points to the placement of the big image version, the <code>data-download</code> is the link to download the image. These would logically be similar, but for the use in the Tabulex galleries it includes a specific file to download the image directly (ie. "/download.php?f=gallery&m=$id&i=$image")</li>
                        <li>Include an <code>aria-label</code> with a description for the image (Optional). This will be included in the footer of the modal viewer. In the shown example a simple label of "Image 1 of 2" has been used as the label.</li>
                        <li>As part of the Bootstrap carousel the <code>data-slide-to</code> is needed to indicate which of the gallery images should be shown when the gallery viewer opens.</li>
                    </ul>                
                    </p>',
        'code' => '
{code}<div class="gallery_viewer" id="galleryId">

    <div class="panel panel-primary panel-gallery-element">
        <div class="panel-body">
            <a href="http://placekitten.com/640/480" class="gallery-image" data-download="http://placekitten.com/640/480" data-slide-to="1" data-target="#galleryViewer" aria-haspopup="true" aria-label="Image 1 of 2">
                <img src="http://placekitten.com/160/120" class="img-responsive" alt="Image 1 title">
            </a>
        </div>
    </div>
    
    <div class="panel panel-primary panel-gallery-element">
        <div class="panel-body">
            <a href="http://placekitten.com/320/480" class="gallery-image" data-download="http://placekitten.com/320/480" data-slide-to="2" data-target="#galleryViewer" aria-haspopup="true" aria-label="Image 2 of 2">
                <img src="http://placekitten.com/90/130" class="img-responsive" alt="Image 2 title">
            </a>
        </div>
    </div>
    
</div>
<!-- Initialize the gallery -->
<script>
    galleryViewer("galleryId", "Download", "Close");
</script>{/code}'],
    [
    'title' => 'Icon set - FontAwesome',
    'is_anchor' => true,
    'desc' => '<p>The icon set used in this website Font Awesome. These are included in inline elements such as the <b>i</b> or <b>span</b>, and uses the css class <code>fa fa-iconname</code>, where iconname is the name of the icon. 
                    To see all posibilities go to the official Font Awesome website <a href="http://fontawesome.io/icons/" target="_blank" title="Go to Font Awesome website">fontawesome.io</a>.</p>
                    <p>The icon has the <code>aria-hidden=true</code> applied to it to hide it from screen readers (Only a visual helper element)</p>',
    'code' => '
{code}<i class="fa fa-user" aria-hidden="true"></i> Your profile{/code}'],
    [
        'title' => 'Icon with badge',
        'is_anchor' => true,
        'desc' => '<p>To indicate new or unread items a badge can be added to a button icon.</p>
                    <p>
                    <ul>
                        <li>Add a <code>has-badge-wrapper</code> around the icon and add the badge element inside this.</li>
                        <li>When the label adds relevant information to to icon/button the <code>aria-label</code> should be applied describing the purpose of the element to visual impaired people.</li>
                    </ul>
                    </p>',
        'code' => '
{code}<!-- Menu icon -->
 <a href="#link">
    <span class="has-badge-wrapper">
        <i class="fa fa-comment" aria-hidden="true"></i>
        <span class="badge" aria-label="You have new messages">12</span>
    </span>
    Messages
</a>
{/code}'],   [
            'title' => 'Icon with icon as badge',
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
    {/code}'],
];