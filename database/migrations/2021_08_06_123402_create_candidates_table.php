<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('birthday');
            $table->string('residence');
            $table->string('verification_card');
            $table->integer('commune');
            $table->string('Electricity_bill')->nullable();
            $table->string('field');
            $table->string('Anem');
            $table->bigInteger('wassit');
            $table->string('Study_level');
            $table->string('Certificate')->nullable();
            $table->string('statu')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
