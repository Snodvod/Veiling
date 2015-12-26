<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{

	use SoftDeletes, Authenticatable, CanResetPassword, Authorizable;

	protected $table = 'users';
	public $timestamps = true;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', 'email', 'password', 'facebook_id', 'avatar');
	protected $hidden = array('password', 'remember_token');

	public function bidder()
	{
		return $this->belongsTo('App\Bidder');
	}

	public function auctionsowner()
	{
		return $this->hasMany('App\Auction');
	}

	public function auctionsbuyer()
	{
		return $this->hasMany('App\Auction', 'buyer_id');
	}

}