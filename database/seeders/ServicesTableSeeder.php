<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seleziono dalla cartella config il file apartments_services
        $services = config('apartments_services');

        foreach($services as $service) {
            DB::table('services')->insert($service);
        }
    }
}