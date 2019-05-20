<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entrance_id',
        'type',
        'period',
        'price'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function history_invoices()
    {
        return $this->hasMany(HistoryInvoice::class);
    }


}
