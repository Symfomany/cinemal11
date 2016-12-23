<?php

namespace App;




class MoviesObserver
{

    public function created(Movies $movie)
    {
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(Movies $movie)
    {
        //exit(dump($movie));

    }


}
