<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{

    /**
     * Attribut qui précise le nom de la table référente
     * à la base de données
     */
    protected $table = "movies";

}
