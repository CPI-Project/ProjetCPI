<?php

use Illuminate\Database\Seeder;

class BilletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();
   
        
        DB::table('Billets')->insert([
            
            'reference_reservation' => "FA222222",
            'num_client' =>2,
            ]);




    }
}
