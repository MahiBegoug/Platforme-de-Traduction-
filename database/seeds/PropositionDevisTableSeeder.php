<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropositionDevisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $propositionDevis = array(
            array('id'=>'1','prix'=>'4000','demande_devis_id'=>'1','user_id'=>'11'),
            array('id'=>'2','prix'=>'10000','demande_devis_id'=>'1','user_id'=>'12'),
            array('id'=>'3','prix'=>'5000','demande_devis_id'=>'1','user_id'=>'13'),
            array('id'=>'4','prix'=>'160000','demande_devis_id'=>'2','user_id'=>'14'),
            array('id'=>'5','prix'=>'4800','demande_devis_id'=>'2','user_id'=>'15'),
            array('id'=>'6','prix'=>'10900','demande_devis_id'=>'2','user_id'=>'11'),
        );

        DB::table('proposition_devis')->insert($propositionDevis);
    }
}
