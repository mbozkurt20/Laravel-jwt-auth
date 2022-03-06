<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // randevu alan kişi
            $table->bigInteger('station_device_id')->unsigned();
            $table->date('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->float('price');
            $table->string('price_type')->default('₺');
            $table->float('star')->default(0);
            $table->text('comment')->nullable();
            $table->enum('status', ['planned', 'cancel', 'done']);// planlanıyor - iptal - tamamlandı
            $table->text('reason')->nullable(); // iptal olursa sebebi
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
        Schema::dropIfExists('appointments');
    }
}
