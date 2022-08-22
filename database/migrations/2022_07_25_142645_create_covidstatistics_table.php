<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidstatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covidstatistics', function (Blueprint $table) {
            $table->id();
            $table->string('Country');
            $table->integer('TotalCases')->nullable();
            $table->integer('TotalDeaths')->nullable();
            $table->string('TotalRecovered');
            $table->string('ActiveCases');
            $table->integer('SeriousCritical')->nullable();
            $table->integer('TotalTests')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covidstatistics');
    }
}
