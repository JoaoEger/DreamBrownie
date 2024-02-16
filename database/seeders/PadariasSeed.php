<?php

namespace Database\Seeders;

use App\Models\Padarias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PadariasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Padarias::factory(9)->create();
    }
}
