<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionUpdateRequest extends FormRequest
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

            'name' => 'required|unique:institutions,name,'.$this->institution,

        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Ingresa el nombre del la institucion.',
            'name.unique'=>'¡Ups! Este instituto ya ha sido registrado.'
        ];

    }
}
