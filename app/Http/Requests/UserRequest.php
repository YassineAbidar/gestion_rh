<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
     * @return array
     */
    public function rules()
    {
        $userId = Auth::id();
        return [
            'username' => 'required|unique:users,username,',
            'email' => 'required|email|unique:users,email,',
            'rais_social' => 'required|unique:users',
            'tele' => ["required", "regex:/^(0|\+212)[1-9]([-.]?[0-9]{2}){4}$/"],
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'ce champs est obligatoire',
            'username.unique' => 'nom deja existe',
            'email.required' => 'ce champ est obligatoire',
            'email.unique:users' => 'email deja existe',
            'rais_social.required' => 'ce champ est obligatoire',
            'rais_social.unique' => 'Ce nom deja existe',
            'tele.required' => 'ce champ est obligatoire',
            'tele.regex' => 'format invalid',
        ];
    }
}
