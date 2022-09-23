<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'name'=>'required|unique:sub_categories',
        ];
    }
    /**
     * Messages personnalisés
     */
    public function messages()
    {
        return [
            'name.required'=>'Le nom doit être indiqué',
            'name.unique'=>'Le nom existe déjà',
        ];
    }
}
