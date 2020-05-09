<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemandeDevisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $demandeDevis = array(
            array('id'=>'1','type_traduction'=>'site web','langue_source'=>'Arabe','langue_destination'=>'Turque','description'=>'un site de taille minimale qui t égale à 32 Mg','user_id'=>'3'),
            array('id'=>'2','type_traduction'=>'politique','langue_source'=>'Français','langue_destination'=>'Angalis','description'=>'le document contient 2000 mots ','user_id'=>'4'),
        );

        DB::table('demande_devis')->insert($demandeDevis);
    }
}
