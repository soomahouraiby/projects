<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_company', function (Blueprint $table) {
            $table->id('agent_company_no');

            $table->unsignedInteger('company_no');
            $table->foreign('company_no')->references('company_no')->on('companies');

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
        Schema::dropIfExists('companies');
    }
}
