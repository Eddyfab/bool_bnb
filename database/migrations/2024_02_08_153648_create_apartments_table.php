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
        // Creazione della tabella apartments
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->text('image');
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->tinyInteger('beds')->unsigned();
            $table->smallInteger('square_meters')->unsigned();
            $table->string('address', 255);
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->boolean('is_visibled');
            $table->boolean('is_sponsored');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};