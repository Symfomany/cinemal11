<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;
use Mail;
use Auth;

class PagesController extends Controller
{
    /**
     */
    public function welcome(){

        $user = Auth::user();


        /**
         * Evois d'EMail
         */
//        Mail::send('emails/welcome', ['user' => Auth::user()], function ($m) use ($user) {
//            $m->from('juju@app.com', 'Juju');
//
//            $m->to($user->email, $user->name)
//                ->subject('Welcome!');
//        });

        $nbMovies = Movies::getNbActiveMovies();
        //  appeler les autres requetes
        return view('pages/welcome', [
            "nbMovies" => $nbMovies
        ]);
    }

}
