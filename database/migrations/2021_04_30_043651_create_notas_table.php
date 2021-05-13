<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("ta1");
            $table->unsignedInteger("ta2");
            $table->unsignedInteger("ta3");
            $table->unsignedInteger("ta4");
            $table->unsignedInteger("emc");
            $table->unsignedInteger("ef");
        });

        Schema::table('notas', function (Blueprint $table) {
            $table->unsignedBigInteger("id_matricula");
            $table->foreign("id_matricula")->references("id")->on("matriculas")->cascadeOnDelete();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
