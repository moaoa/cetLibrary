<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Department::factory()->create([
            'name' => 'العام',

            'icon' => 'fa-solid fa-chalkboard-user fa-xl ms-2'
        ]);
        \App\Models\Department::factory()->create([
            'name' => 'الحاسب الألي',
            'icon' => 'fa-solid fa-code fa-xl ms-2'
        ]);
        \App\Models\Department::factory()->create([
            'name' => 'الأتصالات',
            'icon' => 'fa-solid fa-network-wired fa-xl ms-2'
        ]);
        \App\Models\Department::factory()->create([
            'name' => 'التحكم',
            'icon' => 'fa-solid fa-robot fa-xl ms-2'
        ]);
    }
}
