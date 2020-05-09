<?php

namespace App\Http\Controllers\ClientControllers;

use App\DemandeDevis;
use App\DemandeDevisUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PropositionDevis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;

class DemandeDevisController extends Controller
{


    public function getListTraducteur(){

        $users = User::where('traducteur','traducteur')->get();

        return view('site.accueil')->with('users',$users);
    }

    public function getListTraducteurAssermente(Request $request){

        $users = DB::table("users")
                            ->where("assermente",$request->assermente)
                            ->pluck("email","id");

                            //dd($users);
        return response()->json($users);

    }

    public function getListTraducteurNonAssermente(Request $request){

        $users = DB::table("users")
                        ->where("assermente",$request->assermente)
                        ->where("traducteur","traducteur")
                        ->pluck("email","id");

        return response()->json($users);

    }

    public function storeToDemandeDevis(Request $request){

        /**
         * find the user who will be send the demandeDevis
         */

       $user = Auth::user();

       /**
        * create a new DemandeDevis
        */

        $demandedevis = new DemandeDevis;

        $demandedevis->type_traduction = $request->input('typetraduction');
        $demandedevis->langue_source = $request->input('languesource');
        $demandedevis->langue_destination=$request->input('languedestination');
        $demandedevis->description=$request->input('description');
        $demandedevis->user_id = $user->id;
        $demandedevis->save();

        /**
         * create a destination users
         */


        //$user->demandedevis()->attach($demandedevis);

        $traducteurs = $request->input('traducteurs');
        //dd($traducteurs);
        foreach ($traducteurs as $traducteur){
            /**
             * create a new propositions
             */
            $propositiondevis = new PropositionDevis ;
            $propositiondevis->demande_devis_id = $demandedevis->id;
            $propositiondevis->user_id =$traducteur;
            $propositiondevis->save();
            //$traducteurs . '    <br> <br>' ;
        }
        //dd($traducteurs);
        return redirect('/demandeDevisClient');

    }

    public function showDemandeDevis(){

        $demandedevis = DemandeDevis::where('user_id',Auth::user()->id)->get();

        return view('client.demandeDevis',compact('demandedevis'));

    }

    public function deleteDemande($demande_id,$user_id){

        $demandeClient = PropositionDevis::where('demande_devis_id',$demande_id)
                                           ->where('user_id',$user_id)
                                           ->first();
        $demandeClient->delete();

        return redirect('/demandeDevis');
    }


}
