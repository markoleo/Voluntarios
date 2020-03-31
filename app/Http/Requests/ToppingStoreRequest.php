<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToppingStoreRequest extends FormRequest
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

            'volunteer_id'=>['required','exists:volunteers,id'],
            'institution_id'=>['required','exists:institutions,id'],
            'project_id'=>['required','exists:projects,id'],
            'cob_mean'=>['required'],
            'cob_woman'=>['required'],
            'total_people'=>['required'],

        ];
    }

    public function messages()
    {
        return [


            'volunteer_id.required'=>'Selecciona una opción.',
            'volunteer_id.exists'=>'Este voluntario no existe.',
            'institution_id.required'=>'Selecciona una opción.',
            'institution_id.exists'=>'Este instituto no existe.',
            'project_id.required'=>'Selecciona una opción.',
            'project_id.exists'=>'Este proyecto no existe.',
            'cob_mean.required'=>'Cantidad de Hombres.',
            'cob_woman.required'=>'Cantidad de Muejeres.'

        ];

    }
}
