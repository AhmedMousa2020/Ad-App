<?php

namespace Database\Seeders;

use App\Models\AdsTags;
use Illuminate\Database\Seeder;

class AdsTagRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdsTags::create([
            'id'=>1,
            'ads_post_id' => 1,
            'tag_id' => 1,
        ]);

        
        AdsTags::create([
            'id'=>2,
            'ads_post_id' => 2,
            'tag_id' => 1,
        ]);

        
        AdsTags::create([
            'id'=>3,
            'ads_post_id' => 3,
            'tag_id' => 2,
        ]);

        AdsTags::create([
            'id'=>4,
            'ads_post_id' => 4,
            'tag_id' => 3,
        ]);

        AdsTags::create([
            'id'=>5,
            'ads_post_id' => 5,
            'tag_id' => 3,
        ]);
    }
}
