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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('roe');
            $table->float('roi');
            $table->float('ros');
            $table->float('rod');
            $table->float('rotazione_impieghi');
            $table->float('incidenza_gestione_nn_caratteristica');
            $table->float('leverage');
            $table->float('leva_finanziaria');
            $table->float('ebitda');
            $table->float('orizzonte_temporale');
            $table->float('proiezione_vendite');
            $table->float('proiezione_utili');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
