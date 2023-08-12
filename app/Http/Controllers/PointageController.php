<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pointage;
use App\Models\prof;


class PointageController extends Controller
{
    public function point(){
        $pointages = pointage::all();
        return view('pointage.pointage',compact('pointages'));
    }

    public function ajoutpoint(){

        return view('pointage.ajoute');
    }
    public function ajoutertraite(Request $request){

        $request->validate([
            'nom' => 'required',
            'module' => 'required',
            'heured' => 'required',
            'heuref' => 'required',
            'date' => 'required',
            'prof_id' => 'required',

        ]);
        $pointage= new pointage();
        $pointage->nom = $request->nom;
        $pointage->module = $request->module;
        $pointage->heured = $request->heured;
        $pointage->heuref = $request->heuref;
        $pointage->date = $request->date;
        $pointage->prof_id = $request->prof_id;
        $pointage->save();


       return redirect('/ajoute')->with('status','ajouté avec succés');
    }
    public function delete_point($id){
        $pointage = pointage::find($id);
        $pointage->delete();

        return redirect('/pointage')->with('status','suprimé');
    }
    public function pointprof(){
        return view('pointage.pointprof');
    }
    public function show($id) {
        // Récupérer les informations du professeur en fonction de l'ide
        $prof = prof::findOrFail($id);

        // Récupérer les données de pointage spécifiques à ce professeur
        $pointages = $prof->pointages;

        return view('pointage.pointage')->with(['prof' => $prof, 'pointages' => $pointages]);
    }

}
