<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryInvoice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invoice_id',
        'entrance_id',
        'flat_id',
        'cost_type_id',
        'date',
        'amount',
    ];

    /**
     *
     */
    public function cost_type()
    {
        return $this->belongsTo(CostType::class);
    }

    /**
     * Get the post that owns the comment.
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
