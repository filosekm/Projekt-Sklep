<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCzescSamochodowaTable extends Migration
{
    public function up()
    {
        Schema::create('czesc_samochodowa', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->string('producent');
            $table->string('numer_seryjny')->unique();
            $table->integer('ilosc');
            $table->string('kategoria');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('czesc_samochodowa');
    }
}
