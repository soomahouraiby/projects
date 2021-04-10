<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_details', function (Blueprint $table) {
            $table->id('report_details_no');
            $table->string('type_drug',30);
            $table->integer('batch_number');
            $table->string('how_get_drug',50);
            $table->string('form_drug',30);
            $table->date('date_start_use');
            $table->date('expiration_date');
            $table->longText('dose');
            $table->string('status_stop_use',5);
            $table->date('date_stop_use');
            $table->longText('notes');

            $table->unsignedInteger('drug_user_no');
            $table->foreign('drug_user_no')->references('drug_user_no')->on('drug_user');

            $table->unsignedInteger('o_drug_no');
            $table->foreign('o_drug_no')->references('o_drug_no')->on('other_drug');

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
