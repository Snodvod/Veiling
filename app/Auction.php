<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auction extends Model {

	protected $table = 'auctions';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('title', 'clicks', 'status', 'description', 'start', 'end', 'buy_now', 'price', 'buyer_id', 'style_id', 'user_id');

	public function owner()
	{
		return $this->belongsTo('App\User');
	}

	public function buyer()
	{
		return $this->belongsTo('App\User', 'buyer_id');
	}

	public function artwork()
	{
		return $this->hasOne('App\Artwork');
	}

	public function bidders()
	{
		return $this->hasMany('App\Bidder');
	}

	public function style()
	{
		return $this->belongsTo('App\User');
	}

}