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
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'user.required' => 'O nome de usuário é obrigatório',
            'email.required' => 'O email e obrigatório',
            'email.email' => 'Precisa inserir um email válido',
            'password.required' => 'A senha é obrigatória',
            'password_confirmation.confirmed' => 'As senhas precisam ser iguais',
        ];
    }
}
