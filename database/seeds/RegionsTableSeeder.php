<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('regions')->insert([
          'short' => 'Vše',
          'long' => 'Bez omezení',
          'description' => 'Všechny regiony v systému',
      ]);

      DB::table('regions')->insert([
          'short' => 'ČR',
          'long' => 'Česká Republika',
          'description' => 'Platné pro celou Českou Republiku - bez omezení',
      ]);

      DB::table('regions')->insert([
          'short' => 'EU',
          'long' => 'Evropská unie',
          'description' => 'Státy Evropské unie a státy na kontinentu evropa',
      ]);

    }
}
