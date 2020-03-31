<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectorStoreRequest extends FormRequest
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

            'name' => 'required|unique:sectors,name,',
            'category'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Ingresa el nombre del programa.',
            'name.unique'=>'Este programa ya ha sido registrado.',
            'category.required'=>'Ingrese la categoria.',

        ];

    }
}
