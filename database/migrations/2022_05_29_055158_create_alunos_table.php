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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('portugues');
            $table->integer('matematica');
            $table->integer('biologia');
            $table->integer('fisica');
            $table->integer('quimica');
            $table->integer('artes');
            $table->integer('educacaofisica');
            $table->integer('ingles');
            $table->integer('filosofia');
            $table->integer('geografia');
            $table->integer('historia');
            $table->integer('sociologia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
