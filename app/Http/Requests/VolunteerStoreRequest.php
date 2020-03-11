<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerStoreRequest extends FormRequest
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

            'key' => ['required'],
            'name'=>['required'],
            'last_name'=>['required'],
            'second_name'=>['required'],
            'address'=>['required'],
            'phone'=>['required'],
            'references_id'=>['required','exists:references,id']

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
            'references_id.required'=>'Selecciona una opción.',
            'references_id.exists'=>'Este programa no existe.',
        ];

    }

}
