<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zeebonk extends Model
{
    //
    protected $fillable = ['id', 'naam', 'beschrijving', 'beschrijving_eten', 'afbeelding', 'type','max_value', 'min_value'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int'
    ];

    /**
     * Get the user that owns the task.
     */
    public function beverages()
    {
        return $this->hasMany(Beverage::class);
    }
}   