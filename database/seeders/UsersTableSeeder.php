<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('users')->insert([
                'name' => 'admin',
                'phone' => '1234567890',
                'avatar' => 'user.png',
                'address' => 'Ha noi',
                'postion' => 3,
                'status' => 1,
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
    }
}
