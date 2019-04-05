<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'balance'
    ];

    /**
     * Get the flats for the blog entrance.
     */
    public function flats()
    {
        return $this->hasMany(Flat::class);
    }
}
