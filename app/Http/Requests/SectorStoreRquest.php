<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectorStoreRquest extends FormRequest
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
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Ingresa el nombre del sector.',
            'name.unique'=>'Este sector ya ha sido registrado.',
        ];

    }
}
