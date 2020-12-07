<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            'name' => $name = 'Iphone',
            'slug' => \Illuminate\Support\Str::slug($name),
            'parent_id' => 1,
            'depth' => 'phone/'.$name,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'Samsung',
            'slug' => \Illuminate\Support\Str::slug($name),
            'parent_id' => 1,
            'depth' => 'phone/'.$name,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'Oppo',
            'slug' => \Illuminate\Support\Str::slug($name),
            'parent_id' => 1,
            'depth' => 'phone/'.$name,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'Xiaomi',
            'slug' => \Illuminate\Support\Str::slug($name),
            'parent_id' => 1,
            'depth' => 'phone/'.$name,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'Vivo',
            'slug' => \Illuminate\Support\Str::slug($name),
            'parent_id' => 1,
            'depth' => 'phone/'.$name,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        DB::table('categories')->insert([
            'name' => $name = 'Realme',
            'slug' => \Illuminate\Support\Str::slug($name),
            'parent_id' => 1,
            'depth' => 'phone/'.$name,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
    }
}
