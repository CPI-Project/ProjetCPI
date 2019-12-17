<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(VillesTableSeeder::class);
        $this->call(AeroportsTableSeeder::class);
        $this->call(AvionsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(SiegesTableSeeder::class);
        $this->call(BagagesTableSeeder::class);
        $this->call(AvionsTableSeeder::class);
        $this->call(VolsTableSeeder::class);
        $this->call(Carte_creditsTableSeeder::class);
        $this->call(PaiementsTableSeeder::class);
        $this->call(EnregistrementsTableSeeder::class); 
        $this->call(BilletsTableSeeder::class);
       $this->call(ReservationsTableSeeder::class);
       $this->call(Reservation_clientsTableSeeder::class);
       $this->call(Reservation_volsTableSeeder::class);
      
       $this->call(PersonnelsTableSeeder::class);
  
    }
}
