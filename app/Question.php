<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = ['id', 'question', 'value'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'value' => 'int'
    ];

    /**
     * Get the user that owns the task.
     */
    public function Answers()
    {
        return $this->hasMany(Answer::class);
    }
}   