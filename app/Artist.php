<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model {

	protected $table = 'artists';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function artworks()
	{
		return $this->hasMany('App\Artwork');
	}

}