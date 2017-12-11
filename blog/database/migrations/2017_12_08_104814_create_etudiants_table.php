<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('password')->unique();
            $table->integer('tel');
            $table->string('cin')->unique();
            $table->date('dbirth');
            $table->string('filiere')->nullable();
            $table->integer('promo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
