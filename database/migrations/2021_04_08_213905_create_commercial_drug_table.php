<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialDrugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_drug', function (Blueprint $table) {
            $table->id('drug_no');
            $table->string('drug_name',50);
            $table->string('register_no',10);
            $table->string('barcode',20);
            $table->string('drug_entrance',50);
            $table->longText('how_to_use');
            $table->string('drug_form',30);
            $table->longText('side_effects');
            $table->binary('drug_picture');

            $table->unsignedInteger('shipment_no');
            $table->foreign('shipment_no')->references('shipment_no')->on('shipments');

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
        Schema::dropIfExists('commercial_drug');
    }
}