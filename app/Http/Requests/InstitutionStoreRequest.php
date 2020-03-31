<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionStoreRequest extends FormRequest
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

                 'name'=>['required'],
                 'address'=>['required'],
                 'phone'=>['required'],
                 'postal_code'=>['required'],
                 'sector_id'=>['required','exists:sectors,id'],

             ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Ingresa el nombre de la institucion.',
            'name.unique'=>'¡Ups! Este instituto ya ha sido registrado.',
            'address.required'=>'Ingrese la direccion',
            'phone.required'=>'Ingrese el numero telefonico.',
            'postal_code.required'=>'Ingrese el codigo postal.',
            'sector_id.required'=>'Selecciona una opción.',
            'sector_id.exists'=>'Este sector no existe.'
        ];

    }

}
