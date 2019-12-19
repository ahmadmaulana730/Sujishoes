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
        $this->call(CategoryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
