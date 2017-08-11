<?php

namespace App\Http\Controllers;

use App\Common;
use App\Estructura;
use App\UnidadOrganizacional;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Empresa;

class UnidadOrganizacionalController extends Controller
{
    public function viewAddUO()
    {
        $empresas = Empresa::all();
        return view('organizacion.storeUO', ['empresas' => $empresas]);
    }

    public function store(Request $request)
    {


        var_dump($request->selectEstructura);

        $uo = new UnidadOrganizacional;
        $uo->nombre = $request->nombreUO;
        $uo->nivel = 0;#TODO IMPLEMENTAR METODO DE COMPROBAR NIVEL

        if($request->selectUO == null)
            $uo->id_padre = $request->selectEmpresa;
        else
            $uo->id_padre = $request->selectUO;

        $uo->descripcion = $request->descripcionUO;
        $uo->id_estructura = $request->selectEstructura;
        $uo->id_empresa = $request->selectEmpresa;
        $uo->save();
        return redirect('adduo');

    }

    public function getData(){
        $common = new Common;
        $common->getChildByIdFather(1);
    }
}
