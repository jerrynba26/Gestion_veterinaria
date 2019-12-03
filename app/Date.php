<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $table = 'dates';

    protected $fillable = [
        'namcliente', 'appcliente','fechacita','horacita','tipomascota','nommascota','observacion'
    ];
}
