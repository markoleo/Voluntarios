<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'key' => 'required|unique:volunteers,key,' . $this->volunteer,
        ];
    }

    public function messages()
    {
        return [
            'key.required' =>'Ingrese la clave del voluntario.',
            'key.unique'=>'¡Ups! Esta clave ya ha sido registrado.',
            'name.required'=>'Ingrese el nombre del voluntario.',
            'last_name.required'=>'Ingrese el apellido paterno.',
            'second_name.required'=>'Ingrese el apellido materno.',
            'address.required'=>'Ingrese la direccion',
            'phone.required'=>'Ingrese el numero telefonico.',
            'references_id.required'=>'Selecciona una opción.'
        ];

    }
}
