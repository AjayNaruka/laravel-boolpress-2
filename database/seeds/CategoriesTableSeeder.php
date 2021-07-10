<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['HTML','CSS','JS','PHP'];
        foreach($categories as $cat){
            $new_cat = new Category();
            $new_cat['name']=$cat;
            $new_cat['slug'] = Str::slug($cat,'-');
            $new_cat->save();
        }
    }
}
