<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artwork extends Model {

	protected $table = 'artworks';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', 'width', 'height', 'depth', 'condition', 'origin', 'year', 'image', 'auction_id', 'artist_id');

	public function auction()
	{
		return $this->belongsTo('App\Auction');
	}

	public function artist()
	{
		return $this->belongsTo('App\Artist');
	}

}