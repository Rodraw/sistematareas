<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignadas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('becario_id');
            $table->unsignedBigInteger('tareas_id');
            $table->string('name_std')->nullable();
            $table->string('estatus')->default('0');
            $table->date('token_asignada');
            $table->date('token_returned');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('becario_id')->references('id')->on('becarios');
            $table->foreign('tareas_id')->references('id')->on('tareas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignadas');
    }
}
