<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fantasy = new SubCategory();
        $fantasy->name = 'Fantastique';
        $fantasy->save();
        $thriller = new SubCategory();
        $thriller->name = 'Policier';
        $thriller->save();
        $children = new SubCategory();
        $children->name = 'Jeunesse';
        $children->save();
        $classic = new SubCategory();
        $classic->name = 'Classique';
        $classic->save();
    }
}
