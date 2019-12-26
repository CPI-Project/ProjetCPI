<?php

use Illuminate\Database\Seeder;

class EscalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //     DB::table('Escales')->insert([
        //     'date_escale'=>"2019-11-30 08:00:00",
        //    'heure_depart_escale'=>"09:30:00",
        //     'heure_arriver_escale'=>"09:00:00",
        //     'duree_escale'=>"01:00:00",
        //     'id_vol'=>'3',
        //     'code_aeroport_depart'=>"ALG",
        //     'code_aeroport_arriver'=>"CDG",

        //     ]);
        //Denmark 	Copenhague CPH vol aller 
        DB::table('Escales')->insert([
            'date_escale'=>"2020-01-15",
            'heure_depart_escale' => "",
            'heure_arriver_escale' => "",
            // 'duree_escale' => "",
            'id_vol' =>'69',
            'code_aeroport_depart' =>"ALG",
            'code_aeroport_arriver_escale' => "CDG",
            'code_aeroport_depart_escale' => "CDG",
            'code_aeroport_arriver' => "CPH",
            

        ]);

        
    }
}
