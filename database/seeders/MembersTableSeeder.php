<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('members')->delete();
        DB::table('members')->insert([
            0 => 
            [
                'id' => 1,
                'name' => __('Kira Yamato'),
                'parent_id' => NULL,
                '_lft' => 1,
                '_rgt' => 48,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            1 => 
            [
                'id' => 2,
                'name' => __('Lacus Clyne'),
                'parent_id' => 1,
                '_lft' => 2,
                '_rgt' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            2 => 
            [
                'id' => 3,
                'name' => __('Athrun Zala'),
                'parent_id' => 2,
                '_lft' => 3,
                '_rgt' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            3 => 
            [
                'id' => 4,
                'name' => __('Cagalli Yula Athha'),
                'parent_id' => 3,
                '_lft' => 4,
                '_rgt' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            4 => 
            [
                'id' => 5,
                'name' => __('Shinn Asuka'),
                'parent_id' => 3,
                '_lft' => 6,
                '_rgt' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            5 => 
            [
                'id' => 6,
                'name' => __('Lunamaria Hawke'),
                'parent_id' => 5,
                '_lft' => 7,
                '_rgt' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            6 => 
            [
                'id' => 7,
                'name' => __('Meyrin Hawke'),
                'parent_id' => 6,
                '_lft' => 8,
                '_rgt' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            7 => 
            [
                'id' => 8,
                'name' => __('Murrue Ramius'),
                'parent_id' => 7,
                '_lft' => 9,
                '_rgt' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            8 => 
            [
                'id' => 9,
                'name' => __('Mu La Flaga'),
                'parent_id' => 6,
                '_lft' => 12,
                '_rgt' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            9 => 
            [
                'id' => 10,
                'name' => __('Yzak Jule'),
                'parent_id' => 9,
                '_lft' => 13,
                '_rgt' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            10 => 
            [
                'id' => 11,
                'name' => __('Dearka Elthman'),
                'parent_id' => 5,
                '_lft' => 17,
                '_rgt' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            11 => 
            [
                'id' => 12,
                'name' => __('Agnes Giebenrath'),
                'parent_id' => 2,
                '_lft' => 21,
                '_rgt' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            12 => 
            [
                'id' => 13,
                'name' => __('Toyah Mashima'),
                'parent_id' => 1,
                '_lft' => 24,
                '_rgt' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            13 => 
            [
                'id' => 14,
                'name' => __('Alexei Konoe'),
                'parent_id' => 1,
                '_lft' => 26,
                '_rgt' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            14 => 
            [
                'id' => 15,
                'name' => __('Albert Heinlein'),
                'parent_id' => 14,
                '_lft' => 27,
                '_rgt' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            15 => 
            [
                'id' => 16,
                'name' => __('Hilda Haken'),
                'parent_id' => 14,
                '_lft' => 29,
                '_rgt' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            16 => 
            [
                'id' => 17,
                'name' => __('Herbert Von Reinhard'),
                'parent_id' => 16,
                '_lft' => 30,
                '_rgt' => 43,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            17 => 
            [
                'id' => 18,
                'name' => __('Maas Symeon'),
                'parent_id' => 17,
                '_lft' => 31,
                '_rgt' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            18 => 
            [
                'id' => 19,
                'name' => __('Aura Maha Khyber'),
                'parent_id' => 17,
                '_lft' => 33,
                '_rgt' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            19 => 
            [
                'id' => 20,
                'name' => __('Orphee Lam Tao'),
                'parent_id' => 19,
                '_lft' => 34,
                '_rgt' => 37,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            20 => 
            [
                'id' => 21,
                'name' => __('Shura Serpentine'),
                'parent_id' => 20,
                '_lft' => 35,
                '_rgt' => 36,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            21 => 
            [
                'id' => 22,
                'name' => __('Ingrid Tradoll'),
                'parent_id' => 19,
                '_lft' => 38,
                '_rgt' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            22 => 
            [
                'id' => 23,
                'name' => __('Redelard Tradoll'),
                'parent_id' => 22,
                '_lft' => 39,
                '_rgt' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            23 => 
            [
                'id' => 24,
                'name' => __('Daniel Harper'),
                'parent_id' => 16,
                '_lft' => 44,
                '_rgt' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}