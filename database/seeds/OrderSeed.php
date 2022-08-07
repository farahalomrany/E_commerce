<?php

use Illuminate\Database\Seeder;

class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([[
            'total_price'=> '50000',
            'date'=>'2022-08-04',
            'user_id'=>'1'  

         ],
         [
            'total_price'=> '64000',
            'date'=>'2022-08-10',
            'user_id'=>'3'  

         ],
         [
            'total_price'=> '45000',
            'date'=>'2022-08-09',
            'user_id'=>'2'  

         ],
         
        ]);
    }
}
