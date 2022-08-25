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
        Schema::create('driver_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('shipment_id')->unique();
            $table->string('Date of shipment');
            $table->string('Handler');
            $table->string('start_postcode');
            $table->string('end_postcode');
            $table->string('estimated_start_time');
            $table->string('estimated_end_time');
            $table->string('actual_start_time');
            $table->string('actual_end_time');
            $table->integer('estimated_miles');
            $table->integer('actual_miles_driven');
            $table->string('breaks_taken');
            $table->string('arrived_late');
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
        Schema::dropIfExists('driver_sheets');
    }
};
