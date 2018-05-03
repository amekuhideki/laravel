<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
          [
              'title' => '音楽'
          ],[
              'title' => '飲食'
          ]
      ]);
    }
}
