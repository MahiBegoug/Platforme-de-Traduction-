<?php

namespace App\Http\Controllers\ClientControllers;

use App\DemandeDevis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PropositionDevis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;


class TraductionClientController extends Controller
{
   /*public function  getTraduction(){
       $user = auth()->user();

       $demandeDevis = DemandeDevis::where('user_id',$user->id)->get();

       //dd($demandeDevis);
       return view('client.coutTraduction',compact('demandeDevis'));
    }*/

    public function getDownloadTranslated($demande_devis_id,$user_id){


        $propositiondevis = PropositionDevis::where('demande_devis_id',$demande_devis_id)
                                            ->where('user_id',$user_id)
                                            ->first();

    $file= storage_path('app/Translated/'.'5549' /*$propositiondevis->file_traduction)*/);
       dd($file);
        //$headers = array('Content-Type: application/pdf',);
        //dd(storage_path('app//Documents/'.$propositiondevis->file_url));
        //dd($propositiondevis->file_url) ;
        return response()->download($file);
    }

    public function showCoutTraduction($id)
    {
        $propositions = PropositionDevis::where('demande_devis_id',$id)->get();
       //$user =User::where('id',9)->get()[0]['phone'];
       //dd($user);
        return view('client.coutTraduction',compact('propositions'));
    }

    public function signalerClient($id)
    {

        $client = User::findOrFail($id);

        $client->signale=1;

        $client->update();

        return redirect('/home');
    }
}
