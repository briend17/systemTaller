@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Veh&iacute;culo</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			{!!Form::open(array('url'=>'vehiculo/','method'=>'POST','autocomplete'=>'on'))!!}
				{{Form::token()}}
				<div class="form-group">
					<label for="patente">Patente</label>
					<input type="text" name="patente" class="form-control" placeholder="Patente...">
				</div>
				<div class="form-group">
					<label for="marca">Marca</label>
					<input type="text" name="marca" class="form-control" placeholder="Marca...">
				</div>
				<div class="form-group">
					<label for="modelo">Modelo</label>
					<input type="text" name="modelo" class="form-control" placeholder="Modelo...">
				</div>
				<div class="form-group">
					<label for="anio">A&ntilde;o</label>
					<input type="text" name="anio" class="form-control" placeholder="A&ntilde;o...">
				</div>
				<div class="form-group">
					<label for="color">Color</label>
					<input type="text" name="color" class="form-control" placeholder="Color...">
				</div>
				<div class="form-group">
					<label for="motor">Motor</label>
					<input type="text" name="motor" class="form-control" placeholder="Serial Motor...">
				</div>
				<div class="form-group">
					<label for="kilometraje">Kilometraje</label>
					<input type="text" name="kilometraje" class="form-control" placeholder="Kilometraje...">
				</div>				
				<div class="form-group">
					<label for="combustible">Combustible</label>
					<input type="text" name="combustible" class="form-control" placeholder="Combustible (litros)...">
				</div>
				<div class="form-group">
					<button class="btn btn-danger" type="button" onClick="history.back()">Atr&aacute;s</button>
					<button class="btn btn-info" type="reset">Limpiar</button>
					<button class="btn btn-primary" type="submit">Guardar</button>					
				</div>				
			{!!Form::close()!!}
		</div>
	</div>
@endsection