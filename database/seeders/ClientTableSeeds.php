<?php

namespace Database\Seeders;

use App\Models\ClientModel;
use Illuminate\Database\Seeder;

class ClientTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientModel::factory(10)->create();

    }
}
