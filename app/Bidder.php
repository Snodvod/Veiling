<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bidder extends Model {

	protected $table = 'bidders';
	public $timestamps = true;
	protected $fillable = ['price'];

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function auction()
	{
		return $this->belongsTo('App\Auction');
	}
}