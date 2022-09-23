<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'isbn'=>'required|unique:book',
            'title'=>'required|unique:book',
        ];
    }
    /**
     * Messages personnalisés
     */
    public function messages()
    {
        return[
            'isbn.required'=>'L\'isbn doit être indiqué',
            'isbn.unique'=>'L\'isbn existe déjà',
            'title.required'=>'Le titre doit être indiqué',
            'title.unique'=>'Le titre existe déjà',
        ];
    }
}
