<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menus')->insert([
          'label' => 'Náš klub',
          'long' => 'Bez omezení',
          'dropdown' => '1',
          'link' => 'pages/10'
      ]);


    }
}
