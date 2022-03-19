<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationDeviceCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_device_calendars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_device_id')->constrained('station_devices');
            $table->foreignId('author')->constrained('users'); // takvime ekleme yapan kişi
            $table->string('start_date');
            $table->string('end_date');
            $table->string('start_time');
            $table->string('end_time');
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
        Schema::dropIfExists('station_device_calendars');
    }
}
