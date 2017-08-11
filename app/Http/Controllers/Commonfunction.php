<?php
/**
 * Created by PhpStorm.
 * User: desarrollador
 * Date: 10/08/17
 * Time: 18:55
 */

namespace App\Http\Controllers;
use App\UnidadOrganizacional;

class Commonfunction
{
    public function getChildByIdFather($id){
        $uos = UnidadOrganizacional::where('id_empresa', '=', $id)
            ->get();
        return $uos;
    }
}