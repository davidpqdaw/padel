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
        $role1=new Role;
        $role1->name = 'admin';
        $role1->save();
        $role2=new Role;
        $role2->name = 'profesor';
        $role2->save();
        $role3=new Role;
        $role3->name = 'alumno';
        $role3->save();
        $role4=new Role;
        $role4->name = 'user';
        $role4->save();
    }
}
