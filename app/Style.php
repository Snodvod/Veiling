<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $table = 'styles';

    public function auctions()
    {
    	return $this->hasMany('App\Auction');
    }
}
