<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        
        $rows = [
            // ['name'=>'আরবী বর্ণমালা','class_name'=>'নার্সারী শ্রেণী','class_id'=>2,'slug'=>'arobi_bornomala','price'=>50,'image' => 'uploads/books/arobi_bornomala.jpg'],
            // ['name'=>'বাংলা বর্ণমালা','class_name'=>'নার্সারী শ্রেণী','class_id'=>2,'slug'=>'bangla_bornomala','price'=>50,'image' => 'uploads/books/bangla_bornomala.jpg'],
            // ['name'=>'ইংরেজি বর্ণমালা','class_name'=>'নার্সারী শ্রেণী','class_id'=>2,'slug'=>'english','price'=>50,'image' => 'uploads/books/english.jpg'],
            // ['name'=>'গণিত শিক্ষা','class_name'=>'নার্সারী শ্রেণী','class_id'=>2,'slug'=>'math','price'=>50,'image' => 'uploads/books/math.jpg'],

            // ['name'=>'শিশুর দ্বীনিয়াত','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_Diniyet','price'=>45,'image' => 'uploads/books/Shishu_Diniyet.jpg'],
            // ['name'=>'শিশুর আরবী','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_Arabic','price'=>50,'image' => 'uploads/books/Shishu_Arabic.jpg'],
            // ['name'=>'শিশুর বাংলা','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_Bangla','price'=>80,'image' => 'uploads/books/Shishu_Bangla.jpg'],
            // ['name'=>'শিশুর ইংরেজী','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_Enlish','price'=>55,'image' => 'uploads/books/Shishu_Enlish.jpg'],
            // ['name'=>'শিশুর গণিত','class_name'=>'শিশু শ্রেণী','class_id'=>2,'slug'=>'Shishu_math','price'=>50,'image' => 'uploads/books/Shishu_math.jpg'],


            // ['name'=>'কুরআন মাজীদ (৩০ তম পারা)','class_name'=>'হিফয/মক্তব শ্রেণী','hfb_code'=>'Q30','hfb_code_book'=>'O00','class_id'=>2,'slug'=>'Quran_30_1','price'=>45,'image' => 'uploads/books/Quran_30.jpg'],
            // ['name'=>'সহজ আরবী ক্বায়েদা','class_name'=>'হিফয/মক্তব শ্রেণী','hfb_code'=>'O07','hfb_code_book'=>'O00','class_id'=>2,'slug'=>'Shohoz_arabi_kayeda_1','price'=>55,'image' => 'uploads/books/Shohoz_arabi_kayeda.jpg'],
            // ['name'=>'সোনামণিদের মাসনূন দো‘আ শিক্ষা','class_name'=>'হিফয/মক্তব শ্রেণী','hfb_code'=>'C27','hfb_code_book'=>'O00','class_id'=>2,'slug'=>'sonamonider_doa_shikkha','price'=>80,'image' => 'uploads/books/sonamonider_doa_shikkha.jpg'],
            // ['name'=>'হিফয ডায়েরী','class_name'=>'হিফয/মক্তব শ্রেণী','hfb_code'=>'HD','hfb_code_book'=>'O00','class_id'=>2,'slug'=>'hifz_dairy','price'=>60,'image' => 'uploads/books/hifz_dairy.jpg'],
            // ['name'=>'দ্বীনিয়াত শিক্ষা (মক্তব)','class_name'=>'হিফয/মক্তব শ্রেণী','hfb_code'=>'C01','hfb_code_book'=>'O00','class_id'=>2,'slug'=>'moktob_diniyet_shikkha','price'=>60,'image' => 'uploads/books/moktob_diniyet_shikkha.jpg'],


            // ['name'=>'কুরআন মাজীদ (৩০ তম পারা)','hfb_code'=>'Q30','hfb_code_book'=>'O00','class_name'=>'১ম শ্রেণী','class_id'=>2,'slug'=>'Quran_30_2','price'=>45,'image' => 'uploads/books/Quran_30.jpg'],
            // ['name'=>'সহজ আরবী ক্বায়েদা','hfb_code'=>'O07','hfb_code_book'=>'O00','class_name'=>'১ম শ্রেণী','class_id'=>2,'slug'=>'Shohoz_arabi_kayeda_2','price'=>55,'image' => 'uploads/books/Shohoz_arabi_kayeda.jpg'],
            // ['name'=>'সহজ আরবী (১ম ভাগ)','hfb_code'=>'O01','hfb_code_book'=>'O00','class_name'=>'১ম শ্রেণী','class_id'=>2,'slug'=>'Shohoz_arabi_1','price'=>60,'image' => 'uploads/books/Shohoz_arabi_1.jpg'],
            // ['name'=>'দ্বীনিয়াত শিক্ষা (১ম ভাগ)','hfb_code'=>'O05','hfb_code_book'=>'O00','class_name'=>'১ম শ্রেণী','class_id'=>2,'slug'=>'diniyet_shikkha_1','price'=>50,'image' => 'uploads/books/diniyet_shikkha_1.jpg'],
            // ['name'=>'সহজ বাংলা (১ম ভাগ)','hfb_code'=>'O02','hfb_code_book'=>'O00','class_name'=>'১ম শ্রেণী','class_id'=>2,'slug'=>'Shohoz_bangla_1','price'=>60,'image' => 'uploads/books/Shohoz_bangla_1.jpg'],
            // ['name'=>'সাধারণ জ্ঞান (১ম ভাগ)','hfb_code'=>'O06','hfb_code_book'=>'O00','class_name'=>'১ম শ্রেণী','class_id'=>2,'slug'=>'sadharon_gan_1','price'=>55,'image' => 'uploads/books/sadharon_gan_1.jpg'],
            // ['name'=>'সহজ গণিত (১ম ভাগ)','hfb_code'=>'O04','hfb_code_book'=>'O00','class_name'=>'১ম শ্রেণী','class_id'=>2,'slug'=>'shohoz_math_1','price'=>60,'image' => 'uploads/books/shohoz_math_1.jpg'],
            // ['name'=>'সহজ ইংরেজী (১ম ভাগ)','hfb_code'=>'O03','hfb_code_book'=>'O00','class_name'=>'১ম শ্রেণী','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>60,'image' => 'uploads/books/shohoz_Enlish_1.jpg'],

            // ['name'=>'কুরআন মাজীদ (৩০ তম পারা)','hfb_code'=>'Q30','hfb_code_book'=>'T00','class_name'=>'২য় শ্রেণী','class_id'=>2,'slug'=>'Quran_30_3','price'=>45,'image' => 'uploads/books/Quran_30.jpg'],
            // ['name'=>'সহজ আরবী ক্বায়েদা','hfb_code'=>'A40','hfb_code_book'=>'T00','class_name'=>'২য় শ্রেণী','class_id'=>2,'slug'=>'Shohoz_arabi_kayeda_3','price'=>55,'image' => 'uploads/books/Shishu_math.jpg'],
            // ['name'=>'সহজ আরবী (২য় ভাগ)','hfb_code'=>'T01','hfb_code_book'=>'T00','class_name'=>'২য় শ্রেণী','class_id'=>2,'slug'=>'Shohoz_arabi_2','price'=>65,'image' => 'uploads/books/Shohoz_arabi_2.jpg'],
            // ['name'=>'দ্বীনিয়াত শিক্ষা (২য় ভাগ)','hfb_code'=>'T05','hfb_code_book'=>'T00','class_name'=>'২য় শ্রেণী','class_id'=>2,'slug'=>'diniyet_shikkha_2','price'=>75,'image' => 'uploads/books/diniyet_shikkha_2.jpg'],
            // ['name'=>'প্রাথমিক বাংলা শিক্ষা (২য় ভাগ)','hfb_code'=>'T02','hfb_code_book'=>'T00','class_name'=>'২য় শ্রেণী','class_id'=>2,'slug'=>'prathomic_bangla_2','price'=>60,'image' => 'uploads/books/prathomic_bangla_2.jpg'],
            // ['name'=>'সাধারণ জ্ঞান (২য় ভাগ)','hfb_code'=>'T06','hfb_code_book'=>'T00','class_name'=>'২য় শ্রেণী','class_id'=>2,'slug'=>'sadharon_gan_2','price'=>45,'image' => 'uploads/books/sadharon_gan_2.jpg'],
            // ['name'=>'সহজ গণিত (২য় ভাগ)','hfb_code'=>'T04','hfb_code_book'=>'T00','class_name'=>'২য় শ্রেণী','class_id'=>2,'slug'=>'shohoz_math_2','price'=>75,'image' => 'uploads/books/shohoz_math_2.jpg'],
            // ['name'=>'সহজ ইংরেজী (২য় ভাগ)','hfb_code'=>'T03','hfb_code_book'=>'O00','class_name'=>'২য় শ্রেণী','class_id'=>2,'slug'=>'shohoz_Enlish_2','price'=>65,'image' => 'uploads/books/shohoz_Enlish_2.jpg'],


            ['name'=>'কুরআন মাজীদ (৩০ তম পারা)','hfb_code'=>'Q30','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'Quran_30_4','price'=>45,'image' => 'uploads/books/Quran_30.jpg'],
            ['name'=>'আরবী ক্বায়েদা (১ম ভাগ)','hfb_code'=>'A39','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'arabi_kayeda_1','price'=>55,'image' => 'uploads/books/arabi_kayeda.jpg'],
            ['name'=>'দ্বীনিয়াত শিক্ষা (৩য় ভাগ)','hfb_code'=>'TR05','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'diniyet_shikkha_3','price'=>70,'image' => 'uploads/books/diniyet_shikkha_3.jpg'],
            ['name'=>'সহজ আরবী (৩য় ভাগ)','hfb_code'=>'T05','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'Shohoz_arabi_3','price'=>70,'image' => 'uploads/books/Shohoz_arabi_3.jpg'],
            ['name'=>'সহজ উর্দূ (১ম ভাগ)','hfb_code'=>'T02','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'shohoz_urdo_1','price'=>55,'image' => 'uploads/books/shohoz_urdo_1.jpg'],
            ['name'=>'সহজ বাংলা (৩য় ভাগ)','hfb_code'=>'TR02','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'Shohoz_bangla_3','price'=>75,'image' => 'uploads/books/Shohoz_bangla_3.jpg'],
            ['name'=>'সহজ গল্প পাঠ','hfb_code'=>'TR08','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'shohoz_golpopath','price'=>75,'image' => 'uploads/books/shohoz_golpopath.jpg'],
            ['name'=>'সাধারণ জ্ঞান (৩য় ভাগ)','hfb_code'=>'TR06','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'sadharon_gan_3','price'=>60,'image' => 'uploads/books/sadharon_gan_3.jpg'],
            ['name'=>'সহজ গণিত (৩য় ভাগ)','hfb_code'=>'TR04','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'shohoz_math_3','price'=>85,'image' => 'uploads/books/shohoz_math_3.jpg'],
            ['name'=>'সহজ ইংরেজী (৩য় ভাগ)','hfb_code'=>'TR03','hfb_code_book'=>'TR00','class_name'=>'৩য় শ্রেণী','class_id'=>2,'slug'=>'shohoz_Enlish_3','price'=>70,'image' => 'uploads/books/shohoz_Enlish_3.jpg'],

            ['name'=>'কুরআন মাজীদ (৩০ তম পারা)','hfb_code'=>'Q30','hfb_code_book'=>'O00','class_name'=>'৪র্থ শ্রেণী','class_id'=>2,'slug'=>'Quran_30_5','price'=>45,'image' => 'uploads/books/Quran_30.jpg'],
            ['name'=>'আরবী ক্বায়েদা (১ম ভাগ)','hfb_code'=>'A39','hfb_code_book'=>'O00','class_name'=>'৪র্থ শ্রেণী','class_id'=>2,'slug'=>'arabi_kayeda_2','price'=>55,'image' => 'uploads/books/arabi_kayeda.jpg'],
            ['name'=>'দ্বীনিয়াত শিক্ষা (৪র্থ ভাগ)','hfb_code'=>'F01','hfb_code_book'=>'O00','class_name'=>'৪র্থ শ্রেণী','class_id'=>2,'slug'=>'diniyet_shikkha_4','price'=>75,'image' => 'uploads/books/diniyet_shikkha_4.jpg'],
            ['name'=>'সাধারণ জ্ঞান (৪র্থ ভাগ)','hfb_code'=>'F02','hfb_code_book'=>'O00','class_name'=>'৪র্থ শ্রেণী','class_id'=>2,'slug'=>'sadharon_gan_4','price'=>60,'image' => 'uploads/books/sadharon_gan_4.jpg'],
            ['name'=>'সহজ বাংলা ব্যাকরণ (১ম ভাগ)','hfb_code'=>'FO01','hfb_code_book'=>'O00','class_name'=>'৪র্থ শ্রেণী','class_id'=>2,'slug'=>'shohoz_bangla_bakaron_1','price'=>75,'image' => 'uploads/books/shohoz_bangla_bakaron_1.jpg'],
            ['name'=>'হাদীছের গল্প','hfb_code'=>'F03','hfb_code_book'=>'O00','class_name'=>'৪র্থ শ্রেণী','class_id'=>2,'slug'=>'hadicher_golgo','price'=>55,'image' => 'uploads/books/hadicher_golgo.jpg'],
            ['name'=>'সহজ মীযানুছ ছরফ','hfb_code'=>'T03','hfb_code_book'=>'O00','class_name'=>'৪র্থ শ্রেণী','class_id'=>2,'slug'=>'shohoz_mizanur_shorf','price'=>80,'image' => 'uploads/books/shohoz_mizanur_shorf.jpg'],
            ['name'=>'সহজ উর্দূ (২য় ভাগ)','hfb_code'=>'F04','hfb_code_book'=>'O00','class_name'=>'৪র্থ শ্রেণী','class_id'=>2,'slug'=>'shohoz_urdo_2','price'=>90,'image' => 'uploads/books/shohoz_urdo_2.jpg'],

            ['name'=>'হাদীছ সংকলন','hfb_code'=>'B22','class_name'=>'৫ম শ্রেণী','class_id'=>2,'slug'=>'shohoz_shongkolon','price'=>45,'image' => 'uploads/books/shohoz_shongkolon.jpg'],
            ['name'=>'আরবী ক্বায়েদা (২য় ভাগ)','hfb_code'=>'A40','class_name'=>'৫ম শ্রেণী','class_id'=>2,'slug'=>'arabi_kayeda_3','price'=>75,'image' => 'uploads/books/arabi_kayeda_2.jpg'],
            ['name'=>'সহজ তামরীনুছ ছরফ','hfb_code'=>'FV','class_name'=>'৫ম শ্রেণী','class_id'=>2,'slug'=>'shohoz_tamrinur_chorof','price'=>100,'image' => 'uploads/books/shohoz_tamrinur_chorof.jpg'],

            ['name'=>'তাফসীরুল কুরআন (৩০ তম পারা)','hfb_code'=>'A06','class_name'=>'৬ষ্ঠ শ্রেণী','class_id'=>2,'slug'=>'tafsirul_quran_30','price'=>500,'image' => 'uploads/books/tafsirul_quran_30.jpg'],
            ['name'=>'তাজবীদ শিক্ষা (১-৩২)','hfb_code'=>'B22','class_name'=>'৬ষ্ঠ শ্রেণী','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>75,'image' => 'uploads/books/Shishu_math.jpg'],
            ['name'=>'মুখতাছারুল আক্বীদা আল-ইসলামিইয়াহ','class_name'=>'৬ষ্ঠ শ্রেণী','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>45,'image' => 'uploads/books/Shishu_math.jpg'],
            ['name'=>'হাদীছ সংকলন','hfb_code'=>'T03','class_name'=>'৬ষ্ঠ শ্রেণী','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>45,'image' => 'uploads/books/Shishu_math.jpg'],
            ['name'=>'সহজ আমীনুন নাহু','hfb_code'=>'T03','class_name'=>'৬ষ্ঠ শ্রেণী','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>00,'image' => 'uploads/books/Shishu_math.jpg'],

            ['name'=>'ক্লাস ডায়েরী','hfb_code'=>'CD','class_name'=>'বিভিন্ন শ্রেণীর জন্য প্রয়োজনীয় বই সমূহ','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>130,  'image' => 'uploads/books/Shishu_math.jpg'],
            ['name'=>'তাফসীরুল কুরআন (২৯ তম পারা)','hfb_code'=>'A07','class_name'=>'বিভিন্ন শ্রেণীর জন্য প্রয়োজনীয় বই সমূহ','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>300,'image' => 'uploads/books/Shishu_math.jpg'],
            ['name'=>'হাদীছ সংকলন','hfb_code'=>'B22','class_name'=>'বিভিন্ন শ্রেণীর জন্য প্রয়োজনীয় বই সমূহ','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>45,'image' => 'uploads/books/Shishu_math.jpg'],
            ['name'=>'আক্বীদা ইসলামিয়াহ','hfb_code'=>'A13','class_name'=>'বিভিন্ন শ্রেণীর জন্য প্রয়োজনীয় বই সমূহ','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>20,'image' => 'uploads/books/Shishu_math.jpg'],
            ['name'=>'তায়সীরুল আক্বীদাতিছ ছহীহাহ','hfb_code'=>'SE01','class_name'=>'বিভিন্ন শ্রেণীর জন্য প্রয়োজনীয় বই সমূহ','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>50,'image' => 'uploads/books/Shishu_math.jpg'],
            ['name'=>'আত-তাওহীদুল মুয়াসসার','hfb_code'=>'EL01','class_name'=>'বিভিন্ন শ্রেণীর জন্য প্রয়োজনীয় বই সমূহ','class_id'=>2,'slug'=>'shohoz_Enlish_1','price'=>100,'image' => 'uploads/books/Shishu_math.jpg'],











            
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
