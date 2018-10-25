<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view('customer');
    }

   /**
  * Get all favorite posts by customer
  *
  * @return Response
  */
  public function myFavorites()
 {
    $myFavorites = Auth::user()->favorites;

    return view('my_favorites', compact('myFavorites'));
 }

}
