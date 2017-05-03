<?php

$guide_tables = [
    [
        'title' => 'Table markup',
        'is_anchor' => true,
        'desc' => '<p></p>
                    <p>
                    <ul>
                        <li>All tables should have the class <code>table</code> applied to it.</li>
                        <li>The class <code>table-striped</code> is optional. It will enhance every second row.</li>
                    </ul></p>',
        'code' => '
{code}<!-- Basic table with striped rows -->
<table class="table table-striped"> 
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
    [
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
</table>{/code}']
];