<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'tiempo_jugando'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }

    function alumno(){
        return $this->hasMany(Alumno::class);
    }
}
