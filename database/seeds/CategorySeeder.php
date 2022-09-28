<?php

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
        $categories= [

            ['label'=>'HTML' , 'color'=>'primary'],
            ['label'=>'CSS' , 'color'=>'secondary'],
            ['label'=>'php' , 'color'=>'succes'],
            ['label'=>'sql' , 'color'=>'danger'],
            ['label'=>'bootstrap' , 'color'=>'warning'],
            ['label'=>'VUE' , 'color'=>'info'],
            ['label'=>'laravel' , 'color'=>'muted'],
        ];
        foreach($categories as $category){
            $new_category = new Category();
 
            $new_category->label = $category['label'];        
            $new_category->color = $category['color'] ;       
 
            $new_category-> save();
        }
    }
}
