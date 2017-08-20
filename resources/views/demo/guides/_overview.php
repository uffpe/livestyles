<?php

$guide_overview = [
    [
    'title' => 'About this Guide',
    'is_anchor' => true,
    'desc' => '
<p>The "Living Style Guide" is a document of all the general UI components used to build the responsive version of the Tabulex website. It is build with actual code and uses the same structure as the live website, and acts as a common reference to all involved parties (designers, developers, Product Owners, support, clients etc.).  
</p>

<h4>Purpose of this guide:</h4>
<p>The main purpose is to make all in the team understand how the website should look and feel and act as a lexicon of reusable building blocks for the developers to use.</p>

<p>If being used properly and kept up-to-date it has the following advantages:</p>
<ul>
<li><b>Allowing all to see the bigger picture:</b>
<p>The Guide is a practical tool to make everyone in the team understand how the website should look and by example show how all the accessible components should behave. Stakeholders can see the progress and give feedback immediately when new UI components and style updates are in progress.</p>
<p>For new employees it serves as a quick and visual introduction of the UI design and its possibilities, and a frontend code wiki for new developers.</p>
</li>
<li><b>Speeds up the build process:</b>
<p>By using the guide as a lexicon of reusable building blocks developers are allowed to focus their energy on functions and data logic instead of UI markup and styling. 
The UI of the pages can largely be be build by copying the relevant UI components from the Guide and piecing them together like Lego&#8217;s.</p>
</li>
<li><b>Reduced Code bloat:</b>
<p>There is reduced code duplication and a consistent coding style. It allow us to build consistently, reusing code and layout components instead of reinventing the wheel.</p>
</li>
<li><b>Keeps a consistent design:</b>
<p>An available library of all existing UI components makes it easier to keep a consistent design when designing new components. Maybe the needed component is already present or a simple variation can be added to an existing element.</p>
<p>New components or design changes should always be implemented in the Living Style Guide before used in a live site. This makes it possible for the designers to try out new components and test how new design ideas look and behaves in an the actual interactive and responsive environment.</p>
<p>The guide is furthermore a good place to record any design relevant rules for the layout and use of individual UI components.</p>
</li>
<li><b>Saving time with QA testing:</b>
<p>As we can see all of our UI components in one place, we can quickly reveal maintenance issues and test how responsive-friendly a component is and whether it works as intended across different platforms and devices.</p>
<p>The Livng Style Guide will also reveal UI errors due to stylesheet updates and work as a HTML markup check-list if a certain UI component does not work correctly on a live site.</p>
</li>
<li><b>Ensure WCAG 2.0 compliance:</b>
<p>The visual design and all the components in the Guide are designed with WCAG 2.0 in mind. To ensure the WCAG compliance in the production it is important that the developers follows the WCAG guidelines stated in the description for the individual UI components.</p>
</li>
</ul>
<!--
<h4>Who should use this guide:</h4>
<ul>
<li><b>Developers: </b>Should use the guide as a lexicon of possible building blocks. 
By using the code examples and explanations in the guide of how to use the different UI components Code is reusable and pages are easier to build by piecing together components like Lego�s. </li>
<li><b>Designers: </b>Will be able to reference the look and feel of all the existing design element in one place. </li>
<li><b>Management: </b> ...</li>
<li><b>Support: </b> ...</li>
</ul>-->',
    'code' => ''],

    [
        'title' => 'The responsive framework',
        'is_anchor' => true,
        'desc' => '
<div class="alert alert-danger" style="outline: none;"><h4>Text is only a draft:</h4> This element is not done!</div>
<p>The styles and framework is based on Bootstrap v3.3.7 </p>
<p>SASS</p>
<p>Design > UX Design Guide</p>

Based on Bootstrap + SASS. 

Icons:
Using fontAwesome. A short explanation why. 

',
        'code' => '']
];