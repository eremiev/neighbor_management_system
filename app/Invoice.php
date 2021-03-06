<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entrance_id',
        'flat_id',
        'date',
        'people',
        'paid',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function history()
    {
        return $this->hasMany(HistoryInvoice::class);
    }
}
