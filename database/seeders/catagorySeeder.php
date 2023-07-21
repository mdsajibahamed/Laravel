<?php

namespace Database\Seeders;

use App\Models\catagory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class catagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <=20; $i++) { 
           catagory::create([
            'name'=>fake()->name(),
            'description'=>fake()->text(),
           ]);
        }
    }
}
