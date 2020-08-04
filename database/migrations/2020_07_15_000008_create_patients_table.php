<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
           $table->id();
           $table->string('first_name');
           $table->string('last_name');
           $table->date('DOB');
           $table->string('sex');
           $table->string('marital_status');
           $table->string('phone_no');
           $table->string('location_address');
           $table->bigInteger('dependency_id')->unsigned();
           $table->timestamps();
           $table->foreign('dependency_id')->references('id')->on('dependencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
