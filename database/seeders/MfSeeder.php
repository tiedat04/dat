<?php

namespace Database\Seeders;

use App\Models\mf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        mf::factory()->count(10)->create();
    }
}