<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:subjects,name,'.$this->id,
            'description' => 'required',
            'credits' =>  'required|numeric',
            'area_of_knowledge' => 'required',
            'state' => 'required|in:electiva,obligatoria'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'el :attribute es requerido',
            'name.unique' => 'el :attribute ya existe',
            'description.required' => 'los :attribute es requerido',
            'credits.required' => 'el :attribute es requerido',
            'credits.numeric' => 'los :attribute debe ser númerico',
            'area_of_knowledge.required' => 'el :attribute es requerido',
            'state.required' => 'el :attribute es requerido',
            'state.in' => 'el :attribute debe ser electiva o obligatoria',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre',
            'description' => 'descripción',
            'credits' => 'créditos',
            'area_of_knowledge' => 'area de concocimiento',
            'state' => 'estado',
        ];
    }
}
