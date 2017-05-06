<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '/admin',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '/admin/media',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '/admin/posts',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '/admin/users',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '/admin/categories',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '/admin/pages',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '/admin/roles',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '/admin/menus',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 10,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '/admin/database',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 11,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '/admin/settings',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2017-05-01 12:07:26',
                'updated_at' => '2017-05-01 12:07:26',
                'route' => NULL,
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 2,
                'title' => 'PHP',
                'url' => '/category/php',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 13,
                'created_at' => '2017-05-02 13:59:58',
                'updated_at' => '2017-05-02 13:59:58',
                'route' => NULL,
                'parameters' => '',
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 2,
                'title' => 'Golang',
                'url' => '/category/golang',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2017-05-02 14:00:27',
                'updated_at' => '2017-05-02 14:00:27',
                'route' => NULL,
                'parameters' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 2,
                'title' => 'Others',
                'url' => '/category/others',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 15,
                'created_at' => '2017-05-02 14:00:54',
                'updated_at' => '2017-05-02 14:00:54',
                'route' => NULL,
                'parameters' => '',
            ),
        ));
        
        
    }
}