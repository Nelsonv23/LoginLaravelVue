<?php

namespace Database\Seeders;

use App\Models\Songs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crea 10 registros de canciones
        Songs::factory(10)->create();
    }
}
