<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seleziono dalla cartella config il file apartments_services_pivot
        $apartments_services = config('apartments_services_pivot');

        foreach($apartments_services as $apartment_service) {
            DB::table('apartment_service')->insert($apartment_service);
        }
    }
}