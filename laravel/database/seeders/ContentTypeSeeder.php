<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('content_types')
        ->insert([ 'id' => 1, 'name' => 'Animal' ])
        ->insert([ 'id' => 2, 'name' => 'Vegetable' ])
        ->insert([ 'id' => 3, 'name' => 'Mineral' ])
        ->insert([ 'id' => 4, 'name' => 'Umami' ]);

    }
}
