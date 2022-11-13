<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 5; $i++) {
            DB::table('course')->insert([
                'nama' => uniqid('course_'),
                'deskripsi' => uniqid('deskripsi_'),
                'created_at' => new \DateTime,
                'updated_at' => null,
            ]);
        }
    }
}
