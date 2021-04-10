<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_no');
            $table->string('comerical_name',30);
            $table->string('material_name',30);
            $table->string('companies_name',50);
            $table->string('agent_name',50);
            $table->string('pharmacy_address',30);
            $table->date('report_date');
            $table->longText('notes_user');
            $table->string('district',20);
            $table->string('presented_report',50);
            $table->string('report_status',10);
            $table->binary('drug_picture');

            $table->unsignedInteger('type_report_no');
            $table->foreign('type_report_no')->references('type_report_no')->on('types_reports');

            $table->unsignedInteger('app_user_no');
            $table->foreign('app_user_no')->references('app_user_no')->on('app_user');

            $table->unsignedInteger('drug_no');
            $table->foreign('drug_no')->references('drug_no')->on('commercial_drug');

            $table->unsignedInteger('report_details_no');
            $table->foreign('report_details_no')->references('report_details_no')->on('report_details');

            $table->unsignedInteger('site_no');
            $table->foreign('site_no')->references('site_no')->on('site');

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
        Schema::dropIfExists('reports');
    }
}
