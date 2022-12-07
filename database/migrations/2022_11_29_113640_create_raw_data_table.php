<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_data', function (Blueprint $table) {
            $table->id();

            $table->string('serial_number',15);
            $table->timestamp('log_dt');
            $table->float('room_temp_user');
            $table->float('room_temp_current');
            $table->float('room_pressure_current');
            $table->float('room_humidity_current');
            $table->float('fin_temp_user');
            $table->float('fin_temp_current');
            $table->float('heater_temp_current');
            $table->float('ac_volt_current');

            $table->timestamps();

            $table->boolean('is_processed')->nullable();

            $table->unique(['serial_number', 'log_dt']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raw_data');
    }
}
