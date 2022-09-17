<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required | string | max:50',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:8',
            'is_admin' => 'nullable | boolean'
        ];
    }

    public function messages()
    {
        return [
            'name.require' => 'O nome e obrigatorio!',
            'name.max' => 'O nome deve ter no maximo 50 caracteres',
            'email.required' => 'O email e obrigatorio!',
            'email.email' => 'Informe um email valido!',
            'email.unique' => 'Este email ja esta cadastrado!',
            'password.min' => 'A senha deve ter no minimo 8 caracteres',
            'password.required' => 'A senha e obrigatoria!'
        ];
    }
}
