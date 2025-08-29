<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personagen
 *
 * @property $id
 * @property $name
 * @property $gender
 * @property $age
 * @property $appear
 * @property $deck_type
 * @property $favorite_card
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @property Card $card
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Personagen extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'gender', 'age', 'appear', 'deck_type', 'favorite_card', 'image'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function card()
    {
        return $this->belongsTo(\App\Models\Card::class, 'favorite_card', 'id');
    }
    
}
