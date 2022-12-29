<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class AdsTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Tag::create([
            'id'=>1,
            'name' => 'film'
        ]);

        Tag::create([
            'id'=>2,
            'name' => 'car'
        ]);
        
        Tag::create([
            'id'=>3,
            'name' => 'food'
        ]);

        Tag::create([
            'id'=>4,
            'name' => 'sport'
        ]);
    }
}
