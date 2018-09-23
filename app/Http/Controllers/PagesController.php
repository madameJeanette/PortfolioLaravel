<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welkom op de portfolio website van Esther!';
    //    return view('pages.index', compact('title'));
    return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Over mij';
        return view('pages.about')->with('title', $title);;
    }

    public function services(){
        $data = array(
            'title' => 'Dit is mijn services pagina',
            'services' => ['Animaties', 'Digitale illustraties', 'Traditionele illustraties']
        );
       
        return view('pages.services')->with($data);
    }
}
