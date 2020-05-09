<?php

namespace App\Http\Controllers\TraducteurControllers;

use App\DemandeDevis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PropositionDevis;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Response;

class DemandeDevisTraducteurController extends Controller
{


    public function showInformationDevis(){

        $propositiondevis = PropositionDevis::where('user_id',Auth::user()->id)->get();
       // $demandedevis = DemandeDevis::where('id',$propositiondevis->id)->get();
        //dd($propositiondevis);
        /*foreach($propositiondevis as $propositiondevi ){
            //echo $propositiondevi->demande_devis_id
           echo $demandedevis = DemandeDevis::where('id',$propositiondevi->demande_devis_id)->get()[0]['type_traduction']  . '<br> <br>';;

        }*/
       return view('traducteur.notificationTraducteur',compact('propositiondevis'));
    }

    public function showInformationtoPropose(){
        $propositiondevis = PropositionDevis::where('user_id',Auth::user()->id)->get();
        return view('traducteur.propositionsDevis',compact('propositiondevis'));
    }

    public function proposeDevis(Request $request){
        /*$validatedData = $request->validate([
            'prix' => 'required|numeric',
        ]);*/
        $propositiondevis = PropositionDevis::where('demande_devis_id',$request->input('service'))
                                              ->where('user_id',Auth::user()->id)
                                              ->first();
        $propositiondevis->prix=(int)$request->input('prix');
        $propositiondevis->update();
        //dd($propositiondevis);
        return redirect('/propositionDevis');
        //dd($propositiondevis);
    }

    public function getDownload($demande_devis_id,$user_id){

        $propositiondevis = PropositionDevis::where('demande_devis_id',$demande_devis_id)
                                            ->where('user_id',$user_id)
                                            ->first();

        $file= storage_path('app/Documents/'.$propositiondevis->file_url);

        //dd(storage_path('app//Documents/'.$propositiondevis->file_url));
        //dd($propositiondevis->file_url) ;
        return response()->download($file);
    }

    public function getDownloadFileTranslater($demande_devis_id,$user_id)
    {
        $proposition = PropositionDevis::where('demande_devis_id',$demande_devis_id)
                                        ->where('user_id',$user_id)
                                        ->first();
        $file = storage_path('app/Translated'.$proposition->file_traduction);
        return response()->download($file);

    }


}
