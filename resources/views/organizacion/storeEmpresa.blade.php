@extends('layouts.app')

@section('htmlheader_title')
	Crear Empresa
@endsection


@section('main-content')
	<div class=" spark-screen">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Crear Empresa</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" action="{{ url('/addempresa') }}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Nombre</label>
								<input class="form-control"  name="nombreEmpresa" id="nombreEmpresa" placeholder="" type="text">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Descripcion</label>
								<textarea name="descripcionEmpresa" id="descripcionEmpresa" class="form-control" rows="3" placeholder=""></textarea>
							</div>
						</div>
						<!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Crear</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
