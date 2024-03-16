<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'dia1',
        'idprofesor'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }

    function Profesor(){
        return $this->belongsTo(Profesor::class);
    }
}
