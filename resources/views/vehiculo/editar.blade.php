@extends ('layouts.admin')
@section ('contenido')
	<div clss="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Veh&iacute;culo {{$vehiculo->patente}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			{!!Form::model($vehiculo,['method'=>'PATCH','route'=>['vehiculo.update',$vehiculo->id]])!!}
				{{Form::token()}}
				<div class="form-group">
					<label for="patente">Patente</label>
					<input type="text" name="patente" class="form-control" value="{{$vehiculo->patente}}" placeholder="Patente...">
				</div>
				<div class="form-group">
					<label for="marca">Marca</label>
					<input type="text" name="marca" class="form-control" value="{{$vehiculo->marca}}" placeholder="Marca...">
				</div>
				<div class="form-group">
					<label for="modelo">Modelo</label>
					<input type="text" name="modelo" class="form-control" value="{{$vehiculo->modelo}}" placeholder="Modelo...">
				</div>
				<div class="form-group">
					<label for="anio">A&ntilde;o</label>
					<input type="text" name="anio" class="form-control" value="{{$vehiculo->anio}}" placeholder="A&ntilde;o...">
				</div>
				<div class="form-group">
					<label for="color">Color</label>
					<input type="text" name="color" class="form-control" value="{{$vehiculo->color}}" placeholder="Color...">
				</div>
				<div class="form-group">
					<label for="motor">Motor</label>
					<input type="text" name="motor" class="form-control" value="{{$vehiculo->motor}}" placeholder="Serial Motor...">
				</div>
				<div class="form-group">
					<label for="kilometraje">Kilometraje</label>
					<input type="text" name="kilometraje" class="form-control" value="{{$vehiculo->kilometraje}}" placeholder="Kilometraje...">
				</div>				
				<div class="form-group">
					<label for="combustible">Combustible</label>
					<input type="text" name="combustible" class="form-control" value="{{$vehiculo->combustible}}" placeholder="Combustible...">
				</div>
				<div class="form-group">
					<button class="btn btn-danger" type="button" onClick="history.back()">Cancelar</button>
					<button class="btn btn-primary" type="submit">Guardar</button>					
				</div>				
			{!!Form::close()!!}
		</div>
	</div>
@endsection