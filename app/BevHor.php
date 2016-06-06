<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class BevHor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['beverage_id', 'horeca_id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'beverage_id' => 'int',
        'horeca_id' => 'int',
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
        return $this->hasMany(Beverage::class);
    }
}
