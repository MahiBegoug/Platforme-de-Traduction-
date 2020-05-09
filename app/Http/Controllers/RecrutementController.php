<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecrutementController extends Controller
{
    public function store(Request $request)
    {

        /*foreach ($request->refs as $ref){
            #####endregion
            var_dump($ref->getClientOriginalName());
        }*/

        dd($request->langues);
    }
}
