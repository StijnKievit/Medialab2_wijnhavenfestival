<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['naam', 'beschrijving', 'afbeelding', 'type'];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'zeebonk_id' => 'int'
    ];

    /**
     * Get the horeca that owns the task.
     */
    public function horeca()
    {
        return $this->belongsTo(Zeebonk::class);
    }
}
