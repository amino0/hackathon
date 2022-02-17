<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function register(Request $request)
    {

        $nom = $request->input('CAT_Custom_1');

        if (isset($nom)) {
            $nom = $request->input('CAT_Custom_1');
            $email = $request->input('CAT_Custom_2');
            $tel = $request->input('CAT_Custom_3');
            $nb = $request->input('CAT_Custom_4');

            $file = $request->file('CAT_Custom_6');
            //  $fileName = time() . '_' . $request->file;
            $filename = "CV" . time() . '.' . $file->getClientOriginalExtension();

            $path = $file->storeAs('public', $filename);
            //  $pathh = $request->file('file')->getna();
            $res = str_replace("public/", "", $path);



            // groupe 


            $nom_PAT_1 = $request->input('PAT_1_nom');
            $mail_PAT_1 = $request->input('PAT_1_mail');
            $tel_PAT_1 = $request->input('PAT_1_num');

            $nom_PAT_2 = $request->input('PAT_2_nom');
            $mail_PAT_2 = $request->input('PAT_2_mail');
            $tel_PAT_2 = $request->input('PAT_2_num');



            DB::table('groupes')->insert([
                'nom' => $nom,
                'mail' => $email,
                'tel' => $tel,
                'nb_groupe' => $nb,
                'cv' => $res
            ]);
            $id  = DB::getPdo()->lastInsertId();
            // dd($id);
            /*   foreach ($last3 as $row) {

                $id = $row->id;
            } */
            //dd($id);



            $group_PAT_1 = $id;


            DB::table('cooequipiers')->insert([
                'nom' => $nom_PAT_1,
                'mail' => $mail_PAT_1,
                'tel' => $tel_PAT_1,
                'groupe_id' => $group_PAT_1
            ]);



            $group_PAT_2 = $id;


            DB::table('cooequipiers')->insert([
                'nom' => $nom_PAT_2,
                'mail' => $mail_PAT_2,
                'tel' => $tel_PAT_2,
                'groupe_id' => $group_PAT_2
            ]);

            return redirect()->route('eventfr');
        } else {

            return redirect('registration')
                ->withErrors([
                    'email' => 'Vous êtes déjà inscrit avec cette adresse email'
                ]);
        }
    }

    public function home()
    {
        if (Auth::user()->email == "sougal.ahmed@ansie.gouv.dj" or Auth::user()->email == "medamin893@gmail.com" or Auth::user()->email == "ahmed.ibrahim@ansie.dj") {
            $participant = DB::select('select * from groupes');



            $popo = DB::select('select count(id) from groupes');
            $count =  DB::select('select count(id) from users where role_id = 1');
            $attente =  DB::select('select count(id) from groupes where status is null');
            $traiter =  DB::select('select count(id) from groupes where status is not null');

            return view('admin.home', compact('participant', 'count', 'attente', 'traiter', 'popo'));
        }
        Session::flush();

        return redirect()->route('login')->withErrors([
            'message' => 'Desolé ! Vous n\'etes pas autorisé à accèder à cette page'
        ]);
    }
    public function masquer($id)
    {
        $affected = DB::table('invites')
            ->where('id', $id)
            ->update(['masque' => '1']);
        return redirect('home');
    }

    public function registrer()
    {
        return view('welcome');
    }

    public function cid()
    {
        $path = storage_path("Cadre de l'Interopérabilité de Djibouti.pdf");

        return response()->file($path);
    }
}
