<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('movie_name')->comment('Название фильма')->nullable();
            $table->string('ratings')->comment('Оценки критиков')->nullable();
            $table->string('fees')->comment('Кассовые сборы')->nullable();
            $table->string('realese_date')->comment('Дата выхода')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie');
    }
}
