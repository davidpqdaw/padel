<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Profesor;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraciasController extends Controller
{
    public function index()
    {
        //dd($_POST);
        if($alumno=Alumno::firstWhere("user_id",auth()->user()->id)){
            if(isset($_POST['dia2'])){
                $alumno->dia1=$_POST['dia1'];
                $alumno->dia2=$_POST['dia2'];
            }else{
                $alumno->dia1=$_POST['dia1'];
                $alumno->dia2=null;
            }
            $alumno->save();
            $profesor=Profesor::find($alumno->profesor_id);
            $userProf=User::find($profesor->user_id);
        }else{
            $profesores=Profesor::all();
            if(isset($_POST['dia2'])){
                $alumno=new Alumno(['dia1'=>$_POST['dia1'],'dia2'=>$_POST['dia2']]);
            }else{
                $alumno=new Alumno(['dia1'=>$_POST['dia1']]);
            }
            $user=User::find(auth()->user()->id);
            $user->alumnos()->save($alumno);
            $profesor=Profesor::find(rand(1,count($profesores)));
            $profesor->alumno()->save($alumno);
            $role_alumno=Role::where('name','alumno')->first();
            $user->roles()->detach();
            $user->roles()->attach($role_alumno);
            $user->save();
            $userProf=User::find($profesor->user_id);
        }
        return view('gracias',["profesor"=>$userProf]);
    }
}
