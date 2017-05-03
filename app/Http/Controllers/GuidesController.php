<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guidesController extends Controller
{

    function index()
    {
        include resource_path('views/demo/guides/_overview.php');
        include resource_path('views/demo/guides/_fonts.php');
        include resource_path('views/demo/guides/_grids.php');
        include resource_path('views/demo/guides/_containers.php');
        include resource_path('views/demo/guides/_menus.php');
        include resource_path('views/demo/guides/_images.php');
        include resource_path('views/demo/guides/_dialogs.php');
        include resource_path('views/demo/guides/_buttons.php');
        include resource_path('views/demo/guides/_forms.php');
        include resource_path('views/demo/guides/_tables.php');
        include resource_path('views/demo/guides/_wcag.php');

        $guide_styles = [
            'overview' => $guide_overview,
            'fonts' => $guide_fonts,
            'grids' => $guide_grids,
            'containers' => $guide_containers,
            'menus' => $guide_menus,
            'images' => $guide_images,
            'dialogs' => $guide_dialogs,
            'buttons' => $guide_buttons,
            'forms' => $guide_forms,
            'tables' => $guide_tables,
            'wcag' => $guide_wcag
        ];


        // Make sure 'url' are the same as $guide_styles array names
        $main_menu = [
            ['url' => 'overview', 'label' => 'Guide introduction', 'icon' => 'fa-file-text-o', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'fonts', 'label' => 'Text & fonts', 'icon' => 'fa-font', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'grids', 'label' => 'Grids', 'icon' => 'fa-columns', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'containers', 'label' => 'Containers / Panels', 'icon' => 'fa-id-card-o', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'menus', 'label' => 'Menus', 'icon' => 'fa-th-list', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'images', 'label' => 'Images and Icons', 'icon' => 'fa-photo', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'dialogs', 'label' => 'Dialogs', 'icon' => 'fa-window-maximize', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'buttons', 'label' => 'Button & links', 'icon' => 'fa-link', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'forms', 'label' => 'Forms & input elements', 'icon' => 'fa-check-square-o', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'tables', 'label' => 'Table layout', 'icon' => 'fa-table', 'is_active' => false, 'sub_items' => [] ],
            ['url' => 'wcag', 'label' => 'WCAG 2', 'icon' => 'fa-blind', 'is_active' => false, 'sub_items' => [] ]
        ];


        function safeForClass($str){
            return preg_replace('/\W+/','',$str);
        }

        foreach($main_menu as $key => $menu_item){
            foreach($guide_styles[$menu_item['url']] as $style_item) {
                if(!empty($style_item['is_anchor'])){
                    $elm = array('url' => '?p='.$menu_item['url'], 'subclass' => safeForClass($style_item['title']), 'label' => $style_item['title']);
                    array_push( $main_menu[$key]['sub_items'], $elm );
                }
            }
        }


        return view('demo.guide', ['snippets' => $guide_styles, 'has_submenu' => false, 'main_menu_items' => $main_menu]);
    }
}
