<!-- Select de empresas -->

<div class="form-group">
    <div class="form-group">
        <label>Empresa a la que pertenece</label>
        <select multiple="" id="selectEmpresa" name="selectEmpresa" class="form-control">
            @foreach ($empresas as $empresa)
                <option value="{{ $empresa->id_empresa }}">{{ $empresa->nombre }}</option>
            @endforeach
        </select>
    </div>
</div>
