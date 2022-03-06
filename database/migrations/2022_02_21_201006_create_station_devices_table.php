<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_devices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained('stations');
            $table->foreignId('author')->constrained('users');
            $table->string('code');
            $table->float('capacity');
            $table->tinyInteger('minute')->default(1); // dakikada harcanan enerji KW cinsinden
            $table->tinyInteger('kw')->default(5); // dakikada harcanan enerji KW cinsinden
            $table->float('price'); // dakika ücreti
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('station_devices');
    }
}
