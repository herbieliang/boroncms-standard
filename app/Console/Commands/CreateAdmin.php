<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Exception;

class CreateAdmin extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成管理员账号';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $username = $this->ask('Please enter username');

        // 判断管理员账号是否已存在
        $is_exisis = DB::table(config('admin.database.users_table'))->where('username', $username)->exists();
        if ($is_exisis) {
            $this->error('username is exixts!');
            $this->handle();
            exit();
        }

        $password = $this->ask('Please enter password');

        DB::beginTransaction();
        try {
            $user_id = DB::table(config('admin.database.users_table'))->insertGetId([
                    'username' => $username,
                    'password' => Hash::make($password),
                    'name' => $username,
                    'created_at' => Carbon::now()
            ]);
            DB::table(config('admin.database.role_users_table'))->insert([
                    'role_id' => 1,
                    'user_id' => $user_id,
                    'created_at' => Carbon::now()
            ]);

            DB::commit();

            $this->info('Created successfully!');
        }
        catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

}
