<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminRoleUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        DB::table(config('admin.database.role_users_table'))->delete();

        DB::table(config('admin.database.role_users_table'))->insert([
            0 => [
                'role_id'    => 1,
                'user_id'    => 1,
                'created_at' => Carbon::now(),
                'updated_at' => NULL,
            ],
        ]);
    }
}
