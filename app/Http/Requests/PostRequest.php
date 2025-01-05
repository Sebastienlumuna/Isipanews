<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'Titre' => ['required', 'string', 'between:3,100'],
            'Contenu' => ['required', 'string'],
            'Image' => ['required', 'image'],
            'categorie_id' => ['required', 'integer', 'exists:categories,id'],

        ];
    }
}
