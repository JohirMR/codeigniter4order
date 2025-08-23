<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        
        $rows = [
            ['name'=>'আরবী বর্ণমালা','class_name'=>'নার্সারী শ্রেণী','class_id'=>2,'slug'=>'arobi_bornomala','price'=>50,'image' => 'uploads/books/arobi_bornomala.jpg'],
            ['name'=>'বাংলা বর্ণমালা','class_name'=>'নার্সারী শ্রেণী','class_id'=>2,'slug'=>'bangla_bornomala','price'=>50,'image' => 'uploads/books/bangla_bornomala.jpg'],
            ['name'=>'ইংরেজি বর্ণমালা','class_name'=>'নার্সারী শ্রেণী','class_id'=>2,'slug'=>'english','price'=>50,'image' => 'uploads/books/english.jpg'],
            ['name'=>'গণিত শিক্ষা','class_name'=>'নার্সারী শ্রেণী','class_id'=>2,'slug'=>'math','price'=>50,'image' => 'uploads/books/math.jpg'],

            ['name'=>'শিশুর দ্বীনিয়াত','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_Diniyet','price'=>45,'image' => 'uploads/books/Shishu_Diniyet.jpg'],
            ['name'=>'শিশুর আরবী','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_Arabic','price'=>50,'image' => 'uploads/books/Shishu_Arabic.jpg'],
            ['name'=>'শিশুর বাংলা','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_Bangla','price'=>80,'image' => 'uploads/books/Shishu_Bangla.jpg'],
            ['name'=>'শিশুর ইংরেজী','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_Enlish','price'=>55,'image' => 'uploads/books/Shishu_Enlish.jpg'],
            ['name'=>'শিশুর গণিত','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_math','price'=>50,'image' => 'uploads/books/Shishu_math.jpg'],
            
            // ['name'=>'আরবী বর্ণমালা','slug'=>'arobi_bornomala','price'=>50],
            // ['name'=>'বাংলা বর্ণমালা','slug'=>'bangla_bornomala','price'=>50],
            // ['name'=>'ইংরেজি বর্ণমালা','slug'=>'english','price'=>50],
            // ['name'=>'গণিত শিক্ষা','slug'=>'math','price'=>50],

            // ['name'=>'শিশুর দ্বীনিয়াত','slug'=>'Shishu_Diniyet','price'=>45],
            // ['name'=>'শিশুর আরবী','slug'=>'Shishu_Arabic','price'=>50],
            // ['name'=>'শিশুর বাংলা','slug'=>'Shishu_Bangla','price'=>50],
            // ['name'=>'শিশুর ইংরেজী','slug'=>'Shishu_Enlish','price'=>50],
            // ['name'=>'শিশুর গণিত','slug'=>'Shishu_math','price'=>50],
            
            // ['name'=>'কুরআন মাজীদ (৩০ তম পারা)','slug'=>'Quran_30_2','price'=>50],
            // ['name'=>'সহজ আরবী ক্বায়েদা','slug'=>'Shohoz_arabi_kayeda_1','price'=>50],
            // ['name'=>'সোনামণিদের মাসনূন দো‘আ শিক্ষা','slug'=>'sonamonider_doa_shikkha','price'=>50],
            // ['name'=>'হিফয ডায়েরী','slug'=>'hifz_dairy','price'=>50],
            // ['name'=>'দ্বীনিয়াত শিক্ষা (মক্তব)','slug'=>'moktob_diniyet_shikkha','price'=>50],

            // ['name'=>'কুরআন মাজীদ (৩০ তম পারা)','slug'=>'Quran_30_3','price'=>50],
            // ['name'=>'সহজ আরবী ক্বায়েদা','slug'=>'Shohoz_arabi_kayeda_2','price'=>50],
            // ['name'=>'সহজ আরবী (১ম ভাগ)','slug'=>'Shohoz_arabi_1','price'=>50],
            // ['name'=>'দ্বীনিয়াত শিক্ষা (১ম ভাগ)','slug'=>'diniyet_shikkha_1','price'=>50],
            // ['name'=>'সহজ বাংলা (১ম ভাগ)','slug'=>'Shohoz_bangla_1','price'=>50],
            // ['name'=>'সাধারণ জ্ঞান (১ম ভাগ)','slug'=>'sadharon_gan_1','price'=>55],
            // ['name'=>'সহজ গণিত (১ম ভাগ)','slug'=>'math','price'=>50],
            // ['name'=>'সহজ ইংরেজী (১ম ভাগ)','slug'=>'math','price'=>50],

            // ['name'=>'কুরআন মাজীদ (৩০ তম পারা)','slug'=>'math','price'=>50],
            // ['name'=>'সহজ আরবী ক্বায়েদা','slug'=>'math','price'=>50],
            // ['name'=>'সহজ আরবী (২য় ভাগ)','slug'=>'math','price'=>50],
            // ['name'=>'দ্বীনিয়াত শিক্ষা (২য় ভাগ)','slug'=>'math','price'=>50],
            // ['name'=>'প্রাথমিক বাংলা শিক্ষা (২য় ভাগ)','slug'=>'math','price'=>50],
            // ['name'=>'সাধারণ জ্ঞান (২য় ভাগ)','slug'=>'math','price'=>50],
            // ['name'=>'সহজ গণিত (২য় ভাগ)','slug'=>'math','price'=>50],
            // ['name'=>'সহজ ইংরেজী (২য় ভাগ)','slug'=>'math','price'=>50],

            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
            // ['name'=>'','slug'=>'math','price'=>50],
        ];
        $this->db->table('books')->insertBatch($rows);
    }
    




}
