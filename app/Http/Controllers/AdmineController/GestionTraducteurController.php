<?php

namespace App\Http\Controllers\AdmineController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PropositionDevis;
use App\User;
use Illuminate\Support\Facades\DB;


class GestionTraducteurController extends Controller
{


    public $wilaya_nom;

    public $commune_nom;

    public $wilaya_id;

    public $commune_id;

    public $code_postal;


   public function showTraductors()
   {
       $traducteurs = User::where('traducteur','traducteur')->get();
       return view('admin.gestionTraducteur',compact('traducteurs'));
   }

   public function moreInformationTraducteur($id)
   {
         $traducteur = User::findOrFail($id);

         $this->commune_nom=(DB::table("communes")->where("id",$traducteur['code_commune'])->pluck("nom"))[0];

         $this->wilaya_nom=(DB::table("wilayas")->where("id",$traducteur['code_wilaya'])->pluck("nom"))[0];

         $this->code_postal=(DB::table('communes')->where("id",$traducteur['code_commune'])->pluck("code_postal"))[0];

         $propositions=PropositionDevis::where('user_id',$traducteur['id'])->get();

         //dd($propositions);

         return view('admin.moreInformationTraducteur',compact('traducteur'))
                    ->with('wilaya_nom',$this->wilaya_nom)
                    ->with('commune_nom',$this->commune_nom)
                    ->with('code_postal',$this->code_postal)
                    ->with('propositions',$propositions);
   }


   public function updateTraducteur(Request $request,$id){


    $traducteur = User::findOrFail($id);

    $traducteur->username= $request->input('username');
    $traducteur->email=$request->input('email');
    $traducteur->nom =$request->input('nom');
    $traducteur->prenom = $request->input('prenom');
    $traducteur->adresse = $request->input('adresse');
    $traducteur->code_wilaya = $request->input('wilaya');
    $traducteur->code_commune = $request->input('commune');

    if($request->input('assermente')=="on"){
        $traducteur->assermente = 1;
    }else{
        $traducteur->assermente = 0;
    }

    if($request->input('bloque')=="on"){
        $traducteur->bloque=1;
    }else{
        $traducteur->bloque=0;
    }
    if($request->input('signale')=="on"){
        $traducteur->signale=1;
    }else{
        $traducteur->signale=0;
    }


    $traducteur->update();

    return redirect('/gestionTraducteur');
    }

        public function deleteTraducteur($id){

            $traducteur = User::findOrFail($id);

            $traducteur->delete();
            return redirect('/gestionTraducteur');
        }

        public function bloquerTraducteur($id){

            $traducteur = User::findOrFail($id);

            $traducteur->bloque=0;

            $traducteur->update();

            return redirect('/gestionTraducteur');
        }





}
