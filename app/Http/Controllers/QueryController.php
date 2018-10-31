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
         case "created_asc":
          $arts = $arts->orderBy('created_at', 'ASC');//order by upload time
          break;
          case "created_desc":
          $arts = $arts->orderBy('created_at', 'DESC');//order by upload time
          break;
          case "name_asc":
          $arts = $arts->orderBy('name', 'ASC');//order by name
          break;
          case "name_desc":
          $arts = $arts->orderBy('name', 'DESC');//order by name
          break;
       }
             
            
        $arts = $arts->paginate(5);

        return view('art.search', compact('arts'));

 }
}
