<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
	        $table->geometry('to');
	        $table->geometry('from');
            $table->foreignId('customer_id')->references('id')->on('customers');
	        $table->foreignId('location_id')->references('id')->on('locations');
            $table->string('postcode');
            $table->integer('order_id');
	        $table->boolean('received');
            $table->text('reason');
            $table->decimal('cost');
	        $table->datetime('time');
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
        Schema::dropIfExists('deliveries');
    }
}
