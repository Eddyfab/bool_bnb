<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seleziono dalla cartella config il file apartments_views
        $views = config('apartments_views');

        foreach($views as $view) {
            DB::table('views')->insert($view);
        }
    }
}