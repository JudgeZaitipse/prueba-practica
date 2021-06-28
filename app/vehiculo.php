<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    protected $table  = 'vehiculos';
    protected $fillable = ['placa','modelo','marca','color','valor'];
    protected $guarded = ['id'];
}
