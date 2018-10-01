<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Art;

class ArtsController extends Controller
{
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
        $this->validate($request,[
            'picture' => 'required',
             'name' => 'required'
        ]);
       //create art
       $art = Art::find($id);
       $art->name = $request->input('name');
       $art->picture = $request->input('picture');
       $art->save();

       return redirect('/arts')->with('succes', 'Post updated');
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
        //
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
