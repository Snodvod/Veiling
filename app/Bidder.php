<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bidder extends Model {

	protected $table = 'bidders';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function user()
	{
		return $this->hasOne('App\User');
	}

	public function auctions()
	{
		return $this->belongsToMany('App\Auction');
	}
}