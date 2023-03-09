<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
use Database\Factories\CountryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $continents = [
            ['id' => 6, 'name' => 'Europe',],
            ['id' => 7, 'name' => 'Asia',],
            ['id' => 8, 'name' => 'Africa',],
            ['id' => 9, 'name' => 'South America',],
            ['id' => 10, 'name' => 'North America',],
        ];
        foreach ($continents as $continent) {
            \App\Models\Continent::factory()->create($continent)
                ->each(function ($c) {
                    $c->countries()->saveMany(Country::factory(10)->make());
                });;
        }

        Product::factory(100)->create();
    }
}
