<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;


class Movies extends Model
{

    /**
     * Attribut qui précise le nom de la table référente
     * à la base de données
     */
    protected $table = "movies";


    /**
     * Calcul le nb de films actifs
     * SELECT COUNT(id)
     * FROM movies
     * WHERE visible = 1
     */
    public static function getNbActiveMovies(){

        return DB::table('movies')
            ->where('visible', 1)
            ->count();

    }



}
