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
            $table->string('commercial_name',30);
            $table->string('material_name',30);
            $table->string('companies_name',50);
            $table->string('agent_name',50);
            $table->string('pharmacy_address',30);
            $table->date('report_date');
            $table->longText('notes_user');
            $table->string('district',20);
            $table->string('authors_name',50);
            $table->string('authors_phone',9);
            $table->string('authors_character',30);
            $table->integer('authors_age');
            $table->binary('drug_picture');

            $table->unsignedInteger('type_report_no');
            $table->foreign('type_report_no')->references('type_report_no')->on('types_reports');

            $table->unsignedInteger('smuggled_drug_no');
            $table->foreign('smuggled_drug_no')->references('smuggled_drug_no')->on('smuggled_drug');

            $table->unsignedInteger('drug_no');
            $table->foreign('drug_no')->references('drug_no')->on('commercial_drug');

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
