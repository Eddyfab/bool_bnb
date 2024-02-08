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
        // Aggiornamento della tabella views
        Schema::table('views', function(Blueprint $table) {
            $table->bigInteger('apartment_id')->unsigned()->after('id');
            $table->foreign('apartment_id')->references('id')->on('apartments')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('views', function(Blueprint $table) {
            $table->dropForeign(['apartment_id']);
            $table->dropColumn(['apartment_id']);
        });
    }
};