<?php namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Style;
use App\Auction;;
use App\Artist;
use App\Artwork;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Classes\timecalc;

class UserController extends Controller {


  public function auctions()
  {
    $auctions = Auth::user()->auctionsowner;
    $timeArray = timecalc::calculate($auctions);
    return view('user/myauctions', ['auctions' => $auctions, 'timediff' => $timeArray]);
  }

  public function create()
  {
    return view('user/new', ['styles' => Style::All()]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
        'title' => 'required|unique:auctions|max:255',
        'artist' => 'required|max:255',
        'year' => 'required|integer|digits_between:3,4|max:2016',
        'width' => 'required|numeric',
        'height' => 'required|numeric',
        'depth' => 'numeric',
        'description' => 'required|max:255',
        'condition' => 'required|max:255',
        'origin' => 'required|max:255',
        'picture' => 'required', //needs picture mime validation but throws errors every time
        'minprice' => 'required|numeric|',
        'buyout' => 'required|numeric|greater_than_field:minprice',
        'date' => 'required|date|after:today',
        'terms' => 'required|accepted'
    ]);

    $artist = Artist::where('name', $request->artist)->first();
    if(!$artist) {
      $artist =  new Artist([
          'name' => $request->artist
      ]);
    }
    $artist->save();

    $auction = new Auction([
        'title' => $request->title,
        'description' => $request->description,
        'start' => Carbon::now(),
        'end' => $request->date,
        'buy_now' => $request->buyout,
        'price' => $request->minprice,
        'status' => 'Active',
        'style_id' => Style::Where('name', $request->style)->first()->id
    ]);
    $artwork = new Artwork([
        'name' => $request->title,
        'width' => $request->width,
        'height' => $request->height,
        'depth' => $request->depth,
        'condition' => $request->condition,
        'origin' => $request->origin,
        'year' => $request->year
    ]);
    $auction->save();

    $artwork->auction()->associate($auction);
    $artwork->save();

    // Picture save
    $imageName = $artwork->id . '.' . 
        $request->file('picture')->getClientOriginalExtension();
    $artwork->image = $imageName;

    $request->file('picture')->move(
        base_path() . '/public/img/', $imageName
    );

    $artist->artworks()->save($artwork);
    $owner = $request->user();
    $owner->auctionsowner()->save($auction);

    return redirect('/auctions/' . $owner->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>