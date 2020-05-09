<?php

namespace App\Http\Controllers\AdmineController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use App\PropositionDevis;
use App\DemandeDevis;

class GestionClientController extends Controller
{

    public $wilaya_nom;

    public $commune_nom;

    public $wilaya_id;

    public $commune_id;

    public $code_postal;



    public function showClients()
   {
    $clients = User::where('traducteur',null)->get();

    return view('admin.gestionClient',compact('clients'));
   }

   public function moreInformationClient($id)
   {
        $client = User::findOrFail($id);

         $this->commune_nom=(DB::table("communes")->where("id",$client['code_commune'])->pluck("nom"))[0];

         $this->wilaya_nom=(DB::table("wilayas")->where("id",$client['code_wilaya'])->pluck("nom"))[0];

         $this->code_postal=(DB::table('communes')->where("id",$client['code_commune'])->pluck("code_postal"))[0];

         $demandes=DemandeDevis::where('user_id',$client['id'])->get();

         //dd($propositions);

         return view('admin.moreInformationClient',compact('client'))
                    ->with('wilaya_nom',$this->wilaya_nom)
                    ->with('commune_nom',$this->commune_nom)
                    ->with('code_postal',$this->code_postal)
                    ->with('demandes',$demandes);
   }

   public function updateTraducteur(Request $request,$id){

    $client = User::findOrFail($id);

    $client->username= $request->input('username');
    $client->email=$request->input('email');
    $client->nom =$request->input('nom');
    $client->prenom = $request->input('prenom');
    $client->adresse = $request->input('adresse');
    $client->code_wilaya = $request->input('wilaya');
    $client->code_commune = $request->input('commune');

    $client->update();

    return redirect('/gestionClient');
    }

    public function deleteClient($id){

        $client = User::findOrFail($id);
        $client->delete();
        return redirect('/gestionClient');
    }

    public function bloquerClient($id){
        $client = User::findOrFail($id);
        $client->bloque=0;
        $client->update();

        return redirect('/gestionClient');
    }







}
