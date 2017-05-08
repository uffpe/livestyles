<?php

$guide_tables = [
    [
        'title' => 'Table markup',
        'is_anchor' => true,
        'desc' => '<p>All basic tables should include the class <code>table</code>. This will apply the intended table design to normal content tables without styling tables in other plugins like calendars and date pickers.</p>
                    <p>
                    <ul>
                        <li>All tables should have the class <code>table</code> applied to it.</li>
                        <li>The class <code>table-striped</code> is optional and will add zebra-stribes to the table rows.</li>
                        <li>If table rows needs to be selectable add the optional class <code>table-hover</code> to enable a hover state on table rows within a <code>tbody</code>.</li>
                    </ul>
                    </p>',
        'code' => '
{code}<!-- Table with striped rows and hover state -->
<table class="table table-striped table-hover"> 
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>        
    </tbody>
</table>{/code}'],
/*    [
        'title' => 'Table - responsive styling',
        'is_anchor' => true,
        'desc' => '',
        'code' => '
{code}<!-- Responsive table -->
<table class="table table-striped rwd-table-xs"> 
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td data-label="First Name">Mark</td>
            <td data-label="Last Name">Otto</td>
            <td data-label="Username">@mdo</td>
        </tr>
        <tr>
            <td data-label="First Name">Jacob</td>
            <td data-label="Last Name">Thornton</td>
            <td data-label="Username">@fat</td>
        </tr>        
    </tbody>
</table>{/code}'],*/

    [
        'title' => 'Table - Responsive styling',
        'is_anchor' => true,
        'desc' => '<p>In order to make bigger tables easier to read on smaller screens the class <code>table-rwd</code> should be used. This will make full-screen tables responsive and switch to mobile layout when the width of the content div (.content-div__wrapper) gets smaller than 660px in width.</p>
                    <p>With this class applied the table will break into a single column on smaller screens and the header will be hidden.</p>
                    <p>
                        <ul>
                            <li>Apply the class <code>table-rwd</code> to the table to make it responsive.</li>
                            <li><b>Header labels: </b> Since the header gets hidden the header column labels needs to be included in the table-cells. This is done by adding the respective label as a <code>data-label</code> attribute to each <b>td</b>.</li>
                            <li><b>Custom breakpoint: </b> If the standard preset breakpoint does not suit a certain table, this can be changed by adding the attribute <code>data-breakpoint</code> to the table. The value of this attribute indicates the table width in pixel for when it should break to mobile layout.</li>
                        </ul>
                    </p>',
        'code' => '
{code}<!-- Responsive table with custom breakpoint -->
<table class="table table-striped table-rwd" data-breakpoint="500"> 
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th style="width: 50%">Comment</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td data-label="First Name">Mark</td>
            <td data-label="Last Name">Otto</td>
            <td data-label="Username">@mdo</td>
            <td data-label="Comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis lectus quis sem lacinia nonummy. Proin mollis lorem non dolor. In hac habitasse platea dictumst. Nulla ultrices odio. Donec augue.</td>
        </tr>
        <tr>
            <td data-label="First Name">Jacob</td>
            <td data-label="Last Name">Thornton</td>
            <td data-label="Username">@fat</td>
            <td data-label="Comment">Proin mollis lorem non dolor. In hac habitasse platea dictumst. Nulla ultrices odio. Donec augue.</td>
        </tr>
    </tbody>
</table>{/code}']
];