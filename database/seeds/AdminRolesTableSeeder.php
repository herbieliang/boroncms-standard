<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminRolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        DB::table(config('admin.database.roles_table'))->delete();

        DB::table(config('admin.database.roles_table'))->insert([
            0 => [
                'id'         => 1,
                'name'       => 'Administrator',
                'slug'       => 'administrator',
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
            ],
        ]);
    }
}
