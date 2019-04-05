<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entrance_id',
        'ceiling_id',
        'number',
        'balance'
    ];

    /**
     * Get the entrance that owns the flat.
     */
    public function entrance()
    {
        return $this->belongsTo(Entrance::class);
    }

    /**
     * Get the ceiling that owns the flat.
     */
    public function ceiling()
    {
        return $this->belongsTo(Ceiling::class);
    }

    /**
     * Get the people for the flat.
     */
    public function people()
    {
        return $this->hasMany(People::class);
    }
}
