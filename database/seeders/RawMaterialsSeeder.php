<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RawMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // สารประกอบ
        DB::table('raw_materials')->insert([
            [
                'rm_name' => 'น้ำ (H2O)',
                'rm_type' => 'สารประกอบ',
                'rm_description' => 'สารประกอบที่พบมากที่สุดบนโลก ประกอบด้วยอะตอมไฮโดรเจน 2 อะตอม และอะตอมออกซิเจน 1 อะตอม',
            ],
            [
                'rm_name' => 'เกลือแกง (NaCl)',
                'rm_type' => 'สารประกอบ',
                'rm_description' => 'สารประกอบที่ใช้ปรุงอาหาร ประกอบด้วยอะตอมโซเดียม 1 อะตอม และอะตอมคลอรีน 1 อะตอม',
            ],
            [
                'rm_name' => 'น้ำตาลทราย (C12H22O11)',
                'rm_type' => 'สารประกอบ',
                'rm_description' => 'สารประกอบที่ใช้ให้ความหวาน ประกอบด้วยอะตอมคาร์บอน 12 อะตอม อะตอมไฮโดรเจน 22 อะตอม และอะตอมออกซิเจน 11 อะตอม',
            ],
            [
                'rm_name' => 'ก๊าซคาร์บอนไดออกไซด์ (CO2)',
                'rm_type' => 'สารประกอบ',
                'rm_description' => 'ก๊าซที่ปล่อยออกมาจากการหายใจของสิ่งมีชีวิต ประกอบด้วยอะตอมคาร์บอน 1 อะตอม และอะตอมออกซิเจน 2 อะตอม',
            ],
            [
                'rm_name' => 'กรดซัลฟิวริก (H2SO4)',
                'rm_type' => 'สารประกอบ',
                'rm_description' => 'กรดที่ใช้ในอุตสาหกรรมหลายประเภท ประกอบด้วยอะตอมไฮโดรเจน 2 อะตอม อะตอมซัลเฟอร์ 1 อะตอม และอะตอมออกซิเจน 4 อะตอม',
            ],
        ]);

        // ธาตุ
        DB::table('raw_materials')->insert([
            [
                'rm_name' => 'ทองคำ (Au)',
                'rm_type' => 'ธาตุ',
                'rm_description' => 'ธาตุที่มีสีเหลืองอร่าม มักใช้ทำเครื่องประดับ',
            ],
            [
                'rm_name' => 'เงิน (Ag)',
                'rm_type' => 'ธาตุ',
                'rm_description' => 'ธาตุที่มีสีขาว มักใช้ทำเครื่องประดับและเหรียญ',
            ],
            [
                'rm_name' => 'เหล็ก (Fe)',
                'rm_type' => 'ธาตุ',
                'rm_description' => 'ธาตุที่มีสีเงินเทา มักใช้ทำเหล็กกล้า',
            ],
            [
                'rm_name' => 'อะลูมิเนียม (Al)',
                'rm_type' => 'ธาตุ',
                'rm_description' => 'ธาตุที่มีสีเงินขาว มักใช้ทำกระป๋องเครื่องดื่มและโครงสร้างเครื่องบิน',
            ],
            [
                'rm_name' => 'ออกซิเจน (O)',
                'rm_type' => 'ธาตุ',
                'rm_description' => 'ธาตุที่จำเป็นต่อการหายใจของสิ่งมีชีวิต',
            ],
        ]);

        // สารอินทรีย์ (ต่อ)
        DB::table('raw_materials')->insert([
            [
                'rm_name' => 'น้ำมันพืช',
                'rm_type' => 'สารอินทรีย์',
                'rm_description' => 'สารประกอบที่สกัดจากพืช มักใช้ประกอบอาหาร',
            ],
            [
                'rm_name' => 'โปรตีน',
                'rm_type' => 'สารอินทรีย์',
                'rm_description' => 'สารประกอบที่ประกอบไปด้วยกรดอะมิโน พบในเนื้อสัตว์ ไข่ ถั่ว และผลิตภัณฑ์จากนม',
            ],
            [
                'rm_name' => 'คาร์โบไฮเดรต',
                'rm_type' => 'สารอินทรีย์',
                'rm_description' => 'สารประกอบที่ประกอบไปด้วยคาร์บอน ไฮโดรเจน และออกซิเจน พบในข้าว ขนมปัง ผลไม้ และผัก',
            ],
            [
                'rm_name' => 'ไขมัน',
                'rm_type' => 'สารอินทรีย์',
                'rm_description' => 'สารประกอบที่ประกอบไปด้วยคาร์บอน ไฮโดรเจน และออกซิเจน พบในเนื้อสัตว์ น้ำมัน และถั่ว',
            ],
            [
                'rm_name' => 'วิตามิน',
                'rm_type' => 'สารอินทรีย์',
                'rm_description' => 'สารประกอบที่จำเป็นต่อร่างกาย พบในอาหารหลากหลายชนิด',
            ],
        ]);


        DB::table('replacement_raw_materials')->insert([
            [
                'rm_replacement_id' => 2,
                'raw_materials_id' => 1,
            ],
            [
                'rm_replacement_id' => 3,
                'raw_materials_id' => 1,
            ],
            [
                'rm_replacement_id' => 4,
                'raw_materials_id' => 1,
            ],
            [
                'rm_replacement_id' => 5,
                'raw_materials_id' => 1,
            ],
        ]);
    }
}
