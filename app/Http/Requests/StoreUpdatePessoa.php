<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePessoa extends FormRequest
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
            
            'nome' => ['required', 'min: 3'],
            'matricula' => ['required', 'min: 3', 'max: 6'],
            'nascimento' => ['required'],
            'email' => ['required', 'min:10']
        ];
    }
}
