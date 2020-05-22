<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('reservations')){
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('email');
            $table->string('phone');
            $table->integer('table_id');
            $table->integer('guests');
            $table->string('view');
            $table->date('date');
            $table->time('starttime');
            $table->time('endtime');
            $table->timestamp('created_at')->nullable();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
