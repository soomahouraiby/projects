<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id('shipment_no');
            $table->string('batch_number',10);
            $table->date('production_date');
            $table->date('expiry_date');
            $table->integer('quantity');
            $table->string('shipment_drawn',9);
            $table->boolean('exception')->default('1');
            $table->integer('price');

            $table->unsignedInteger('agent_no');
            $table->foreign('agent_no')->references('agent_no')->on('agents');

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
        Schema::dropIfExists('shipments');
    }
}
