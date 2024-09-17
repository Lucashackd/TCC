<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'title' => 'required|string|max:75',
            'description' => 'string',
            'path' => 'required|url',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O campo título é obrigatório',
            'title.max' => 'O campo título deve ter no máximo :max caracteres',
            'path.required' => 'A URL é obrigatória',
            'path.url' => 'A URL informada não é válida',
        ];
    }
}
