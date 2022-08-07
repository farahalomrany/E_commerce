<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'name'=> 'Sweater',

         ],
         [
            'name'=> 'Pant',

         ],
         [
            'name'=> 'Dress',

         ],
         [
            'name'=> 'Blouse',

         ],
         [
            'name'=> 'Shoes',

         ],
         [
            'name'=> 'Boot',

         ],
         [
            'name'=> 'High_Heel',

         ],

        ]);
    }
}
