<?php

namespace LaraBid;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    
	public function bidder() {
        return $this->belongsTo('LaraBid\User', 'bidder_id');
    }

    public function item() {
        return $this->hasOne('LaraBid\Item', 'bidder_id');
    }

}
