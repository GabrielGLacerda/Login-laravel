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
            'user' => 'required',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|confirmed|min:8',
        ];
    }

    public function messages()
    {
        return [
            'user.required' => 'O nome de usuário é obrigatório',
            'email.required' => 'O email e obrigatório',
            'email.email' => 'Precisa inserir um email válido',
            'email.unique' => 'O email inserido ja existe',
            'password.required' => 'A senha é obrigatória',
            'password.confirmed' => 'As senhas precisam ser iguais',
            'password.min' => 'A senha deve conter pelo menos 8 caracteres',
        ];
    }
}
