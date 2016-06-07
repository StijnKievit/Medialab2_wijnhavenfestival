<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = ['id', 'naam', 'beschrijving', 'afbeelding', 'type','max_value', 'min_value'];

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
    public function Answer()
    {
        return $this->hasOne(Question::class);
    }
}   