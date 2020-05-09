<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class TraducteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $traducteurs = array(
            //array('nom' =>'Belhadj','prenom'=>'Said','adresse'=>'50 Rue des martyrs','code_wilaya'=>'31','code_commune'=>'31','phone'=>'031 56 25 70','fax'=>'031 56 30 50','traducteur'=>'traducteur','email'=>'Belhadj@gmail.com','username'=>'Belhadj','password'=>Hash::make('0123456789'),'assermente'=>1,'langues'=>'Arabe-Français-Anglais'),
            array('nom' =>'Helali','prenom'=>'Karim','adresse'=>'3500 Rue de la liberté','code_wilaya'=>'35','code_commune'=>'35','phone'=>'035 56 25 70','fax'=>'035 56 30 50','traducteur'=>'traducteur','email'=>'Helali@gmail.com','username'=>'Helali','password'=>Hash::make('0123456789'),'langues'=>'Arabe-Turque'),
            //array('nom' =>'Bouroubi','prenom'=>'Taous','adresse'=>'68 rue de la gare','code_wilaya'=>'16','code_commune'=>'16','phone'=>'023 56 25 70','fax'=>'023 56 25 70','traducteur'=>'traducteur','email'=>'Bouroubi@gmail.com','username'=>'Bouroubi','password'=>Hash::make('0123456789'),'assermente'=>1,'langues'=>'Arabe-Anglais-Espagnol'),
            array('nom' =>'Hazi','prenom'=>'Farouk','adresse'=>'10 Rue des oliviers','code_wilaya'=>'15','code_commune'=>'15','phone'=>'025 56 25 70','fax'=>'025 56 30 50','traducteur'=>'traducteur','email'=>'Hazi@gmail.com','username'=>'Hazi','password'=>Hash::make('0123456789'),'langues'=>'Arabe-Chinois-Anglais'),
            //array('nom' =>'Sebaa','prenom'=>'Djamila','adresse'=>'30 Rue des dunes','code_wilaya'=>'17','code_commune'=>'17','phone'=>'026 56 25 70','fax'=>'026 56 30 50','traducteur'=>'traducteur','email'=>'Sebaa@gmail.com','username'=>'Sebaa','password'=>Hash::make('0123456789'),'assermente'=>1,'langues'=>'Arabe-Français'),
        );
        DB::table('users')->insert($traducteurs);

    }
}
