<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Profesor;
use App\Models\Alumno;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $role_user=Role::where('name','user')->first();
        $role_profesor=Role::where('name','profesor')->first();
        $role_alumno=Role::where('name','alumno')->first();
        $role_admin=Role::where('name','admin')->first();

        $user2=new User();
        $user2->name='Paquito Navarro';
        $user2->email='paquitoNavarro@example.com';
        $user2->password=Hash::make('12345678');
        $user2->save();
        $user2->roles()->attach($role_profesor);
        $profesor1=new Profesor(['tiempo_jugando'=>10]);
        $user2->profesores()->save($profesor1);

        $user3=new User();
        $user3->name="alumno1";
        $user3->email='alumno1@example.com';
        $user3->password=Hash::make('12345678');
        $user3->save();
        $user3->roles()->attach($role_alumno);
        $alumno1=new Alumno(['dia1'=>"Lunes"]);
        $user3->alumnos()->save($alumno1);
        $profesor1->alumno()->save($alumno1);

        $user4=new User();
        $user4->name='profe';
        $user4->email='profe@example.com';
        $user4->password=Hash::make('12345678');
        $user4->save();
        $user4->roles()->attach($role_profesor);
        $profesor2=new Profesor(['tiempo_jugando'=>10]);
        $user4->profesores()->save($profesor2);

        $user5=new User();
        $user5->name="alumno2";
        $user5->email='alumno2@example.com';
        $user5->password=Hash::make('12345678');
        $user5->save();
        $user5->roles()->attach($role_alumno);
        $alumno2=new Alumno(['dia1'=>"Lunes",'dia2'=>"Martes"]);
        $user5->alumnos()->save($alumno2);
        $profesor2->alumno()->save($alumno2);

        $user6=new User();
        $user6->name='profe2';
        $user6->email='profe2@example.com';
        $user6->password=Hash::make('12345678');
        $user6->save();
        $user6->roles()->attach($role_profesor);
        $profesor3=new Profesor(['tiempo_jugando'=>10]);
        $user6->profesores()->save($profesor3);

        $user7=new User();
        $user7->name='Admin';
        $user7->email='admin@example.com';
        $user7->password=Hash::make('12345678');
        $user7->save();
        $user7->roles()->attach($role_admin);
    }
}
