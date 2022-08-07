<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([[
            'name'=> 'LV',

         ],
         [
            'name'=> 'Dior',

         ],
         [
            'name'=> 'Cloi',
         ],
   
         [
            'name'=> 'Ganza',
         ],
   
         [
            'name'=> 'Eva',
         ]
   
       ]
       );
    }
}
