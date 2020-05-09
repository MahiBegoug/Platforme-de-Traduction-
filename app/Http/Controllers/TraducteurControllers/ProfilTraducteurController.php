<?php

namespace App\Http\Controllers\TraducteurControllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProfilTraducteurController extends Controller
{

    private $wilaya_id;
    private $commune_id;
    private $commune_nom;
    private $wilaya_nom;



    public function getCommuneNom($commune_id){
        return  (DB::table("communes")->where("id",$commune_id)->pluck("nom"))[0];
    }

    public function getWilayaNom($wilaya_id){
       return (DB::table("wilayas")->where("id",$wilaya_id)->pluck("nom"))[0];
    }

    public function getSpecifiqueValue($user){
        $this->wilaya_id = $user->code_wilaya;

        $this->commune_id = $user->code_commune;

        $this->commune_nom = $this->getCommuneNom($this->commune_id);

        $this->wilaya_nom =  $this->getWilayaNom($this->wilaya_id);
    }



    public function index(){
        $user = Auth::user();

       $this->getSpecifiqueValue($user);

        return view('traducteur.profileTraducteur',compact('user'))
                    ->with('wilaya_nom',$this->wilaya_nom)
                    ->with('commune_nom',$this->commune_nom)
                    ->with('wilaya_id',$this->wilaya_id)
                    ->with('commune_id',$this->commune_id);
    }

    public function getCommunesList(Request $request)
    {
        $communes = DB::table("communes")
                ->where("wilaya_id",$request->wilaya_id)
                ->pluck("nom","id");
        return response()->json($communes);
   }

    public function create(){

    }

    public function store(){

    }

    public function show(){

    }

    public function edit(){

    }

    public function updateProfil(Request $request){

//$userId=Auth::user()->id;

       // $user = User::find($userId);

        Auth::user()->nom = $request->input('nom');
        Auth::user()->prenom =$request->input('prenom');
        Auth::user()->adresse =$request->input('adresse');
        Auth::user()->code_wilaya =$request->input('wilaya');
        Auth::user()->code_commune =$request->input('commune');
        Auth::user()->phone = $request->input('phone');
        Auth::user()->fax =$request->input('fax');
        Auth::user()->email = $request->input('email');
        Auth::user()->username = $request->input('username');;
        Auth::user()->password =  $request->input('password');


        Auth::user()->update();

        return redirect('/traducteur');
    }

    public function destroy(){

    }

}
