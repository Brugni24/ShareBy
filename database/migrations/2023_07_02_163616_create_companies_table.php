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
            $table->json('totale_ricavi');
            $table->json('ebitda');
            $table->json('utile_netto');
            $table->json('totale_attivita');
            $table->json('patrimonio_netto');
            $table->json('posizione_finanziaria');
            $table->json('ebitda_vendite');
            $table->json('ros');
            $table->json('roa');
            $table->json('roe');
            $table->json('debt_equity');
            $table->json('ebitda_debiti');
            $table->json('rotazione_capitale_investito');
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
