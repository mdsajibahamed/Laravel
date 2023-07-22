<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <=20; $i++) { 
           category::create([
            'name'=>fake()->name(),
            'description'=>fake()->text(),
           ]);
        }
    }
}
