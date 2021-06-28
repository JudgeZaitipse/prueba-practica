<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table  = 'clientes';
    protected $fillable = ['cedula','nombre','apellido','direcion','telefono','celular','correo'];
    protected $guarded = ['id'];
}
