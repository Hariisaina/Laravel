<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paiement;
use App\Models\prof;

class PaiementController extends Controller
{
    public function index(){
        return view('paiement.paiement');
    }

    public function ajout(Request $request){

        $request->validate([

            'name' => 'required',
            'module' => 'required',
            'duree' => 'required',
            'prof_id' => 'required',

        ]);

        $paiement = new paiement();
        $paiement->name = $request->name;
        $paiement->module = $request->module;
        $paiement->duree = $request->duree;
        $paiement->prof_id = $request->prof_id;
        $paiement->save();


        return redirect('/paiement')->with('status','payé');


    }
    public function paiementprof(){
        return view('paiement.paiementprof');
    }


    public function show($id)
    {
        $prof = prof::findOrFail($id);
        // Supposons que le modèle Paiement ait une relation avec le modèle Prof
        $paiements = $prof->paiement; // Assurez-vous que la relation est correctement définie

        return view('paiement.paiement')->with(['prof' => $prof, 'paiements' => $paiements]);

    }
    public function facture(Request $request) {
        $paiements = paiement::all();
        return view('paiement.facture')->with('paiements', $paiements)->with('montantCalcule', session('montantCalcule'));

    }






}
