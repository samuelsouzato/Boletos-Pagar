<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaRequest extends FormRequest
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
            'nome' => 'required|min:3|max:25',
            'valor' => 'required',
            'vencimento' => 'required',
         ];
    }

    public function messages(): array
    {
        return [
            
            'nome.required' => 'O campo "Nome" é obrigatório!!',
            'nome.min' => 'O campo "Nome" deve ter no mínimo 3 caracteres!!',
            'nome.max' => 'O campo "Nome"" deve ter no máximo 25 caracteres!!',
            'valor.required' => 'O campo "Valor"" é obrigatório!!',
            'vencimento.required' => 'O campo "Vencimento" é obrigatório!!',
            
        ];
    }

    

}
