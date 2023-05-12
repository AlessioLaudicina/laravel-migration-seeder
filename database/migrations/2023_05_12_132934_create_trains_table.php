<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 20);
            $table->string('stazione_partenza', 30);
            $table->string('stazione_arrivo', 0);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->unsignedTinyInteger('numero_carrozze');
            $table->unsignedTinyInteger('codice_treno');
            $table->boolean('in_orario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
