<?php

namespace App\Http\Controllers\ClientControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\PropositionDevis;
use App\DemandeDevis;


class PropositionClientController extends Controller
{
    public function showMoreInformationDevis(){
        $demandedevis = DemandeDevis::where('user_id',Auth::user()->id)->get();

        return view('client.notification',compact('demandedevis'));
    }

    public function showdetails($id){

        $propositions = PropositionDevis::where('demande_devis_id',$id)->get();
       //$user =User::where('id',9)->get()[0]['phone'];
       //dd($user);
        return view('client.details',compact('propositions'));
    }


    public function addFileToTranslate(Request $request){

      if ($request->hasFile('file')){

    //dd(Storage::size('photos/1579641456.pdf'));
     $user_id_receiver = $request->serviceReceiver;
     $demande_devis_id = $request->serviceDemande;
     //dd($demande_devis_id);
     $proposition = PropositionDevis::where('user_id',$user_id_receiver)
                                      ->where('demande_devis_id',$demande_devis_id)
                                      ->first();

     //dd($proposition);

     $fileName = $request->file->getClientOriginalName();
     $path = $request->file('file')->storeAs('Documents', $fileName);
     $proposition->file_url = $fileName;

     $proposition->update();

      }else{
          echo 'wrrong' ;
      }

      return redirect('/notificationClient');

    }

    public function getDownloadTranslated($demande_devis_id,$user_id)
    {
        $propositiondevis = PropositionDevis::where('demande_devis_id',$demande_devis_id)
                                            ->where('user_id',$user_id)
                                            ->first();

        $file= storage_path('app/Translated/'.$propositiondevis->file_traduction);
       //dd($file);
        //$headers = array('Content-Type: application/pdf',);
        //dd(storage_path('app//Documents/'.$propositiondevis->file_url));
        //dd($propositiondevis->file_url) ;
        return response()->download($file);
    }



}
