<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;;

class ServiceSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('services')->insert([
                'type' => "Thu Âm",
                'image' => '1.gif',
                'name' => 'Gói thu cơ bản',
                'description' => ''
            ]);
            DB::table('services')->insert([
                'type' => "Thu Âm",
                'image' => '2.gif',
                'name' => 'Gói thu chuyên nghiệp',
                'description' => ''
            ]);
            DB::table('services')->insert([
                'type' => "Thu Âm",
                'image' => '3.gif',
                'name' => 'Quay MV phòng thu',
                'description' => ''
            ]);
            DB::table('services')->insert([
                'type' => "Quay Chụp",
                'image' => '4.gif',
                'name' => 'Quay MV ngoại cảnh(Cơ Bản)',
                'description' => ''
            ]);
            DB::table('services')->insert([
                'type' => "Quay Chụp",
                'image' => '5.gif',
                'name' => 'Quay MV ngoại cảnh(Chuyên Nghiệp)',
                'description' => ''
            ]);
            DB::table('services')->insert([
                'type' => "Quay Chụp",
                'image' => '6.gif',
                'name' => 'Chụp cơ bản, Beauty',
                'description' => ''
            ]);
            DB::table('services')->insert([
                'type' => "Hòa âm Phối Khí",
                'image' => '7.gif',
                'name' => 'Cover(Hòa âm Phối Khí)',
                'description' => ''
            ]);
            DB::table('services')->insert([
                'type' => "Hòa âm Phối Khí",
                'image' => '8.gif',
                'name' => 'Bài hát mới(Hòa âm Phối Khí)',
                'description' => ''
            ]);
    }
}
