<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;
use Validator;
use Event;
use Session;

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
     * Fonction de like des films, enregistré en session
     * Session : mécanisme de stockage temporelle
     * BDD: mécanisme de stockage atemporelle.
     *
     * @param Request $request
     */
    public function like($id, $action)
    {
        $movie = Movies::find($id);
        $likes = session('likes', []);

        // si l'action est "like"
        if ($action == 'like') {
            // J'ajoute mon movie dans le tableaux des likes en session
            $likes[$id] = $movie->id;
            $message = "Le film {$movie->title} a bien été liké";
        } else {
            // je supprime le like dans le tableaux des likes
            // unset() supprimer un element dans un tableau en PHP
            unset($likes[$id]);
            $message = "Le film {$movie->title} a bien été disliké";
        }

        //j'enregistre en session mon nouveau tableaux des likes
        Session::put('likes', $likes);

        // une redirection avec message flash
        return redirect()
            ->route('movie.index')
            ->with('success', $message);
    }


    /**
     * Page créer un film
     * Controlleur qui capture la requete
     * pour controller les données entrantes (POST)
     */
    public function create(Request $request){

        /**
         * Données du formulaire
         */

        // Validator est une classe
        //  qui me sert a valider les formulaire
        /**
         * $request->all(): êrmetd e récupérer toites les données de la requete dans un tableau
         */

        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'title' => 'required|min:5|unique:movies',
                'synopsis' => 'required|min:7|max:300',
                'description' => 'required|min:10|max:600',
                'image'        => 'image|dimensions:min_width=100,min_height=200,max_width:3000|max:4000',

            ], [
                'required' => 'Votre champs est obligatoire',
                'synopsis.required' => 'Votre synopsis est obligatoire'
            ]);

            if ($validator->fails()) {
                return redirect('movie/create')
                    ->withErrors($validator)
                    ->withInput();
            }else{

                $dateoutput =
                    \DateTime::createFromFormat('d/m/Y', $request->date_release);

                $movie = new Movies();
                $movie->title = $request->title;
                $movie->synopsis = $request->synopsis;
                $movie->description = $request->description;
                $movie->date_release = $dateoutput->format("Y-m-d");
                $movie->distributeur = $request->distributeur;
                $movie->budget = $request->budget;
                $movie->duree = $request->duree;
                $movie->annee = $request->annee;

                $filename = '';

                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $filename = $file->getClientOriginalName(); // Récupère le nom original du fichier
                    $destinationPath = public_path().'/uploads/'; // Indique où stocker le fichier

                    $file->move($destinationPath, $filename); // Déplace le fichier
                }

                $movie->image = $filename;
                $movie->save();

                return redirect('movie/index');
            }


        }


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

    /**
     * @param $id
     */
    public function voir($id){
        $movie = Movies::find($id);

        return view('movie/voir', [
            'movie' => $movie
        ]);
    }

    /**
     * @param $id
     */
    public function visible(Movies $id, Request $request){
//        dump($id);exit;
        $id->visible = !$id->visible;
        $id->save();


        $request->session()->
        flash('success', "Votre film ".$id->title." a bien été modifié");

        return redirect()->back();
    }



}
