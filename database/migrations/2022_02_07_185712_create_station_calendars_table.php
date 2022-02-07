<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_calendars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained('stations');
            $table->foreignId('author')->constrained('users'); // takvime ekleme yapan kişi
            $table->date('start_date');
            $table->date('finish_date');
            $table->string('start_hour');
            $table->string('end_hour');
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
        Schema::dropIfExists('station_calendars');
    }
}
