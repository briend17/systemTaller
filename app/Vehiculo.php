<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table='vehiculo'; 
	protected $primaryKey='id';
	public $timestamps=true;
	
	protected $fillable =[
		'patente',
		'marca',
		'modelo',
		'anio',
		'color',
		'motor',
		'kilometraje',
		'combustible',
		//'descrip_cliente'
	];
	
	protected $guarded=[
	];
}
