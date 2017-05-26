<?php

$guide_lists = [
    [
        'title' => 'Simple list-group of links',
        'is_anchor' => true,
        'desc' => '<p>To create A simple group of links, wrap your links in a container with the class (<code>list-group</code>). Apply the (<code>.list-group-item</code>) to each link in the <b>.list-group</b>.</p>',
        'code' => '
{code}<!-- List group -->
<div class="list-group">
  <a href="#" class="list-group-item">List element 1</a>
  <a href="#" class="list-group-item">List element 2</a>
  <a href="#" class="list-group-item">List element 3</a>
</div>{/code}'],
    [
        'title' => 'List with badge and icon',
        'is_anchor' => true,
        'desc' => '<p>It is possible to add an icon or a badge to the (<code>.list-group-item</code>) links.</p>
                    <ul>
                        <li><b>Icon: </b> include a <code>i</code> element with the relevant fa icon class - <code>fa fa-check</code>. Remember to add the <code>aria-hidden=true</code> attribute to hide the icon from scree-readers.</li>
                        <li><b>Label:</b> This can be included to add a text (i.e. "New") or a "number of unread elements" to the link, by using the class <code>badge</code>. If is good practise to add a <code>aria-label</code> with a short description to inform assistive technology (e.g. screen readers) what the badge represent.</li>
                    </ul>',
        'code' => '
{code}<!-- List group -->
<div class="list-group">
  <a href="#" class="list-group-item">
    <i class="fa fa-comment-o" aria-hidden="true"></i>
    Link with icon & badge
    <span class="badge" aria-label="Number of new comments">12</span>
  </a>
</div>{/code}'],
    [
        'title' => 'List-group overview style',
        'is_anchor' => true,
        'desc' => '<p>Applying a <code>.h4</code> class to the links in the list-group will make a list of header-like elements.</p>
                    <p>This list-group variation is used on views that contains an overview of link to other views or subcategories (i.e. the Message overview).</p>
                    <p>(<b>Icons</b> and <b>Badges</b> can be applied is needed.)</p>',
        'code' => '
{code}<!-- Overview list group-->
<div class="list-group">
  <a href="#" class="list-group-item h4">
    <i class="fa fa-envelope" aria-hidden="true"></i>
    My Messages
  </a>
  <a href="#" class="list-group-item h4">
    <i class="fa fa-sticky-note" aria-hidden="true"></i>
    News from institution
  </a>
  <a href="#" class="list-group-item h4">
    <i class="fa fa-file-text" aria-hidden="true"></i>
    News from the management
    <span class="badge" aria-label="Unread news">12</span>
  </a>
  <a href="#" class="list-group-item h4">
    <i class="fa fa-comments" aria-hidden="true"></i>
    Forum messages
  </a>
  <a href="#" class="list-group-item h4">
    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
    External news
  </a>
</div>{/code}'],
    [
        'title' => 'List-group icon sizes',
        'is_anchor' => true,
        'desc' => '<p>Allthough the standard icon size should be used in list groups, additional icon sizes are available through <code>fa-</code> size classes.</p>                    
                    <ul>
                        <li><code>fa-sm</code>
                         - <code>fa-lg</code>
                         - <code>fa-2x</code>
                         - <code>fa-3x</code>
                         - <code>fa-4x</code>
                         - <code>fa-5x</code>
                         </li>
                    </ul>
                    </p>',
        'code' => '
{code}<!-- List group -->
<div class="list-group">{/code}
  <a href="#" class="list-group-item">
    <i class="fa fa-photo fa-sm" aria-hidden="true"></i>
    Link with fa-sm icon
  </a>
  <a href="#" class="list-group-item">
    <i class="fa fa-photo" aria-hidden="true"></i>
    Link with default icon
  </a>
  <a href="#" class="list-group-item">
    <i class="fa fa-photo fa-lg" aria-hidden="true"></i>
    Link with fa-lg icon
  </a>{code}
  <a href="#" class="list-group-item">
    <i class="fa fa-photo fa-2x" aria-hidden="true"></i>
    Link with fa-2x icon
  </a>{/code}
  <a href="#" class="list-group-item">
    <i class="fa fa-photo fa-3x" aria-hidden="true"></i>
    Link with fa-3x icon
  </a>
  <a href="#" class="list-group-item">
    <i class="fa fa-photo fa-4x" aria-hidden="true"></i>
    Link with fa-4x icon
  </a>
  <a href="#" class="list-group-item">
    <i class="fa fa-photo fa-5x" aria-hidden="true"></i>
    Link with fa-5x icon
  </a>{code}
</div>{/code}']

];