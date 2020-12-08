<?php

namespace Database\Seeders;

use App\Models\ComplaintModel;
use Illuminate\Database\Seeder;

class ComplaintTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComplaintModel::factory(10)->create();

    }
}
