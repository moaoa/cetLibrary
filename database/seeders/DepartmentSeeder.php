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
        ]);
        \App\Models\Department::factory()->create([
            'name' => 'الحاسب الألي',
        ]);
        \App\Models\Department::factory()->create([
            'name' => 'الأتصالات',
        ]);
        \App\Models\Department::factory()->create([
            'name' => 'التحكم',
        ]);
    }
}
