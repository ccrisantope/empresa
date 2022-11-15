<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
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
            'cPerApellido' => 'required',
            'cPerDireccion' => 'required',
            'cPerNombre' => 'required',
            'dPerFecNac' => 'required|date|before:yesterday',
            'nPerEdad' => 'required',
            'nPerSueldo' => 'required',
            'cPerRnd' => 'required',
            'cPerEstado' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'cPerApellido.required' => 'Se necesita un apellido para identificarlo',
            'cPerDireccion.required' => 'Ingresa su lugar de residencia',
            'cPerNombre' => 'Se necesita un nombre para identificarlo',
            'dPerFecNac' => 'Ingrese su fecha de nacimiento',
            'nPerEdad' => 'Ingrese su edad',
            'nPerSueldo' => 'Ingrese el sueldo',
            'cPerRnd' => 'Ingrese Codigo',
            'cPerEstado' => 'Ingrese estado',
        ];
    }
}
