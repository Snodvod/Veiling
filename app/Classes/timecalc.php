<?php
use Carbon\Carbon;
namespace App\Classes;

class Timecalc {
	
	public static function calculate($auctions) {
		$now = new \Carbon();
		$timeArray = [];
		foreach($auctions as $auction) 
        {
        	$end = new \Carbon($auction->end);
        	$difference = $end->diff($now, true);
            $diffstring = $difference->d . "d " . $difference->h . "u " . $difference->i . "m";
            array_push($timeArray, $diffstring);
        }
		return $timeArray;
	}
}
?>