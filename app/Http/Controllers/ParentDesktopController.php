<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentDesktopController extends Controller
{
    public function index()
    {
        $main_menu = [
            ['url' => 'menu1', 'label' => 'Opslagstavle', 'icon' => 'pin_drop', 'is_active' => true],
            ['url' => 'menu2', 'label' => 'Stamkort', 'icon' => 'account_box', 'is_active' => false],
            ['url' => 'menu3', 'label' => 'Aftaler', 'icon' => 'event_note', 'is_active' => false],
            ['url' => 'menu4', 'label' => 'Beskeder', 'icon' => 'chat_bubble_outline', 'is_active' => false],
            ['url' => 'menu5', 'label' => 'Ferie / Fri', 'icon' => 'event_busy', 'is_active' => false],
            ['url' => 'menu6', 'label' => 'Aktiviteter', 'icon' => 'event', 'is_active' => false,],
            ['url' => 'menu7', 'label' => 'Kontakter', 'icon' => 'tag_faces', 'is_active' => false],
            ['url' => 'menu8', 'label' => 'Telefonlister', 'icon' => 'list', 'is_active' => false,],
            ['url' => 'menu9', 'label' => 'Personale', 'icon' => 'people', 'is_active' => false,],
            ['url' => 'menu10', 'label' => 'Billeder', 'icon' => 'image', 'is_active' => false,],
            ['url' => 'menu11', 'label' => 'Tjenester', 'icon' => 'assessment', 'is_active' => false,],
        ];

        return view('demo.opslagstavle-foraeldre', ['has_submenu' => false, 'main_menu_items' => $main_menu]);
    }
}
