<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    /**
     * Page lister les films
     */
    public function index(){
        $movies = Movies::all();


        return view('movie/index', [
            'movies' => $movies
        ]);
    }

    /**
     * Page créer un film
     */
    public function create(){
        return view('movie/create');
    }

    /**
     * Page editer un film
     */
    public function update(){
        return view('movie/update');
    }

    /**
     * Page / ACtion de suppresions de films
     */
    public function remove($id){
        $movie = Movies::find($id);
        $movie->delete();

        return redirect()->back();

    }



}
