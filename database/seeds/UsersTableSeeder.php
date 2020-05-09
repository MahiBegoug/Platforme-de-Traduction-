<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user=array(
           'nom'=>'sgs',
           'prenom'=>'ggsgf',
           'adresse'=>'ggsgs',
           'code_wilaya'=>'1',
           'code_commune'=>'1',
           'phone'=>'0561335319',
           'fax'=>'043520582',
           'email'=>'gm_begoug@esi.dz',
           'username'=>'mahi',
           'password'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm');

           DB::table('users')->insert($user);
    }
}
