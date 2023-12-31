<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $teachers = [
            'ا.هدى جمعة',
            'ا.عبد سلام القطاوي',
            'ا.كرم نصار',
            'ا .احمد بن مصطفى',
            'ا.ناجي عبد الرحمن',
            'ا.عبد حكيم قجة',
            'ا.محمد الفرجاني (رحمه الله)',
            'ا.زهرة الأشعل',
            'د.ظافر خليل',
            'د.عبد القادر الأمين',
            'د.محمد شرود',
            'د.حافظ البوعيشي',
            'د.ضياء مزوغي',
            'د.طارق الشويهدي',
            'م.مصطفى الطاهر',
            'د.نوري ميلادي',
            'د.صلاح العيدودي',
            'ربيع شويهدي',
            'زياد شنيب',
            'خالد المزوغي',
            'حسن ناجي',
            'منذر',
            'احمد الناجح',
            'د.مصطفى الشاطر',
            'أ.أيمن الترهوني',
            'أ.حياة الغولة',
            'د. محمد المزوغي',
            'أ. مختار عبد النور',
            'أ.حيدر السويح',
            'د.سعيد عكة',
            'د.امحمد بحيح',
            'أ.عبد الباسط المشاط',
            'أ. حسام الهنشيري',
            'أ. أحمد عاشور',
            'أ.إدريس إنبيص',
            'م.أريج أبوقرين',
            'د.مسعود الداقل',
            'د.تمام بن موسى',
            'د.بشير الجللي',
            'د.عبد الجواد المزوغي'
        ];
        foreach($teachers as $teacherName){
            \App\Models\Teacher::create([
                'name' => $teacherName,
            ]);
        }
    }
}
