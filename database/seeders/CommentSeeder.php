<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c1 = new Comment;
        $c1->body= "JDHFEEIOIOVVJREMWDIREIOEFIN";
        $c1->user_id= 1;
        $c1->post_id= 2;
        $c1->save();


        $c2 = new Comment;
        $c2->body= "This is the user body comment";
        $c2->user_id= 3;
        $c2->post_id= 4;
        $c2->save();


        $c3 = new Comment;
        $c3->body= "This is another user body comment";
        $c3->user_id= 5;
        $c3->post_id= 6;
        $c3->save();

        Comment::factory()->count(5)->create();


    }
}
