<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estructura extends Model
{
    //
    protected $table = 'admin_estructura';

    protected $primaryKey = 'id_estructura';

    public $timestamps = false;
}
