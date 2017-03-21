<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentDesktopController extends Controller
{
    public function index()
    {
        $main_menu = [
            ['url' => 'menu1', 'label' => 'Opslagstavle', 'icon' => 'fa-thumb-tack', 'is_active' => true],
            ['url' => 'menu2', 'label' => 'Stamkort', 'icon' => 'fa-wpforms', 'is_active' => false],
            ['url' => 'menu3', 'label' => 'Aftaler', 'icon' => 'fa-calendar', 'is_active' => false],
            ['url' => 'menu4', 'label' => 'Beskeder', 'icon' => 'fa-comment-o', 'is_active' => false],
            ['url' => 'menu5', 'label' => 'Ferie / Fri', 'icon' => 'fa-calendar-times-o', 'is_active' => false],
            ['url' => 'menu6', 'label' => 'Aktiviteter', 'icon' => 'fa-futbol-o', 'is_active' => false,],
            ['url' => 'menu6', 'label' => 'Arrangementer', 'icon' => 'fa-birthday-cake', 'is_active' => false,],
            ['url' => 'menu7', 'label' => 'Kontakter', 'icon' => 'fa-users', 'is_active' => false],
            ['url' => 'menu8', 'label' => 'Telefonlister', 'icon' => 'fa-phone', 'is_active' => false,],
            ['url' => 'menu9', 'label' => 'Personale', 'icon' => 'fa-user-secret', 'is_active' => false,],
            ['url' => 'menu10', 'label' => 'Billeder', 'icon' => 'fa-picture-o', 'is_active' => false,],
            ['url' => 'menu11', 'label' => 'Tjenester', 'icon' => 'fa-sliders', 'is_active' => false,],
        ];

        return view('demo.opslagstavle-foraeldre', ['has_submenu' => false, 'main_menu_items' => $main_menu]);
    }
}
