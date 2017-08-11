<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

use App\Http\Requests;

class EmpresaController extends Controller
{
    public function store(Request $request)
    {
        $empresa = new Empresa;
        $empresa->nombre = $request->nombreEmpresa;
        $empresa->descripcion = $request->descripcionEmpresa;
        $empresa->save();
        return redirect('addempresa');

    }

    public function viewAddEmpresa()
    {
        return view('organizacion.storeEmpresa');
    }


}
