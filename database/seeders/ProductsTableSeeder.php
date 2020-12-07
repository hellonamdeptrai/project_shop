<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        for ($i = 1; $i <= 30;$i++){
            DB::table('products')->insert([
                'name' => $name = 'Iphone '.$i,
                'slug' => \Illuminate\Support\Str::slug($name),
                'origin_price' => $origin = 5000*$i,
                'brand' => 'Iphone',
                'sale_price' => $sale = 4500*$i,
                'discount_percent' => (($origin - $sale)/$sale)*100  ,
                'content' => 'hihi hihi hihi',
                'user_id' => $i,
                'category_id' => $i,
                'status' => 1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'deleted_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }
}
