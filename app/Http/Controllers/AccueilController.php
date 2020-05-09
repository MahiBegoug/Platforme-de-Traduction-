<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AccueilController extends Controller
{



    public function showRegister(){
        $wilayas=DB::table('wilayas')
        ->groupBy('nom')
        ->get();
       return view('site.accueil',compact('wilayas'));
    }

    public function getCommunesList(Request $request)
     {
         $communes = DB::table("communes")
                 ->where("wilaya_id",$request->wilaya_id)
                 ->pluck("nom","id");
         return response()->json($communes);
    }

    public function check(Request $request){


         $etat =Auth::guest();
       return view('site.accueil',compact('etat'));
    }
}
