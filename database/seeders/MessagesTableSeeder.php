<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seleziono dalla cartella config il file apartments_messages
        $messages = config('apartments_messages');

        foreach($messages as $message) {
            DB::table('messages')->insert($message);
        }
    }
}