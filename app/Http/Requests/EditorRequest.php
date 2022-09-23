<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditorRequest extends FormRequest
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
            'name'=>'required|unique:editors'
        ];
    }
    /**
     * Messages personnalisés
     */
    public function messages()
    {
        return [
            'name.required'=>'Le nom de l\'editeur doit être indiqué',
            'name.unique'=>'L\'editeur existe déjà',
        ];
    }
}
