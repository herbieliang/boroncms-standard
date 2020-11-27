<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        DB::table(config('admin.database.users_table'))->delete();

        DB::table(config('admin.database.users_table'))->insert([
            0 => [
                'id'             => 1,
                'username'       => 'master',
                'password'       => Hash::make('master'),
                'name'           => 'Administrator',
                'avatar'         => NULL,
                'remember_token' => NULL,
                'created_at'     => Carbon::now(),
                'updated_at'     => NULL,
            ],
        ]);
    }
}
