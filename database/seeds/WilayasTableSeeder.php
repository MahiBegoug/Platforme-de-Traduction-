<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wilayas = array(
            array('code' => '1','nom' => 'Adrar'),
            array('code' => '2','nom' => 'Chlef'),
            array('code' => '3','nom' => 'Laghouat'),
            array('code' => '4','nom' => 'Oum El Bouaghi'),
            array('code' => '5','nom' => 'Batna'),
            array('code' => '6','nom' => 'Béjaïa'),
            array('code' => '7','nom' => 'Biskra'),
            array('code' => '8','nom' => 'Béchar'),
            array('code' => '9','nom' => 'Blida'),
            array('code' => '10','nom' => 'Bouira'),
            array('code' => '11','nom' => 'Tamanrasset'),
            array('code' => '12','nom' => 'Tébessa'),
            array('code' => '13','nom' => 'Tlemcen'),
            array('code' => '14','nom' => 'Tiaret'),
            array('code' => '15','nom' => 'Tizi Ouzou'),
            array('code' => '16','nom' => 'Alger'),
            array('code' => '17','nom' => 'Djelfa'),
            array('code' => '18','nom' => 'Jijel'),
            array('code' => '19','nom' => 'Sétif'),
            array('code' => '20','nom' => 'Saïda'),
            array('code' => '21','nom' => 'Skikda'),
            array('code' => '22','nom' => 'Sidi Bel Abbès'),
            array('code' => '23','nom' => 'Annaba'),
            array('code' => '24','nom' => 'Guelma'),
            array('code' => '25','nom' => 'Constantine'),
            array('code' => '26','nom' => 'Médéa'),
            array('code' => '27','nom' => 'Mostaganem'),
            array('code' => '28','nom' => 'M\'Sila'),
            array('code' => '29','nom' => 'Mascara'),
            array('code' => '30','nom' => 'Ouargla'),
            array('code' => '31','nom' => 'Oran'),
            array('code' => '32','nom' => 'El Bayadh'),
            array('code' => '33','nom' => 'Illizi'),
            array('code' => '34','nom' => 'Bordj Bou Arreridj'),
            array('code' => '35','nom' => 'Boumerdès'),
            array('code' => '36','nom' => 'El Tarf'),
            array('code' => '37','nom' => 'Tindouf'),
            array('code' => '38','nom' => 'Tissemsilt'),
            array('code' => '39','nom' => 'El Oued'),
            array('code' => '40','nom' => 'Khenchela'),
            array('code' => '41','nom' => 'Souk Ahras'),
            array('code' => '42','nom' => 'Tipaza'),
            array('code' => '43','nom' => 'Mila'),
            array('code' => '44','nom' => 'Aïn Defla'),
            array('code' => '45','nom' => 'Naâma'),
            array('code' => '46','nom' => 'Aïn Témouchent'),
            array('code' => '47','nom' => 'Ghardaïa'),
            array('code' => '48','nom' => 'Relizane')
          );

          DB::table('wilayas')->insert($wilayas);
    }
}
