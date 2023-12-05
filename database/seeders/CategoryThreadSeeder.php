<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Thread;

class CategoryThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c1 = new Category;
        $c1->name= "films and music";
        $c1->catdescription= "this is a film and this is a music";
        $c1->save();
        $c1->threads()->attach(1);
        $c1->threads()->attach(3);

        $t1 = new Thread;
        $t1->title= "whats new?";
        $t1->content= "this is new";
        $t1->save();
        $t1->categories()->attach(1);
        $t1->categories()->attach(3);
    }
}
