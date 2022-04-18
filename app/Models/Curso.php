<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = "cursos"; //no hace falta si sigue la convencion
    //protected $fillable = ["name", "descripcion", "categoria"];
    protected $guarded = []; //ignora estos campos al hacer la asignacion masiva
}
