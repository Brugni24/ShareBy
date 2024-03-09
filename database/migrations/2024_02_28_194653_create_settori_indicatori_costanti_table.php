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
        Schema::create('settori_indicatori_costanti', function (Blueprint $table) {
            $table->string('settore');
            $table->json('varianza_roe');
            $table->json('varianza_roi');
            $table->json('varianza_ros');
            $table->json('varianza_roa');
            $table->json('varianza_rod');
            $table->json('varianza_ebitda');
            $table->json('varianza_ebitdaDebiti');
            $table->json('varianza_ebitdaVendite');
            $table->json('media_roe');
            $table->json('media_roi');
            $table->json('media_ros');
            $table->json('media_roa');
            $table->json('media_rod');
            $table->json('media_ebitda');
            $table->json('media_ebitdaDebiti');
            $table->json('media_ebitdaVendite');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settori_indicatori_costanti');
    }
};
