<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('name');
            $table->string('medias_type');
            $table->unsignedBigInteger('medias_id');
            $table->softDeletes();
            $table->timestamps();
            $table->index(['medias_type', 'medias_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};
