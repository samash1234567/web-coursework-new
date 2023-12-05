<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Thread;

class CategorySeeder extends Seeder
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

        $c2 = new Category;
        $c2->name= "fantasy";
        $c2->catdescription= "wow fantasy so real";
        $c2->save();

        $c3 = new Category;
        $c3->name= "art";
        $c3->catdescription= "making good drawings as usual";
        $c3->save();


        Category::factory()->count(17)->create();

        $cat = Category::factory()
             ->has(Thread::factory()->count(10))
             ->create();
    }
}
