<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'materia_id',
        'evaluacion',
        'nota'
    ];

    public function user(){ //Al llamarse user no es necesario llamar a la fk user_id si pusiera alumno si
        return $this->belongsTo(User::class, 'user_id');
    }

    public function materia(){
        return $this->belongsTo(Materia::class, 'materia_id');
    }
}