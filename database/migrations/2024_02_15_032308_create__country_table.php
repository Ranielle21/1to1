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
        Schema::create('_country', function (Blueprint $table) {
            $table->id();
            $table->string('Continent');
            $table->string('Country_name');
            $table->string('Capital');
            $table->bigInteger('students_id')->unsigned();
            $table->foreign('students_id')->references('id')->on('Students')->onDelete('cascade');
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
        Schema::dropIfExists('_country');
    }
};
