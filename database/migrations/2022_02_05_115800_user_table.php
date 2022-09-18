<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('general', function ($table) {

            $table->string('Name');
            $table->id();
            $table->string('Email')->unique();
            $table->string('Pass');
            $table->string('Phone');
            $table->string('Institute');
            $table->string('Designation');
            $table->string('Field');
            $table->date('Birthdate');
            $table->string('Gender');
            $table->string('Picture');
            $table->string('isActive');
            $table->string('Hashes');
          
        });

        Schema::connection('mysql2')->create('features', function ($table) {

            $table->integer('Ref')->primary();
            $table->string('Portfolio');
            $table->text('Social');
            $table->string('University');
            $table->string('CGPA');
            $table->string('City');
            $table->string('Skills');
            $table->string('Expertise');
            $table->string('Language');
            $table->text('Resume');
            $table->text('Cover');
            $table->string('Experience');
            $table->text('Bio');
            $table->string('Certificates');
          
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
