<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tag')->insert([
            ['tag_name' => "วังสวนบ้านแก้ว"],
            ['tag_name' => "มหาวิทยาลัยราชภัฏรำไพพรรณี"],
            ['tag_name' => "เรือนเขียว"],
            ['tag_name' => "เรือนเทา"],
        ]);
    }
}