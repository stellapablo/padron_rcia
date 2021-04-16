<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padron extends Model
{
    use HasFactory;

    protected $table = 'padron';

    protected $fillable = ['MATRICULA','APELLIDO','NOMBRE','CLASE','GENERO','DOMICILIO','SECCION','CIRCUITO','LOCALIDAD'];
}
