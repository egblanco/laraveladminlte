<?php

namespace App\Http\Controllers;

use App\Estructura;
use App\UnidadOrganizacional;
use Illuminate\Http\Request;
use App\Http\Controllers\UnidadOrganizacionalController;


use App\Http\Requests;

use App\Empresa;
use App\Http\Controllers\Commonfunction;
use Illuminate\Support\Facades\DB;

class EstructuraController extends Controller
{
    //
    public function viewAddEstructura()
    {
        $empresas = Empresa::all();
        return view('organizacion.storeEstructura', ['empresas' => $empresas]);
    }

    public function store(Request $request)
    {
        $estructura = new Estructura;
        $estructura->nombre = $request->nombreEstructura;
        $estructura->descripcion = $request->descripcionEstructura;
        $estructura->id_empresa = $request->selectEmpresa;
        $estructura->save();
        return redirect('addestructura');

    }

    public function getEstructuraByIdEmpresa(Request $request)
    {
        $id_empresa = $request->id;
        $estructuras = Estructura::where('id_empresa', '=', $id_empresa)
            ->get();
        $common = new Commonfunction;
        $uos = $common->getChildByIdFather($id_empresa);
        $data['estructuras'] = $estructuras;
        $data['uopadre'] = $uos;
        echo json_encode($data);
    }


}
