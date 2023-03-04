<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $category = new Category;       
        $category->name = 'drama';
        $category->description = 'El drama en el cine presenta historias serias, en las que prevalece el dialogo y la acción orientadas a generar tensión y presentar pasiones conflictivas más que generar humor';
        $category->save();

        $category = new Category;       
        $category->name = 'Suspenso';
        $category->description = ' es básicamente una historia de intriga. Posee un relato que tiene mayor consistencia y argumentación que otros géneros';
        $category->save();
        
    }
}
