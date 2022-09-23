<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'lastName'=>'required|unique:authors',
            'firstName'=>'required',
        ];
    }
    /**
     * Messages personnalisés
     */
    public function messages()
    {
        return [
            'lastName.required'=>'Le nom de l\'auteur doit être indiqué',
            'lastName.unique'=>'Le nom de l\'auteur existe déjà',
            'firstName.required'=>'Le prénom de l\'auteur doit être indiqué',
        ];
    }
}
