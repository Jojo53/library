<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'slug'=>'required|unique:images'
        ];
    }
    /**
     * Messages personnalisés
     */
    public function messages()
    {
        return[
            'slug.required'=>'Le slug de l\'image doit être indiqué',
            'slug.unique'=>'Le slug existe déjà',
        ];
    }
}
