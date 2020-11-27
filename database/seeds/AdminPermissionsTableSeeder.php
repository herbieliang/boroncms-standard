<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminPermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        DB::table(config('admin.database.permissions_table'))->delete();

        DB::table(config('admin.database.permissions_table'))->insert([
            0 => [
                'id'          => 1,
                'name'        => 'Auth management',
                'slug'        => 'auth-management',
                'http_method' => '',
                'http_path'   => '',
                'order'       => 1,
                'parent_id'   => 0,
                'created_at'  => Carbon::now(),
                'updated_at'  => NULL,
            ],
            1 => [
                'id'          => 2,
                'name'        => 'Users',
                'slug'        => 'users',
                'http_method' => '',
                'http_path'   => '/auth/users*',
                'order'       => 2,
                'parent_id'   => 1,
                'created_at'  => Carbon::now(),
                'updated_at'  => NULL,
            ],
            2 => [
                'id'          => 3,
                'name'        => 'Roles',
                'slug'        => 'roles',
                'http_method' => '',
                'http_path'   => '/auth/roles*',
                'order'       => 3,
                'parent_id'   => 1,
                'created_at'  => Carbon::now(),
                'updated_at'  => NULL,
            ],
            3 => [
                'id'          => 4,
                'name'        => 'Permissions',
                'slug'        => 'permissions',
                'http_method' => '',
                'http_path'   => '/auth/permissions*',
                'order'       => 4,
                'parent_id'   => 1,
                'created_at'  => Carbon::now(),
                'updated_at'  => NULL,
            ],
            4 => [
                'id'          => 5,
                'name'        => 'Menu',
                'slug'        => 'menu',
                'http_method' => '',
                'http_path'   => '/auth/menu*',
                'order'       => 5,
                'parent_id'   => 1,
                'created_at'  => Carbon::now(),
                'updated_at'  => NULL,
            ],
            5 => [
                'id'          => 6,
                'name'        => 'Extension',
                'slug'        => 'extension',
                'http_method' => '',
                'http_path'   => '/auth/extensions*',
                'order'       => 6,
                'parent_id'   => 1,
                'created_at'  => Carbon::now(),
                'updated_at'  => NULL,
            ],
            6 => [
                'id'          => 7,
                'name'        => 'Setting',
                'slug'        => 'setting',
                'http_method' => '',
                'http_path'   => '/setting*',
                'order'       => 7,
                'parent_id'   => 0,
                'created_at'  => Carbon::now(),
                'updated_at'  => NULL,
            ],
        ]);
    }
}
