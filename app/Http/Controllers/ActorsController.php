<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsController extends Controller
{
    /**
     * Page lister les films
     */
    public function index(){
        return view('categories/index');
    }

    /**
     * Page créer un film
     */
    public function create(){
        return view('categories/create');
    }

    /**
     * Page editer un film
     */
    public function update(){
        return view('categories/update');
    }

    /**
     * Page / ACtion de suppresions de films
     */
    public function remove(){
        return view('categories/remove');
    }



}
