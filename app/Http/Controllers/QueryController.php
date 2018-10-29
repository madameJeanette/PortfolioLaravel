<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Art;

class QueryController extends Controller

{   
  public function search(Request $request)
  {
    
              
       // Gets the query string from our form submission 
       $search = $request->input('search');
       // Returns an array of art that have the query string located somewhere within 
       // our art titles. Paginates them so we can break up lots of search results.
       $arts = Art::where('name', 'LIKE', '%' .$search. '%')->orWhere('picture', 'LIKE', '%' .$search. '%')->get();    
       // returns a view and passes the view the list of art and the original query.
       return view('art.search')->with('arts', $arts);
      

 } 


 public function index(Request $request)
 {
        $arts = new Art;
             
        if (request()->has('created_at')){ 
            $arts = $arts->orderBy('created_at', request('created_at'));//order by upload time
            //sort result by timestamp
        }
        if (request()->has('sort')){
          $arts = $arts->orderBy('name', request('sort')); //order by alphabet
          //sort result by name
        }
       
        $arts = $arts->paginate(3)->appends([    //combines the filters
        'user_id' => request('user_id'),
        'created_at' => request('created_at'),
        'sort' => request('sort'),
        ]);

        return view('art.search', compact('arts'));

 }
}
