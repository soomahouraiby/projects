<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmuggledDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Smuggled_drugs', function (Blueprint $table) {
            $table->id('Smuggled_drugs_no');
            $table->integer('batch_no');
            $table->string('commercial_name',30);
            $table->string('material_name',30);
            $table->string('companies_name',50);
            $table->string('agent_name',50);

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
        Schema::dropIfExists('report_details');
    }
}
