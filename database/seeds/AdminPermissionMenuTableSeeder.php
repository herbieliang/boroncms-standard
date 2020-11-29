<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminPermissionMenuTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        DB::table(config('admin.database.permission_menu_table'))->delete();

        DB::table(config('admin.database.permission_menu_table'))->insert([
            0 => [
                'permission_id' => 7,
                'menu_id'       => 8,
                'created_at'    => Carbon::now(),
                'updated_at'    => NULL,
            ],
            1 => [
                'permission_id' => 9,
                'menu_id'       => 9,
                'created_at'    => Carbon::now(),
                'updated_at'    => NULL,
            ],
            2 => [
                'permission_id' => 9,
                'menu_id'       => 10,
                'created_at'    => Carbon::now(),
                'updated_at'    => NULL,
            ],
        ]);
    }
}
