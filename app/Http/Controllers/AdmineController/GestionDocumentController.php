<?php

namespace App\Http\Controllers\AdmineController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PropositionDevis;

class GestionDocumentController extends Controller
{
    public function showDocuments(){
        $propositions = PropositionDevis::where('file_url','<>',null)
        ->orwhere('file_traduction','<>',null)
        ->get();
            //dd($propositions);

        return view('admin.gestionDocument',compact('propositions'));
    }

    public function getPropoditionDevis(){

        $propositions = PropositionDevis::where('file_url','<>',null)
                                        ->orwhere('file_traduction','<>',null)
                                        ->get();
        dd($propositions);
                                        //return view('admin.gestionDocument',compact('propositions'));
    }

    public function getDownload($demande_devis_id,$user_id)
    {
        $propositiondevis = PropositionDevis::where('demande_devis_id',$demande_devis_id)
        ->where('user_id',$user_id)
        ->first();

        $file= storage_path('app/Documents/'.$propositiondevis->file_url);

        $headers = array('Content-Type: application/pdf',);
        //dd(storage_path('app//Documents/'.$propositiondevis->file_url));
        //dd($propositiondevis->file_url) ;
        return response()->download($file);
    }

    public function deleteDocuments($id)
    {
        $propositiondevis = PropositionDevis::where('id',$id)->first();
        $propositiondevis->delete();
        return  redirect('/gestionDocument');
    }
}
