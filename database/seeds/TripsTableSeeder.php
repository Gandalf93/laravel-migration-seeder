<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        

        for($i = 0; $i < 100; $i++){

            // creo nuova istanza
           $newTrip = new Trip();

           // popolamento dati falsi
           $newTrip-> title='vacanza invernale romantica';
           $newTrip-> departure_place='Olbia';
           $newTrip-> destination='Parigi';
           
           $newTrip-> departure_date='2021/12/20';
           $newTrip-> permanence_days=10;
           $newTrip-> number_people=2;
           $newTrip-> transport='Aereo';
           $newTrip-> details='Stanza per fumatori e pet-friendly. Pasti non inclusi.';
           $newTrip-> price=1500.00;

           // salvo la tabella
           $newTrip-> save();

              
        }
}
}


