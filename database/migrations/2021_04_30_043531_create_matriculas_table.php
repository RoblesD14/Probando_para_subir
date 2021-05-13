<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->string("semestre",6);
            $table->integer("id_estudiante");
        });

        Schema::table('matriculas', function (Blueprint $table) {
            $table->unsignedBigInteger("id_curso");
            $table->foreign("id_curso")->references("id")->on("cursos")->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
