<?php

namespace Database\Seeders;

use App\Models\AdsCategory;
use Illuminate\Database\Seeder;

class AdsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdsCategory::create([
            'id'=>1,
            'title' => 'movies'
        ]);

        
        AdsCategory::create([
            'id'=>2,
            'title' => 'cars'
        ]);

        
        AdsCategory::create([
            'id'=>3,
            'title' => 'food'
        ]);

        
        AdsCategory::create([
            'id'=>4,
            'title' => 'sport'
        ]);
    }
}
