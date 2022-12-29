<?php

namespace Database\Seeders;

use App\Models\AdsPost;
use Illuminate\Database\Seeder;

class AdsPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdsPost::create([
            'type' => 'paid',
            'title' => 'the Flash',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
            "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
            'category_id' => '1',
            'user_id' => '1',
            'start_date'=>'2022-12-25 00:00:00'
        ]);

        AdsPost::create([
            'type' => 'paid',
            'title' => 'black Adam',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
            "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
            'category_id' => '1',
            'user_id' => '1',
            'start_date'=>'2022-12-25 00:00:00'
        ]);


        AdsPost::create([
            'type' => 'free',
            'title' => 'BMW',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
            "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
            'category_id' => '2',
            'user_id' => '2',
            'start_date'=>'2022-12-25 00:00:00'
        ]);


        AdsPost::create([
            'type' => 'free',
            'title' => 'Chiken',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
            "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
            'category_id' => '3',
            'user_id' => '1',
            'start_date'=>'2022-12-25 00:00:00'
        ]);

        
        AdsPost::create([
            'type' => 'free',
            'title' => 'beef',
            'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
            "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
            'category_id' => '3',
            'user_id' => '2',
            'start_date'=>'2022-12-25 00:00:00'
        ]);
    }
}
