<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VinculeCreateRequest extends FormRequest
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
            'student_id' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'student_id.required' => 'el :attribute es requerido',
            'subject_id.required' => 'la :attribute es requerido',
            'teacher_id.required' => 'el :attribute es requerido',
        ];
    }

    public function attributes()
    {
        return [
            'student_id' => 'estudiante',
            'subject_id' => 'asignatura',
            'teacher_id' => 'profesor',
        ];
    }
}
