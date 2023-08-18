<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberLabels = ['الثالث', 'الرابع', 'الخامس', 'السادس', 'السابع'];
        //
        \App\Models\Semester::factory()->create([
            'name' => 'السيمستر الأول',
            'department_id' => 1
        ]);

        \App\Models\Semester::factory()->create([
            'name' => 'السيمستر الثاني',
            'department_id' => 1
        ]);

        // software engineering
        foreach($numberLabels as $label){
            \App\Models\Semester::factory()->create([
                'name' => 'السيمستر ' . $label,
                'department_id' => 2
            ]);
        }

        // telecomunication
        foreach($numberLabels as $label){
            \App\Models\Semester::factory()->create([
                'name' => 'السيمستر ' . $label,
                'department_id' => 3
            ]);
        }

        // telecomunication
        foreach($numberLabels as $label){
            \App\Models\Semester::factory()->create([
                'name' => 'السيمستر ' . $label,
                'department_id' => 4
            ]);
        }
    }
}
