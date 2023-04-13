<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {

            $train = new Train();

            $train->azienda = getAgency();
            $train->stazione_di_partenza = getDepStation();
            $train->stazione_di_arrivo = getDepStation();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify('??################??');
            $train->numero_carrozze = $faker->numberBetween(1,15);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();


            function getAgency() {

                $agencies = ['Trenord', 'Trenitalia', 'Metronapoli', 'Trasporto Ferroviario Toscano', 'VentaRail'];
                $new_agency = array_rand(array_flip($agencies), 1);

                return $new_agency;
            }

            function getDepStation() {

                $dep_stations = ['Milano', 'Firenze', 'Torino', 'Napoli', 'Roma','Venezia', 'Trento', 'Perugia',];
                $new_dep_station = array_rand(array_flip($dep_stations), 1);

                return $new_dep_station;
            }

            function getArrStation($new_dep_station) {

                $arr_stations = ['Milano', 'Firenze', 'Torino', 'Napoli', 'Roma','Venezia', 'Trento', 'Perugia',];

                unset($arr_station[$new_dep_station]);

                $new_arr_station = array_rand(array_flip($arr_stations), 1);

                return $new_arr_station;
            }
        }
    }
}
