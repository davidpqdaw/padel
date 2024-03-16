<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $usuarios=User::all();
        return view('admin',['usuarios'=>$usuarios]);
    }
}
