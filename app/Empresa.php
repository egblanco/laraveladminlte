<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table = 'admin_empresa';

    protected $primaryKey = 'id_empresa';

    public $timestamps = false;

}
