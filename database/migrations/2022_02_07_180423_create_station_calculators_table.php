<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationCalculatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_calculators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained('stations');
            $table->float('capacity');
            $table->tinyInteger('minute')->default(1); // dakikada harcanan enerji KW cinsinden
            $table->tinyInteger('kw')->default(5); // dakikada harcanan enerji KW cinsinden
            $table->float('price'); // dakika ücreti
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
        Schema::dropIfExists('station_calculators');
    }
}
