<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql3')->create('general', function ($table) {

            $table->string('Name');
            $table->id();
            $table->string('Email')->unique();
            $table->string('Website');
            $table->string('Pass');
            $table->string('Phone');
            $table->string('Institute');
            $table->string('Designation');
            $table->string('NID')->unique();
            $table->string('Location');
            $table->string('Zip');
            $table->string('City');
            $table->date('Birthdate');
            $table->string('Gender');
            $table->string('Picture');
            $table->string('isActive');
            $table->string('Hashes');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
