<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('cars')->insert([
        //     'description' => Str::random(10),
        //     'model' => Str::random(10),
        //     'produced_on' => date('Y/m/d'),
        //     'image' => 'hinhanh'.rand(1,3),'.jpg',
        // ]);
        Car::factory()->count(50)->create();
    }
}
