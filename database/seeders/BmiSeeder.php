<?php

namespace Database\Seeders;

use App\Models\Bmi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BmiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bmi::factory(10)->create();
    }
}
