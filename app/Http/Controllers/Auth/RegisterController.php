<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     //protected $redirectTo = '/home';

     protected function redirectTo()
     {
         if(Auth::user()->traducteur == 'traducteur'){

             return 'traducteur';

         }else{

             return 'client';
         }
     }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function getCommunesList(Request $request)
     {
         $communes = DB::table("communes")
                 ->where("wilaya_id",$request->wilaya_id)
                 ->pluck("nom","id");
         return response()->json($communes);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required','string','max:255'],
            'adresse' => ['required','string','max:255'],
            'wilaya' => ['required','string','max:2'],
            'commune' => ['required','string','max:2'],
            'phone' => ['required','string','max:10','min:10'],
            'fax' => ['required','string','max:9','min:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required','string','max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'adresse' => $data['adresse'],
            'code_wilaya' =>$data['wilaya'],
            'code_commune' =>$data['commune'],
            'phone' => $data['phone'],
            'fax' => $data['fax'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }



}
