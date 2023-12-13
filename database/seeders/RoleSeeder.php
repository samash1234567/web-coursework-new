<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $r1 = new Role;
        $r1->name = "Admin";
        $r1->save();

        $r2 = new Role;
        $r2->name = "Mod";
        $r2->save();

        $r3 = new Role;
        $r3->name = "Member";
        $r3->save();
    }
}
