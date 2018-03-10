<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Vehiculo;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\VehiculoFormRequest;
use DB;

class VehiculoController extends Controller
{
    public function __construct()
	{
		
	}
	public function index(Request $request)
	{
		if($request)
		{
			$query=trim($request->get('searchText'));
			$vehiculo=DB::table('vehiculo')->where('patente','LIKE','%'.$query.'%')
			->where('condicion','=','1')
			->orderBy('id','desc')
			->paginate(5);
			return view('vehiculo.index',["vehiculos"=>$vehiculo,"searchText"=>$query]);
		}
	}
	public function create()
	{
		return view('vehiculo.create');
	}
	public function store(VehiculoFormRequest $request)
	{
		$vehiculo=new Vehiculo;
		$vehiculo->patente=$request->get('patente');
		$vehiculo->marca=$request->get('marca');
		$vehiculo->modelo=$request->get('modelo');
		$vehiculo->anio=$request->get('anio');
		$vehiculo->color=$request->get('color');
		$vehiculo->motor=$request->get('motor');
		$vehiculo->kilometraje=$request->get('kilometraje');
		$vehiculo->combustible=$request->get('combustible');
		//$vehiculo->descrip_cliente=$request->get('descrip_cliente');
		$vehiculo->save();
		return Redirect::to('vehiculo');
	}
	public function show($id)
	{
		return view("vehiculo.show",["vehiculo"=>Vehiculo::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("vehiculo.editar",["vehiculo"=>Vehiculo::findOrFail($id)]);
	}
	public function update(VehiculoFormRequest $request, $id)
	{
		$vehiculo=Vehiculo::findOrFail($id);
		$vehiculo->patente=$request->get('patente');
		$vehiculo->marca=$request->get('marca');
		$vehiculo->modelo=$request->get('modelo');
		$vehiculo->anio=$request->get('anio');
		$vehiculo->color=$request->get('color');
		$vehiculo->motor=$request->get('motor');
		$vehiculo->kilometraje=$request->get('kilometraje');
		$vehiculo->combustible=$request->get('combustible');
		//$vehiculo->descrip_cliente=$request->get('descrip_cliente');
		$vehiculo->update();
		return Redirect::to('vehiculo');
	}
	public function destroy($id)
	{
		$vehiculo=Vehiculo::findOrFail($id);
		$vehiculo->condicion=0;
		$vehiculo->update();
		return Redirect::to('vehiculo');
	}
}
