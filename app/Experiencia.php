<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $table='experiencias';
    protected $fileable=[
        'cargo','empresa','fecha_inicio','fecha_fin','descripcion'
    ];

}
