<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{

    /**
     * Page lister les films
     */
    public function index(){
        return view('movie/index');
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
    public function remove(){
        return view('movie/remove');
    }



}
