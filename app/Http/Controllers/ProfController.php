<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prof;

class ProfController extends Controller
{
    public function list()
    {
        $profs = prof::all();
        return view('prof.prof',compact('profs'));
    }
    public function ajouter()
    {

        return view('prof.ajouter');
    }
    public function ajouter_traitement(Request $request)
    {
       $request->validate([
          'name' => 'required',
          'module' => 'required',
          'email' => 'required',
          'telephone' => 'required',
          'adresse' => 'required',
       ]);
       $prof = new prof();
       $prof->name = $request->name;
       $prof->module= $request->module;
       $prof->email = $request->email;
       $prof->telephone = $request->telephone;
       $prof->adresse = $request->adresse;
       $prof->save();

       return redirect('/ajouter')->with('status','ajouté avec succés');
    }
    public function delete_prof($id){
      $prof = prof::find($id);
      $prof->delete();

      return redirect('/prof')->with('status','suprimé');
    }
    public function paiementprof()
    {
        $profs = Prof::with('paiement')->get();
        return view('paiement.paiementprof', compact('profs'));
    }
}
