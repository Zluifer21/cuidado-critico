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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dni');
            $table->integer('identity_type_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone');
            $table->string('title');
            $table->timestamps();
            $table->foreign('identity_type_id')->references('id')->on('identity_types');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('employees');
    }
};
