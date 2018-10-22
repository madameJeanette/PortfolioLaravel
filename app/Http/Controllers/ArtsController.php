<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Art;


class ArtsController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show page
        $arts = Art::latest()->paginate(5);
        return view('art.index')->with('arts', $arts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('art.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'picture' => 'required',
             'name' => 'required'
        ]);
       //create art
       $art = new Art;
       $art->name = $request->input('name');
       $art->picture = $request->input('picture');
       $art->user_id = auth()->user()->id;
       $art->save();


       return redirect('/arts')->with('succes', 'Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $art = Art::find($id);
       return view('art.show')->with('art',$art);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

        
       $art = Art::find($id);
       // check for correct user
       if(auth()->user()->id !==$art->user_id){
          return redirect('/arts')->with('error','Unauthorized page');
       }
       return view('art.edit')->with('art',$art);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
             'picture' => 'required',
             'name' => 'required'
        ]);
            
           //update art
           $art = Art::find($id);
           $art->name = $request->input('name');
           $art->picture = $request->input('picture');
           $art->save();
    
           return redirect('/arts')->with('succes', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = Art::find($id);
        
        //check for correct user
        if(auth()->user()->id !==$art->user_id){
            return redirect('/arts')->with('error','Unauthorized page');
         }

        $art->delete();

        return redirect('/arts')->with('succes', 'Post deleted');
    }
} 
