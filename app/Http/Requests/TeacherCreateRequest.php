<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherCreateRequest extends FormRequest
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

    public function rules()
    {
        return [
            'document_number' => !$this->id ? 'required|numeric|unique:teachers' : '',
            'names' => 'required',
            'email' => 'required|email|unique:teachers,email,'.$this->id,
            'city' =>  'required',
            'address' => 'required',
            'phone' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'document_number.required' => 'el :attribute es requerido',
            'document_number.numeric' => 'el :attribute debe ser númerico',
            'document_number.unique' => 'el :attribute ya existe',
            'names.required' => 'los :attribute es requerido',
            'email.required' => 'el :attribute es requerido',
            'email.email' => 'el :attribute debe ser un email válido',
            'email.unique' => 'el :attribute ya existe',
            'city.required' => 'la :attribute es requerido',
            'address.required' => 'la :attribute es requerido',
            'phone.required' => 'el :attribute es requerido',
            'phone.numeric' => 'el :attribute debe ser númerico',
        ];
    }

    public function attributes()
    {
        return [
            'document_number' => 'documento',
            'names' => 'nombres',
            'email' => 'correo electrónico',
            'city' => 'ciudad',
            'address' => 'dirección',
            'phone' => 'teléfono',
        ];
    }
}
