<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadOrganizacional extends Model
{
    //
    protected $table = 'admin_unidad_organizacional';

    protected $primaryKey = 'id_unidad';

    public $timestamps = false;

}
