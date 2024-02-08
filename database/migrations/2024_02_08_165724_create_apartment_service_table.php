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
        // Creazione della tabella in relazione tra apartment e service
        Schema::create('apartment_service', function (Blueprint $table) {
            $table->bigInteger('apartment_id')->unsigned();
            $table->foreign('apartment_id')->references('id')->on('apartments')->cascadeOnDelete();

            $table->bigInteger('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartment_service');
    }
};