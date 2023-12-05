<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Thread;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t1 = new Thread;
        $t1->title= "whats new?";
        $t1->content= "this is new";
        $t1->save();


        $t2 = new Thread;
        $t2->title= "whats old?";
        $t2->content= "this is old";
        $t2->save();


        $t3 = new Thread;
        $t3->title= "whats happening?";
        $t3->content= "this is happening right now";
        $t3->save();

        Thread::factory()->count(17)->create();

        $thread = Thread::factory()
        ->has(Category::factory()->count(10))
        ->create();
    }
}
