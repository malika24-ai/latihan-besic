<?php

namespace Database\Seeders;

use App\Models\Departemen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departemen::create(['name' => 'sistem informasi']);
        Departemen::create(['name' => 'Teknik Informatika']);
        Departemen::create(['name' => 'bisnis digital']);
        Departemen::create(['name' => 'Teknologi Informasi']);
        Departemen::create(['name' => 'pendidikan teknologi informasi']);
        Departemen::create(['name' => 'megister komputer']);
    }
}
