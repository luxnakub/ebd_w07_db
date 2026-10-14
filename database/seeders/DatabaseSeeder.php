<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. ตาราง tag
        DB::table('tag')->insert([
            ['tag_name' => "วังสวนบ้านแก้ว"],
            ['tag_name' => "มหาวิทยาลัยราชภัฏรำไพพรรณี"],
            ['tag_name' => "เรือนเขียว"],
            ['tag_name' => "เรือนเทา"],
        ]);

        // 2. ตาราง titles
        DB::table('titles')->insert([
            ['title_name' => 'นาย'],
            ['title_name' => 'นาง'],
            ['title_name' => 'นางสาว'],
        ]);

        // 3. ตาราง organizations
        DB::table('organizations')->insert([
            ['org_name' => 'คณะวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ'],
            ['org_name' => 'สำนักงานอธิการบดี'],
        ]);

        // 4. ตาราง communities
        DB::table('communities')->insert([
            ['community_name' => 'ชุมชนริมน้ำจันทบูร', 'location' => 'อ.เมือง จ.จันทบุรี'],
            ['community_name' => 'ชุมชนหนองบัว', 'location' => 'อ.เมือง จ.จันทบุรี'],
        ]);

        // 5. ตาราง staffs
        DB::table('staffs')->insert([
            ['title_id' => 1, 'org_id' => 1, 'name' => 'ธนากร เสนามนตรี'],
        ]);

        // 6. ตาราง activities
        DB::table('activities')->insert([
            ['community_id' => 1, 'activity_name' => 'โครงการพัฒนาไอทีชุมชน', 'activity_date' => '2026-10-15'],
        ]);
    }
}