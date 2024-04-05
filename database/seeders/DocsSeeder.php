<?php

namespace Database\Seeders;

use App\Models\Auto;
use App\Models\Property;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::factory(16)->create();
        Property::factory(100)->create();
        Auto::factory(100)->create();
    }
}
