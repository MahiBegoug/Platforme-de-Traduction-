<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemandeDevisController extends Controller
{
    public function index(){

        $wilayas=DB::table('wilayas')
            ->groupBy('nom')
            ->get();
        return view('site.recrutement',compact('wilayas'));

    }

     public function getCommunesList(Request $request)
     {

         $communes = DB::table("communes")
                 ->where("wilaya_id",$request->wilaya_id)
                 ->pluck("nom","id");
         return response()->json($communes);


    }

}

