<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::connection('mysql')->create('jobs', function ($table) {

            $table->id();
            $table->integer('Client');
            $table->string('Company');
            $table->string('Website');
            $table->timestamp('PostDate')->useCurrent();
            $table->timestamp('DeadLine')->useCurrent();
            $table->timestamp('Deletion')->useCurrent();
            $table->string('Title');
            $table->string('Location');
            $table->string('Salary');
            $table->string('Type');
            $table->string('Term');
            $table->string('Position');
            $table->string('Exp');
            $table->string('Details');
            $table->string('Logo');
            $table->integer('views');

        }); 

        Schema::connection('mysql')->create('sessions', function ($table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity')->index();
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
