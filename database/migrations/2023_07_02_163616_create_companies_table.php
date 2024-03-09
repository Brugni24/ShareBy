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
            $table->string('symbol');
            $table->json('roi');
            $table->json('roa');
            $table->json('roe');
            $table->json('ros');
            $table->json('rod');
            $table->json('rotazione_impieghi');
            $table->json('incidenza_gestione_nn_caratteristica');
            $table->json('leverage');
            $table->json('ebitda');
            $table->timestamps();
        });

        DB::statement(
            'ALTER TABLE companies ADD FULLTEXT fulltext_index(name)'
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
