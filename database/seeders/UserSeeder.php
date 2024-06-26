<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User;
        $user1->name= "John";
        $user1->email= "john123@gmail.com";
        $user1->password= bcrypt("johnisbest123");
        $user1->date_of_birth="2003-09-24";
        $user1->role_id= 1;
        $user1->save();

        $user2 = new User;
        $user2->name= "Sam";
        $user2->email= "ash75049@gmail.com";
        $user2->password= bcrypt("password");
        $user2->date_of_birth="2003-09-24";
        $user2->role_id= 1;
        $user2->save();

        $user3 = new User;
        $user3->name= "Bill";
        $user3->email= "bill@gmail.com";
        $user3->password= bcrypt("ohyes12345");
        $user3->date_of_birth= "2006-05-12";
        $user3->role_id= 3;
        $user3->save();

        User::factory()->count(17)->create();
    }
}
