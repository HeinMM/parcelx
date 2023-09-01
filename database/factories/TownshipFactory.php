<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Township>
 */
class TownshipFactory extends Factory
{


    public function definition(): array
    {
        $customData = [
            ['name' => 'ဒဂုံ', 'price' => 2500],
            ['name' => 'အလုံ', 'price' => 2500],
            ['name' => 'စမ်းချောင်း', 'price' => 2500],
            ['name' => 'ကြည့်မြင်တိုင်', 'price' => 2500],
            ['name' => 'ကမာရွတ်', 'price' => 2500],
            ['name' => 'လှိုင်', 'price' => 2500],
            ['name' => 'မရမ်းကုန်း', 'price' => 2500],
            ['name' => 'အင်းစိန်', 'price' => 2500],

            ['name' => 'လမ်းမတော်', 'price' => 2500],
            ['name' => 'လသာ', 'price' => 2500],
            ['name' => 'ပန်းပဲတန်း', 'price' => 2500],
            ['name' => 'ကျောက်တံတား', 'price' => 2500],
            ['name' => 'ဗိုလ်တထောင်', 'price' => 2500],
            ['name' => 'သာကေတ', 'price' => 2500],
            ['name' => 'ဒေါပုံ', 'price' => 2500],
            ['name' => 'ရန်ကင်း', 'price' => 2500],
            ['name' => 'ဗဟန်း', 'price' => 2500],
            ['name' => 'မင်္ဂလာတောင်ညွန့်', 'price' => 2500],
            ['name' => 'သင်္ကန်းကျွန်း', 'price' => 2500],

            ['name' => 'တော်ဒဂုံ', 'price' => 3000],
            ['name' => 'မြောက်ဒဂုံ', 'price' => 3000],
            ['name' => 'အရှေ့ဒဂုံ', 'price' => 3000],
            ['name' => 'ရွှေပေါက်ကံ', 'price' => 3000],
            ['name' => 'ဒဂုံဆိပ်ကမ်း', 'price' => 3000],
            ['name' => 'လှိုင်သာယာ', 'price' => 3000],
            ['name' => 'ရွှေပြည်သာ', 'price' => 3000],
            ['name' => 'မင်္ဂလာဒုံ', 'price' => 3000],
            ['name' => 'မြောက်ဥက္ကလာ', 'price' => 3000],
            ['name' => 'တောင်ဥက္ကလာ', 'price' => 3000],

            ['name' => 'ထောက်ကြံ့', 'price' => 4000],
            ['name' => 'မှော်ဘီ', 'price' => 4000],
            ['name' => 'သန်လျင်', 'price' => 4000],
            ['name' => 'ကျောက်တန်း', 'price' => 4000],
            ['name' => 'လှော်ကား', 'price' => 4000],
        ];

        static $index = 0;

        if ($index >= count($customData)) {
            $index = 0;
        }

        $data = $customData[$index];
        $index++;

        return [
            "township_name" => $data['name'],
            "price" => $data['price'],
            "delivery_man_id" => rand(1, 6)
        ];
    }
}
