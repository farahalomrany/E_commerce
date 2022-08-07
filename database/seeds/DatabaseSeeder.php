<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([BrandSeeder::class,
        StateSeeder::class,
        LocationSeeder::class,
        CategorySeeder::class,
        UserSeeder::class,
        ProductSeeder::class,
        StockSeeder::class,
        OrderSeed::class,
        OrderDetailsSeed::class,
        
       // StockSeeder::class,
        

        ]);
    }
}
