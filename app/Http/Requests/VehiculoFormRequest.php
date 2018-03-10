<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'patente'=>'required|max:10',
			'marca'=>'required|max:30',
			'modelo'=>'required|max:30',
			'anio'=>'required|max:10',
			'color'=>'required|max:15',
			'motor'=>'required|max:30',
			'kilometraje'=>'required|max:10',
			'combustible'=>'required|max:10',
			//'descrip_ciente'=>'required|max:200',
        ];
    }
}
