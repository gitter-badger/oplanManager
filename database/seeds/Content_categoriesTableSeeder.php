<?php

use App\Content_category;
use Illuminate\Database\Seeder;

class Content_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Content_category::create([
        'type' => 'page',
        'title' => 'nezařazeno'
        ]);

      Content_category::create([
        'type' => 'page',
        'title' => 'Oddilovy přebor'
        ]);

      Content_category::create([
        'type' => 'page',
        'title' => 'Tábor'
        ]);

    }
}
