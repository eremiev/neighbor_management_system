<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'flat_id',
        'ceiling_id',
        'name',
        'phone'
    ];

    /**
     * Get the flat that owns the People.
     */
    public function flat()
    {
        return $this->belongsTo(Flat::class);
    }

    /**
     * Get the ceiling that owns the people.
     */
    public function ceiling()
    {
        return $this->belongsTo(Ceiling::class);
    }
}
