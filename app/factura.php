<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table  = 'facturas';
    protected $fillable = ['cliente_id','vehiculo_id','estado_id','id_usuario'];
    protected $guarded = ['id'];

    // relaciones 
    public function estado()
    {
		return $this->hasOne('App\estado','id', 'estado_id');
    }

    public function cliente()
    {
		return $this->hasOne('App\cliente','id', 'cliente_id');
    }
 
    public function vehiculo()
    {
		return $this->hasOne('App\vehiculo','id', 'vehiculo_id');
    }
    
    public function usuario()
    {
		return $this->hasOne('App\User','id', 'id_usuario');
    }
}
