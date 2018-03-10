@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>
			Listado de Veh&iacute;culos
			<a href="vehiculo/create">
				<button class="btn btn-success">Nuevo</button>				
			</a>
		</h3>
		@include('vehiculo.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Patente</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>A&ntilde;o</th>
					<th>Color</th>
					<th>Motor</th>
					<th>Kilometraje</th>
					<th>Combustible</th>					
					<th>Opciones</th>
				</thead>
				@foreach($vehiculos as $veh)
				<tr>
					<td>{{ $veh->id }}</td>
					<td>{{ $veh->patente }}</td>
					<td>{{ $veh->marca }}</td>
					<td>{{ $veh->modelo }}</td>
					<td>{{ $veh->anio }}</td>
					<td>{{ $veh->color }}</td>
					<td>{{ $veh->motor }}</td>
					<td>{{ $veh->kilometraje }}</td>
					<td>{{ $veh->combustible }}</td>					
					<td>
						<a href="{{URL::action('VehiculoController@edit',$veh->id)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$veh->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('vehiculo.modal')
				@endforeach
			</table>
		</div>
		{{$vehiculos->render()}}
	</div>
</div>
@endsection