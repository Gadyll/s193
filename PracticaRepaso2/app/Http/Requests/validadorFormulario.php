<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormulario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtISBN'=> 'required|digits:13|numeric',
            'txttitulo'=> 'required|min:4|max:150',
            'txtautor'=> 'required |min:4 | max:20 ',
           'txtpaginas' => 'required|integer|min:1|max:150',
            'txtaño'=>  'required|integer|digits:4|min:1000|max:' . date('Y'),
            'txteditorial'=> 'required |min:4 | max:20 ',
            'txtcorreo'=> 'email:rfc:dns ',
        ];
    }
}
