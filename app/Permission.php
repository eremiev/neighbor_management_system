<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'flat_id',
        'people_id',
        'cost_type_id',
        'permission'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function person()
    {
        return $this->belongsTo(People::class,'people_id','id');
    }
    /**
     * Get the post that owns the comment.
     */
    public function costs()
    {
        return $this->belongsTo(CostType::class,'cost_type_id','id');
    }
}
