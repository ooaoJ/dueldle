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
			'name' => '',
			'card_type' => 'in:monster,spell,trap',
			'attribute' => 'in:water,fire,light,earth,darkness,wind,divine',
			'level' => '',
			'description' => '',
			'effect' => '',
			'image' => 'required',
			'tipe_efect' => 'in:Normal Spell,Quick-Play Spell,Continuous Spell,Equip Spell,Field Spell,Ritual Spell,Normal Trap,Continuous Trap,Counter Trap',
			'atk' => '',
			'def' => '',
			'tipe_monster' => 'in:monster,fusion,link,xyz,synchro',
        ];
    }
}
