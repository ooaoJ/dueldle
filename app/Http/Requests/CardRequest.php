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
            'name' => 'required|string|max:255',
            'card_type' => 'required|in:Monster,Spell,Trap',
            'attribute' => 'nullable|in:Water,Fire,Light,Earth,Darkness,Wind,Divine',
            'level' => 'nullable|integer|min:1|max:12',
            'description' => 'required|string',
            'effect' => 'nullable|string',
            'image' => 'required|image|max:2048',
            'tipe_efect' => 'nullable|in:Normal Spell,Quick-Play Spell,Continuous Spell,Equip Spell,Field Spell,Ritual Spell,Normal Trap,Continuous Trap,Counter Trap',
            'atk' => 'nullable|integer|min:0',
            'def' => 'nullable|integer|min:0',
            'tipe_monster' => 'nullable|in:Monster,Fusion,Synchro,XYZ,Link',
        ];
    }
}
