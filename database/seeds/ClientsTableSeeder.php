<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = array(
            array('nom' =>'Benouadah','prenom'=>'merzak','adresse'=>'05 Rue des martyrs','code_wilaya'=>'15','code_commune'=>'15','phone'=>'021 56 25 70','fax'=>'021 56 30 50','email'=>'Benouadah@gmail.com','username'=>'Benouadah','password'=>Hash::make('0123456789')),
            array('nom' =>'Brahimi','prenom'=>'Leila','adresse'=>'50 Rue de la liberté','code_wilaya'=>'19','code_commune'=>'19','phone'=>'021 56 25 70','fax'=>'021 56 30 50','email'=>'Brahimi@gmail.com','username'=>'Brahimi','password'=>Hash::make('0123456789')),
            array('nom' =>'Aider','prenom'=>'Said','adresse'=>'50 Rue de la gare','code_wilaya'=>'9','code_commune'=>'9','phone'=>'021 56 25 70','fax'=>'021 56 30 50','email'=>'Aider@gmail.com','username'=>'Aider','password'=>Hash::make('0123456789')),
            array('nom' =>'Boumaaza','prenom'=>'Samir','adresse'=>'50 Rue des dunes','code_wilaya'=>'16','code_commune'=>'16','phone'=>'021 56 25 70','fax'=>'021 56 30 50','email'=>'Boumaaza@gmail.com','username'=>'Boumaaza','password'=>Hash::make('0123456789')),
            array('nom' =>'Bendaoud','prenom'=>'Fatiha','adresse'=>'50 Rue des oliviers','code_wilaya'=>'8','code_commune'=>'8','phone'=>'021 56 25 70','fax'=>'021 56 25 60','email'=>'Bendaoud@gmail.com','username'=>'Bendaoud','password'=>Hash::make('0123456789')),
        );
        DB::table('users')->insert($client);

    }
}
