<?php

namespace App\Http\Controllers\TraducteurControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\PropositionDevis;




class TraductionController extends Controller
{
    public function getTraductionInfo(){

        $propositions  = PropositionDevis::where('user_id',Auth::user()->id)->get();

        //dd( $propositions);
        return view('traducteur.coutTraduction',compact('propositions'));

    }

    public function setCout(Request $request){


         $proposition = PropositionDevis::where('id',$request->input('service'))
                                              ->first();

         $proposition->cout_traduction=(int)$request->input('cout');

         $fileName = $request->file->getClientOriginalName();
         $path = $request->file('file')->storeAs('Translated', $fileName);
         $proposition->file_traduction = $fileName;

         $proposition->update();

         return redirect('/coutTraduction');

         /*if($request->hasFile('file')){
             echo 'yes';
         }else {
             echo 'no no';
         }*/

         //dd($request);



    }

}
