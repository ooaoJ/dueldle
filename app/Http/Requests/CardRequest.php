<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
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
			'name' => 'required',
			'card_type' => 'required',
			'attribute' => 'required',
			'level' => 'required',
			'description' => 'required',
			'effect' => 'required',
			'image' => 'required',
			'tipe_efect' => 'required',
			'atk' => 'required',
			'def' => 'required',
			'tipe_monster' => 'required',
        ];
    }
}
