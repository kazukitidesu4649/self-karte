<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $major_category_names = [
            '美容院', '歯医者', '内科'
        ];

        $biyoin_categories = [
            '髪の長さ', 'パーマ', '染織'
        ];

        $haisya_categoriees = [
            '体温', '症状', '薬'
        ];

        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == '美容院') {
                foreach ($biyoin_categories as $biyoin_categorie) {
                    category::create([
                        'name' => $biyoin_categorie,
                        'description' => $biyoin_categorie,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if () {}
            if () {}
        }
    }
}
