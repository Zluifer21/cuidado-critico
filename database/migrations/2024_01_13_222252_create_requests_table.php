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
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_type_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->date('date');
            $table->time('time');
            $table->smallInteger('long');
            $table->text('obvservations');
            $table->enum('status',['open','approve','rejected']);
            $table->timestamps();
            $table->foreign('request_type_id')->references('id')->on('request_types');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requests');
    }
};
