<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Thread;
use App\Models\User;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $p1 = new Post;
        $p1->post_title = "why it sucks";
        $p1->post_content= "this is the content for the post";
        $p1->user_id= 1;
        $p1->thread_id= 2;
        $p1->save();

        $p2 = new Post;
        $p2->post_title = "why";
        $p2->post_content= "wow post 2 content";
        $p2->user_id= 3;
        $p2->thread_id= 4;
        $p2->save();

        $p3 = new Post;
        $p3->post_title = "why it sucks";
        $p3->post_content= "again good content for this third post";
        $p3->user_id= 5;
        $p3->thread_id= 6;
        $p3->save();


        Post::factory()->count(17)->create();
    }
}
