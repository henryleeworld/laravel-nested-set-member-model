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
                'tier' => NULL,
                'parent_id' => NULL,
                'left' => 1,
                'right' => 48,
                'depth' => 0,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            1 => 
            [
                'id' => 2,
                'name' => '林克',
                'tier' => NULL,
                'parent_id' => 1,
                'left' => 2,
                'right' => 23,
                'depth' => 1,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            2 => 
            [
                'id' => 3,
                'name' => '克勞德．史托萊夫',
                'tier' => NULL,
                'parent_id' => 2,
                'left' => 3,
                'right' => 20,
                'depth' => 2,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            3 => 
            [
                'id' => 4,
                'name' => '克雷多斯',
                'tier' => NULL,
                'parent_id' => 3,
                'left' => 4,
                'right' => 5,
                'depth' => 3,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            4 => 
            [
                'id' => 5,
                'name' => 'Sonic',
                'tier' => NULL,
                'parent_id' => 3,
                'left' => 6,
                'right' => 19,
                'depth' => 3,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            5 => 
            [
                'id' => 6,
                'name' => '尼克‧伯利克',
                'tier' => NULL,
                'parent_id' => 5,
                'left' => 7,
                'right' => 16,
                'depth' => 4,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            6 => 
            [
                'id' => 7,
                'name' => '普萊斯隊長',
                'tier' => NULL,
                'parent_id' => 6,
                'left' => 8,
                'right' => 11,
                'depth' => 5,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            7 => 
            [
                'id' => 8,
                'name' => '耀西',
                'tier' => NULL,
                'parent_id' => 7,
                'left' => 9,
                'right' => 10,
                'depth' => 6,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            8 => 
            [
                'id' => 9,
                'name' => '卡比',
                'tier' => NULL,
                'parent_id' => 6,
                'left' => 12,
                'right' => 15,
                'depth' => 5,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            9 => 
            [
                'id' => 10,
                'name' => 'Carl Johnson',
                'tier' => NULL,
                'parent_id' => 9,
                'left' => 13,
                'right' => 14,
                'depth' => 6,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            10 => 
            [
                'id' => 11,
                'name' => '莎姆絲．阿蘭',
                'tier' => NULL,
                'parent_id' => 5,
                'left' => 17,
                'right' => 18,
                'depth' => 4,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            11 => 
            [
                'id' => 12,
                'name' => '小精靈',
                'tier' => NULL,
                'parent_id' => 2,
                'left' => 21,
                'right' => 22,
                'depth' => 2,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            12 => 
            [
                'id' => 13,
                'name' => 'Master Chief',
                'tier' => NULL,
                'parent_id' => 1,
                'left' => 24,
                'right' => 25,
                'depth' => 1,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            13 => 
            [
                'id' => 14,
                'name' => 'Solid Snake',
                'tier' => NULL,
                'parent_id' => 1,
                'left' => 26,
                'right' => 47,
                'depth' => 1,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            14 => 
            [
                'id' => 15,
                'name' => '蘿拉．卡芙特',
                'tier' => NULL,
                'parent_id' => 14,
                'left' => 27,
                'right' => 28,
                'depth' => 2,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            15 => 
            [
                'id' => 16,
                'name' => '高登．弗里曼',
                'tier' => NULL,
                'parent_id' => 14,
                'left' => 29,
                'right' => 46,
                'depth' => 2,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            16 => 
            [
                'id' => 17,
                'name' => 'Crash',
                'tier' => NULL,
                'parent_id' => 16,
                'left' => 30,
                'right' => 43,
                'depth' => 3,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            17 => 
            [
                'id' => 18,
                'name' => '拉捷特',
                'tier' => NULL,
                'parent_id' => 17,
                'left' => 31,
                'right' => 32,
                'depth' => 4,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            18 => 
            [
                'id' => 19,
                'name' => '奈森‧德瑞克',
                'tier' => NULL,
                'parent_id' => 17,
                'left' => 33,
                'right' => 42,
                'depth' => 4,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            19 => 
            [
                'id' => 20,
                'name' => 'Marcus Fenix',
                'tier' => NULL,
                'parent_id' => 19,
                'left' => 34,
                'right' => 37,
                'depth' => 5,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            20 => 
            [
                'id' => 21,
                'name' => '洛克人',
                'tier' => NULL,
                'parent_id' => 20,
                'left' => 35,
                'right' => 36,
                'depth' => 6,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            21 => 
            [
                'id' => 22,
                'name' => '皮卡丘',
                'tier' => NULL,
                'parent_id' => 19,
                'left' => 38,
                'right' => 41,
                'depth' => 5,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            22 => 
            [
                'id' => 23,
                'name' => 'Sam Fisher',
                'tier' => NULL,
                'parent_id' => 22,
                'left' => 39,
                'right' => 40,
                'depth' => 6,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
            23 => 
            [
                'id' => 24,
                'name' => 'John MacTavish',
                'tier' => NULL,
                'parent_id' => 16,
                'left' => 44,
                'right' => 45,
                'depth' => 3,
                'created_at' => '2020-02-10 08:16:32',
                'updated_at' => '2020-02-10 08:16:32',
            ],
        ]);
    }
}