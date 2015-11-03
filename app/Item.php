<?php

namespace LaraBid;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = ['name', 'description', 'start_bid_amount', 'start_bid_datetime', 'end_bid_datetime'];

    /**
     * Get the auctioneer that owns the item.
     */
    public function auctioneer() {
        return $this->belongsTo('LaraBid\User', 'auctioneer_id');
    }

}
