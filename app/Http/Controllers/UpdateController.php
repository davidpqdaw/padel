<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(){
        if(isset($_POST['update'])){
            $user=User::find($_POST['update']);
            if($_POST['name']!=$user->name){
                $user->name=$_POST['name'];
            }
            if($_POST['password']!=$user->password and $_POST['password']!="" and strlen($_POST['password'])>=8){
                $user->password=$_POST['password'];
            }
            if($_POST['email']!=$user->email){
                $user->email=$_POST['email'];
            }
            $user->save();
        }else if(isset($_POST['delete'])){
            User::destroy($_POST['delete']);
        }
        $usuarios=User::all();
        return view('admin',['usuarios'=>$usuarios]);
    }
}
