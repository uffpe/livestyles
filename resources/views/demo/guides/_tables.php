<?php

$guide_tables = [
    [
        'title' => 'Table markup',
        'is_anchor' => true,
        'desc' => '<p>All basic tables should include the class <code>table</code>. This will apply the intended table design to normal content tables without styling tables in other plugins like calendars and date pickers.</p>
                    <p>
                    <b>The table markup:</b>
                    <ul>
                        <li>All tables should have the class <code>table</code> applied to it.</li>
                        <li>The class <code>table-striped</code> is optional and will add zebra-stribes to the table rows.</li>                      
                        <li>A <code>table-hover</code> added to the to table enable a hover state on all rows within the <code>tbody</code> (No Cursor change on mouse-over!).</li>  
                    </ul>
                    <b>Row styling:</b>
                    <ul>                    
                        <li>If specific rows needs to be selectable add the class <code>tr-select</code> can be added to the <b>tr</b> to enable a hover state and a pointer for the cursor.</li>
                    </ul>
                    </p>',
        'code' => '
{code}<!-- Table with striped rows and hover state -->
<table class="table table-striped"> 
    <thead>
        <tr>
            <th></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr class="tr-select">
            <td><i class="fa fa-user" aria-hidden="true"></i></td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td><i class="fa fa-user" aria-hidden="true"></i></td>
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
                            <li><b>Data-labels: </b> Add the respective label as a <code>data-label</code> attribute to each table-cell (<b>td</b>). Since the header gets hidden the header labels needs to be included in the cells. </li>
                            <li><b>Custom breakpoint: </b> If the standard preset breakpoint does not suit a certain table, this can be changed by adding the attribute <code>data-breakpoint</code> to the table. The value of this attribute indicates the table width in pixel for when it should break to mobile layout.</li>
                            <li><b>Buttons/icons: </b> For these elements the <code>data-label</code> can be excluded, making the table-cell right aligned and full width.</li>
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
            <th style="width: 40%">Comment</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td data-label="First Name">Mark</td>
            <td data-label="Last Name">Otto</td>
            <td data-label="Username">@mdo</td>
            <td data-label="Comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis lectus quis sem lacinia nonummy. Proin mollis lorem non dolor. In hac habitasse platea dictumst. Nulla ultrices odio. Donec augue.</td>
            <td>
                <button class="btn btn-primary">
                    <i class="fa fa-pencil" aria-hidden="true"></i>Edit
                </button>
            </td>
        </tr>
        <tr>
            <td data-label="First Name">Jacob</td>
            <td data-label="Last Name">Thornton</td>
            <td data-label="Username"></td>
            <td data-label="Comment">Proin mollis lorem non dolor. In hac habitasse platea dictumst. Nulla ultrices odio. Donec augue.</td>
            <td>
                <button class="btn btn-primary">
                    <i class="fa fa-pencil" aria-hidden="true"></i>Edit
                </button>
            </td>
        </tr>
    </tbody>
</table>{/code}']
];