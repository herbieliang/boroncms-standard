<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file.
     */
    public function run()
    {
        DB::table(config('admin.database.menu_table'))->delete();

        DB::table(config('admin.database.menu_table'))->insert([
            0 => [
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Index',
                'icon' => 'feather icon-bar-chart-2',
                'uri' => '/',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ],
            1 => [
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Admin',
                'icon' => 'feather icon-settings',
                'uri' => '',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ],
            2 => [
                'id' => 3,
                'parent_id' => 2,
                'order' => 4,
                'title' => 'Users',
                'icon' => '',
                'uri' => 'auth/users',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ],
            3 => [
                'id' => 4,
                'parent_id' => 2,
                'order' => 5,
                'title' => 'Roles',
                'icon' => '',
                'uri' => 'auth/roles',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ],
            4 => [
                'id' => 5,
                'parent_id' => 2,
                'order' => 6,
                'title' => 'Permission',
                'icon' => '',
                'uri' => 'auth/permissions',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ],
            5 => [
                'id' => 6,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Menu',
                'icon' => '',
                'uri' => 'auth/menu',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ],
            6 => [
                'id' => 7,
                'parent_id' => 2,
                'order' => 8,
                'title' => 'Extensions',
                'icon' => '',
                'uri' => 'auth/extensions',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ],
            7 => [
                'id' => 8,
                'parent_id' => 2,
                'order' => 3,
                'title' => 'Setting',
                'icon' => '',
                'uri' => '/setting',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ],
            8 => [
                'id' => 9,
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Slide',
                'icon' => 'fa-industry',
                'uri' => '',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ],
            9 => [
                'id' => 10,
                'parent_id' => 9,
                'order' => 10,
                'title' => 'Slide category',
                'icon' => '',
                'uri' => '/slide-category',
                'extension' => '',
                'show' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ]
        ]);
    }

}
