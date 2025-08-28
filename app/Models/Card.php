<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Card
 *
 * @property $id
 * @property $name
 * @property $card_type
 * @property $attribute
 * @property $level
 * @property $description
 * @property $effect
 * @property $image
 * @property $tipe_efect
 * @property $atk
 * @property $def
 * @property $tipe_monster
 * @property $created_at
 * @property $updated_at
 *
 * @property DeckCard[] $deckCards
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Card extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'card_type', 'attribute', 'level', 'description', 'effect', 'image', 'tipe_efect', 'atk', 'def', 'tipe_monster'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public static function update_rule(){
        return [
            'name' => 'required|string|max:255',
            'card_type' => 'required|in:Monster,Spell,Trap',
            'attribute' => 'nullable|in:Water,Fire,Light,Earth,Darkness,Wind,Divine',
            'level' => 'nullable|integer|min:1|max:12',
            'description' => 'nullable|string',
            'effect' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'tipe_efect' => 'nullable|in:Normal Spell,Quick-Play Spell,Continuous Spell,Equip Spell,Field Spell,Ritual Spell,Normal Trap,Continuous Trap,Counter Trap',
            'atk' => 'nullable|integer|min:0',
            'def' => 'nullable|integer|min:0',
            'tipe_monster' => 'nullable|in:Monster,Fusion,Synchro,XYZ,Link',
        ];
    } 
}
