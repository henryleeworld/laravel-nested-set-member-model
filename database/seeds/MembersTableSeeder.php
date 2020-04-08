<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('members')->delete();
        
        \DB::table('members')->insert([
            0 => 
            [
                'id' => 1,
                'name' => '瑪莉歐',
                'parent_id' => NULL,
                '_lft' => 1,
                '_rgt' => 48,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            1 => 
            [
                'id' => 2,
                'name' => '林克',
                'parent_id' => 1,
                '_lft' => 2,
                '_rgt' => 23,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            2 => 
            [
                'id' => 3,
                'name' => '克勞德．史托萊夫',
                'parent_id' => 2,
                '_lft' => 3,
                '_rgt' => 20,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            3 => 
            [
                'id' => 4,
                'name' => '克雷多斯',
                'parent_id' => 3,
                '_lft' => 4,
                '_rgt' => 5,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            4 => 
            [
                'id' => 5,
                'name' => 'Sonic',
                'parent_id' => 3,
                '_lft' => 6,
                '_rgt' => 19,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            5 => 
            [
                'id' => 6,
                'name' => '尼克‧伯利克',
                'parent_id' => 5,
                '_lft' => 7,
                '_rgt' => 16,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            6 => 
            [
                'id' => 7,
                'name' => '普萊斯隊長',
                'parent_id' => 6,
                '_lft' => 8,
                '_rgt' => 11,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            7 => 
            [
                'id' => 8,
                'name' => '耀西',
                'parent_id' => 7,
                '_lft' => 9,
                '_rgt' => 10,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            8 => 
            [
                'id' => 9,
                'name' => '卡比',
                'parent_id' => 6,
                '_lft' => 12,
                '_rgt' => 15,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            9 => 
            [
                'id' => 10,
                'name' => 'Carl Johnson',
                'parent_id' => 9,
                '_lft' => 13,
                '_rgt' => 14,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            10 => 
            [
                'id' => 11,
                'name' => '莎姆絲．阿蘭',
                'parent_id' => 5,
                '_lft' => 17,
                '_rgt' => 18,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            11 => 
            [
                'id' => 12,
                'name' => '小精靈',
                'parent_id' => 2,
                '_lft' => 21,
                '_rgt' => 22,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            12 => 
            [
                'id' => 13,
                'name' => 'Master Chief',
                'parent_id' => 1,
                '_lft' => 24,
                '_rgt' => 25,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            13 => 
            [
                'id' => 14,
                'name' => 'Solid Snake',
                'parent_id' => 1,
                '_lft' => 26,
                '_rgt' => 47,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            14 => 
            [
                'id' => 15,
                'name' => '蘿拉．卡芙特',
                'parent_id' => 14,
                '_lft' => 27,
                '_rgt' => 28,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            15 => 
            [
                'id' => 16,
                'name' => '高登．弗里曼',
                'parent_id' => 14,
                '_lft' => 29,
                '_rgt' => 46,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            16 => 
            [
                'id' => 17,
                'name' => 'Crash',
                'parent_id' => 16,
                '_lft' => 30,
                '_rgt' => 43,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            17 => 
            [
                'id' => 18,
                'name' => '拉捷特',
                'parent_id' => 17,
                '_lft' => 31,
                '_rgt' => 32,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            18 => 
            [
                'id' => 19,
                'name' => '奈森‧德瑞克',
                'parent_id' => 17,
                '_lft' => 33,
                '_rgt' => 42,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            19 => 
            [
                'id' => 20,
                'name' => 'Marcus Fenix',
                'parent_id' => 19,
                '_lft' => 34,
                '_rgt' => 37,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            20 => 
            [
                'id' => 21,
                'name' => '洛克人',
                'parent_id' => 20,
                '_lft' => 35,
                '_rgt' => 36,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            21 => 
            [
                'id' => 22,
                'name' => '皮卡丘',
                'parent_id' => 19,
                '_lft' => 38,
                '_rgt' => 41,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            22 => 
            [
                'id' => 23,
                'name' => 'Sam Fisher',
                'parent_id' => 22,
                '_lft' => 39,
                '_rgt' => 40,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            23 => 
            [
                'id' => 24,
                'name' => 'John MacTavish',
                'parent_id' => 16,
                '_lft' => 44,
                '_rgt' => 45,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
        ]);
    }
}