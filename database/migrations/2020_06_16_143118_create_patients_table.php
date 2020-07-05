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
           $table->string('First_Name');
           $table->string('Last_Name');
           $table->string('Gender');
           $table->integer('Age');
           $table->date('DOB');
           $table->string('Marital_Status');
           $table->integer('Phone_no');
           $table->integer('Relative_phone_no');
           $table->string('District');
           $table->string('Region');
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
        Schema::dropIfExists('patients');
    }
}
