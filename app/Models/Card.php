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
    public function deckCards()
    {
        return $this->hasMany(\App\Models\DeckCard::class, 'id', 'card_id');
    }
    
}
