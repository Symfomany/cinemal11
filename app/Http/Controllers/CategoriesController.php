<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Page lister les films
     */
    public function index(){
    $categories = [
        ["title" => "Ma catégorie 1", "description" => "Ma description catégorie 1"],
        ["title" => "Ma catégorie 2", "description" => "Ma description catégorie 2"],
    ];

        return view('categories/index', [
            "mesCategories" => $categories
        ]);
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
