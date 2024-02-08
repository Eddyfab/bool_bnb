<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Creazione della tabella in relazione tra apartment e sponsor
        Schema::create('apartment_sponsor', function (Blueprint $table) {
            $table->tinyInteger('apartment_id')->unsigned();
            $table->foreign('apartment_id')->references('id')->on('apartments')->cascadeOnDelete();

            $table->tinyInteger('sponsor_id')->unsigned();
            $table->foreign('sponsor_id')->references('id')->on('sponsors')->cascadeOnDelete();

            $table->date('transaction_date');
            $table->date('end_sponsor_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartment_sponsor');
    }
};