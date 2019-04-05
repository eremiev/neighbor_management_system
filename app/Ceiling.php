<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ceiling extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    ];

    /**
     * Get the flat record associated with the Ceiling.
     */
    public function flat()
    {
        return $this->hasOne(Flat::class);
    }
}
