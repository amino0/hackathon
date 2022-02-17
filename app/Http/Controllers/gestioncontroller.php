<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class gestioncontroller extends Controller
{

    public function accueil()
    {
        if (Auth::user()->email == "sougal.ahmed@ansie.gouv.dj" or Auth::user()->email == "medamin893@gmail.com" or Auth::user()->email == "ahmed.ibrahim@ansie.dj") {
            $participant = DB::select('select * from groupes');



            $popo = DB::select('select count(id) from groupes');
            $count =  DB::select('select count(id) from role_id where role_id = 1');
            $attente =  DB::select('select count(id) from groupes where status is null');
            $traiter =  DB::select('select count(id) from groupes where status is not null');

            return view('bool.accueil', compact('patients', 'count', 'attente', 'traiter', 'popo'));
        }
    }
}
