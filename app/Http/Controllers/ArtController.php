<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Artwork;
use App\Artist;
use App\Auction;
use App\Classes\timecalc;
use Carbon\Carbon;
use App\Bidder;
use Auth;
use DB;
use Mail;

class ArtController extends Controller
{
    public function index($filter = 'soon', $param = "")
    {
        $auctions = Auction::All();
        if($param == "") {
            switch($filter) {
                case 'soon':
                $sorted = $auctions->sortBy('end');
                break;

                case 'late':
                $sorted = $auctions->sortByDesc('end');
                break;

                case 'new':
                $sorted = $auctions->sortByDesc('start');
                break;

                case 'pop':
                //have to add clicks on auctions table
                break;
            }
            $auctions = $sorted->values()->all();
        } else {
            switch($filter) {
                case 'price': {
                    switch($param) {
                        case '5000': $filtered = $auctions->filter(function($auction) {
                            return $auction->price <= 5000;
                        });
                        break;
                        case '10000': $filtered = $auctions->filter(function($auction) {
                            return $auction->price <= 10000 && $auction->price >= 5000;
                        });
                        break;
                        case '25000': $filtered = $auctions->filter(function($auction) {
                            return $auction->price <= 25000 && $auction->price >= 10000;
                        });
                        break;
                        case '50000': $filtered = $auctions->filter(function($auction) {
                            return $auction->price <= 50000 && $auction->price >= 25000;
                        });
                        break;
                        case '100000': $filtered = $auctions->filter(function($auction) {
                            return $auction->price <= 100000 && $auction->price >= 50000;
                        });
                        break;
                        case 'more': $filtered = $auctions->filter(function($auction) {
                            return $auction->price >= 100000;
                        });
                        break;
                    }
                }
                break;
                case 'end': {
                    switch ($param) {
                        case 'week': $filtered = $auctions->filter(function($auction) {
                            $end = new Carbon($auction->end);
                            return $end->diff(Carbon::now(), true)->d <= 7;
                        });
                        break;
                        case 'new': $filtered = $auctions->filter(function($auction) {
                            $start = new Carbon($auction->start);
                            return $start->diff(Carbon::now(), true)->d < 1;
                        });
                        break;
                        case 'now': $filtered = $auctions->filter(function($auction) {
                            $end = new Carbon($auction->end);
                            return $end->diff(Carbon::now(), true)->d < 1 && $auction->end->diff(Carbon::now(), true)->h < 6;
                            });
                        break;
                    }
                }
                break;
                case 'era': {
                    switch ($param) {
                        case 'pre': $filtered = $auctions->filter(function($auction) {
                            return $auction->artwork->year < 1940;
                        });
                        break;
                        case '4060': $filtered = $auctions->filter(function($auction) {
                            return $auction->artwork->year > 1940 && $auction->artwork->year < 1960;
                            });
                        break;
                        case '6080': $filtered = $auctions->filter(function($auction) {
                            return $auction->artwork->year > 1960 && $auction->artwork->year < 1980;
                            });
                        break;
                        case 'now': $filtered = $auctions->filter(function($auction) {
                            return $auction->artwork->year > 1980;
                            });
                        break;
                    }
                }
                break;
            }
            $a = $filtered->all();
            $auctions = array_values($a);
        }

        

        
        $timeArray = timecalc::calculate($auctions);

        
        return view('art.index', ['auctions' => $auctions, 'timediff' => $timeArray]);
    }

    public function bid(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'prev' => 'required',
            'bid' => 'required|greater_than_field:prev'
        ]);
        
        $auction = Auction::findOrFail($request->id);
        $auction->price = $request->bid;
        $auction->save();
        $user = Auth::user();
        $bidder = new Bidder();
        $bidder->user()->save($user);
        $bidder->auction()->associate($auction);
        $bidder->price = $request->bid;
        $bidder->save();

        return redirect('/art');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thisAuction = Auction::findOrFail($id);
        $auctions = [];
        array_push($auctions, $thisAuction);
        $thisAuction->clicks = $thisAuction->clicks + 1;
        $thisAuction->save();
        $timeArray = timecalc::calculate($auctions);
        return view('art.artwork', ['auction' => $auctions[0], 'timediff' => $timeArray[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($query)
    {
        // $artist = Artist::whereHas('artworks', function($q) use ($query) {
        //     $q->where('name', 'like', '%'.$query.'%');
        // })->orWhere()
    }

    public function indexpage() {
        $auctions = Auction::All();
        $sorted = $auctions->sortBy('clicks');
        $popular = $sorted->values()->all();

        return view('index', ['popular' => $popular]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buy($id)
    {
        $auction = Auction::findOrFail($id);
        $user = Auth::user();
        $user->auctionsbuyer()->save($auction);
        $auction->status = "sold";

        Mail::send('emails.sorry', ['user' => $user], function($m) use ($user) {
            $m->from('info@landoretti.com', 'Landoretti');

            $m->to($user->email, $user->name)->subject("Sorry, uw bieding is door iemand overgekocht");
        });

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
