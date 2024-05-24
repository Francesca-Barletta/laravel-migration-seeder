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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 255);
            $table->string('stazione_di_partenza', 255);
            $table->string('stazione_di_arrivo', 255);
            $table->date('data_di_partenza');
            $table->timestamp('orario_di_partenza');
            $table->timestamp('orario_di_arrivo');
            $table->smallinteger('codice_treno', 4);
            $table->tinyinteger('numero_carrozze',4);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
