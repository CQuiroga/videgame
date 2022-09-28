<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new Category();
        $category1->name = 'Deportes';
        $category1->description = 'Juegos basados en deportes';
        $category1->active = true;
        $category1->save();

        $category1 = new Category();
        $category1->name = 'Acción';
        $category1->description = 'Juegos basados en acción';
        $category1->active = true;
        $category1->save();

        $category1 = new Category();
        $category1->name = 'Aventuras';
        $category1->description = 'Juegos basados en aventuras';
        $category1->active = true;
        $category1->save();

        $category1 = new Category();
        $category1->name = 'RPG';
        $category1->description = 'Juegos basados en roles';
        $category1->active = true;
        $category1->save();


    }
}
