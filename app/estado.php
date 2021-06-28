<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    protected $table  = 'estados';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
