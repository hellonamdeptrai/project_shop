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
        for ($i = 1; $i <= 80;$i++){
            $status = 0;
            if ($i<=20) {
                $status = 1;
            }else if($i>20&&$i<=40) {
                $status = 2;
            }else if($i>40&&$i<=60) {
                $status = 3;
            }else {
                $status =4;
            };
            DB::table('products')->insert([
                'name' => $name = 'Iphone '.$i,
                'slug' => \Illuminate\Support\Str::slug($name),
                'origin_price' => $origin = 19000000*$i,
                'brand' => 'Iphone',
                'sale_price' => $sale = 15000000*$i,
                'discount_percent' => (($origin - $sale)/$sale)*100  ,
                'content' => 'hihi hihi hihi',
                'user_id' => $i,
                'category_id' => $i,
                'status' => $status,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }
}
