<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{

    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author')->constrained('users');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('code');
            $table->decimal('star')->default(0);
            $table->string('phone')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->text('address');
            $table->text('description');
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
        Schema::dropIfExists('stations');
    }
}
