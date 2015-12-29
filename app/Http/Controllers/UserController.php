<?php namespace App\Http\Controllers;

use App\User;
use App\Style;
use App\Auction;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function auctions($id)
  {
    return view('user/myauctions', ['user' => User::findOrFail($id)]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
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
    return $request;
    $auction = new Auction([
        'title' => $request->title

    ]);

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