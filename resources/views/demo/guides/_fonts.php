<?php

$guide_fonts = [
    [
        'title' => 'Page header markup',
        'is_anchor' => true,
        'desc' => '<p>All pages should start with a header stating the overall title for the page.</p>
                    <p>
                    <ul>
                        <li>The header must be wrapped in <code>.page-header</code> element.</li>
                        <li>For all normal pages this must be a <code>h2</code> header.</li>
                        <li>On a few special pages a <code>h1</code> header is used to distinguish these from the other normal content pages. An example is the the login page</li>
                    </ul>
                    </p>',
        'code' => '
{code}<!-- Page header -->
<div class="page-header">
    <h2>The page title</h2>
</div>{/code}'],
    [
        'title' =>  'Font styling - Body and buttons',
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
        'title' =>  'Font styling - Headers',
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