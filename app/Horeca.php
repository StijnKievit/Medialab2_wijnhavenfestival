<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Horeca extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['naam', 'beschrijving', 'afbeelding', 'zeebonk', 'location_lang', 'location_long'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'zeebonk' => 'int',
    ];

    /**
     * Get the user that owns the task.
     */
    public function beverages()
    {
        return $this->hasMany(Horeca::class);
    }

    public function horeca()
    {
        return $this->belongsTo(Zeebonk::class);
    }
}
