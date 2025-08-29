<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonagenRequest extends FormRequest
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
			'name' => 'required|string',
			'gender' => 'required|string',
			'age' => 'required|int',
			'appear' => 'required|string',
			'deck_type' => 'string|string',
			'favorite_card' => 'required|int',
			'image' => 'required|image|max:2048',
        ];
    }
}
