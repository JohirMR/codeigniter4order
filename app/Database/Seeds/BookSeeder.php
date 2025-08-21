<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        
        $rows = [
            ['title'=>'আরবী বর্ণমালা','slug'=>'arobi_bornomala','base_price'=>50],
            ['title'=>'বাংলা বর্ণমালা','slug'=>'bangla_bornomala','base_price'=>50],
            ['title'=>'ইংরেজি বর্ণমালা','slug'=>'english','base_price'=>50],
            ['title'=>'গণিত শিক্ষা','slug'=>'math','base_price'=>50],

            ['title'=>'শিশুর দ্বীনিয়াত','slug'=>'Shishu_Diniyet','base_price'=>45],
            ['title'=>'শিশুর আরবী','slug'=>'Shishu_Arabic','base_price'=>50],
            ['title'=>'শিশুর বাংলা','slug'=>'Shishu_Bangla','base_price'=>50],
            ['title'=>'শিশুর ইংরেজী','slug'=>'Shishu_Enlish','base_price'=>50],
            ['title'=>'শিশুর গণিত','slug'=>'Shishu_math','base_price'=>50],

            ['title'=>'কুরআন মাজীদ (৩০ তম পারা)','slug'=>'Quran_30_2','base_price'=>50],
            ['title'=>'সহজ আরবী ক্বায়েদা','slug'=>'Shohoz_arabi_kayeda_1','base_price'=>50],
            ['title'=>'সোনামণিদের মাসনূন দো‘আ শিক্ষা','slug'=>'sonamonider_doa_shikkha','base_price'=>50],
            ['title'=>'হিফয ডায়েরী','slug'=>'hifz_dairy','base_price'=>50],
            ['title'=>'দ্বীনিয়াত শিক্ষা (মক্তব)','slug'=>'moktob_diniyet_shikkha','base_price'=>50],

            ['title'=>'কুরআন মাজীদ (৩০ তম পারা)','slug'=>'Quran_30_3','base_price'=>50],
            ['title'=>'সহজ আরবী ক্বায়েদা','slug'=>'Shohoz_arabi_kayeda_2','base_price'=>50],
            ['title'=>'সহজ আরবী (১ম ভাগ)','slug'=>'Shohoz_arabi_1','base_price'=>50],
            ['title'=>'দ্বীনিয়াত শিক্ষা (১ম ভাগ)','slug'=>'diniyet_shikkha_1','base_price'=>50],
            ['title'=>'সহজ বাংলা (১ম ভাগ)','slug'=>'Shohoz_bangla_1','base_price'=>50],
            ['title'=>'সাধারণ জ্ঞান (১ম ভাগ)','slug'=>'sadharon_gan_1','base_price'=>55],
            // ['title'=>'সহজ গণিত (১ম ভাগ)','slug'=>'math','base_price'=>50],
            // ['title'=>'সহজ ইংরেজী (১ম ভাগ)','slug'=>'math','base_price'=>50],

            // ['title'=>'কুরআন মাজীদ (৩০ তম পারা)','slug'=>'math','base_price'=>50],
            // ['title'=>'সহজ আরবী ক্বায়েদা','slug'=>'math','base_price'=>50],
            // ['title'=>'সহজ আরবী (২য় ভাগ)','slug'=>'math','base_price'=>50],
            // ['title'=>'দ্বীনিয়াত শিক্ষা (২য় ভাগ)','slug'=>'math','base_price'=>50],
            // ['title'=>'প্রাথমিক বাংলা শিক্ষা (২য় ভাগ)','slug'=>'math','base_price'=>50],
            // ['title'=>'সাধারণ জ্ঞান (২য় ভাগ)','slug'=>'math','base_price'=>50],
            // ['title'=>'সহজ গণিত (২য় ভাগ)','slug'=>'math','base_price'=>50],
            // ['title'=>'সহজ ইংরেজী (২য় ভাগ)','slug'=>'math','base_price'=>50],

            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
            // ['title'=>'','slug'=>'math','base_price'=>50],
        ];
        $this->db->table('books')->insertBatch($rows);
    }
    




}
