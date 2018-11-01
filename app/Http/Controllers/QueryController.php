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

       

       switch($request->input('filterOptions')){
          case "taart":                            //filer on pie
          $arts = Art::where('picture', 'like', '%' . $request->input('filterOptions') . '%')->orWhere('name', 'like', '%' . $request->input('filterOptions') . '%')->get();
          break;
          case "panda":                           //filter on panda
          $arts = Art::where('picture', 'like', '%' . $request->input('filterOptions') . '%')->orWhere('name', 'like', '%' . $request->input('filterOptions') . '%')->get();
          break;
         
          
       }

           
        return view('art.search', compact('arts'));

 }
}
