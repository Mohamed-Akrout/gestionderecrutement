<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->boolean('Ecole_de_lisence');
            $table->boolean('Ecole_Ingenieurie');
            $table->boolean('grade');
            $table->boolean('experience');
            $table->boolean('diplome');
            $table->boolean('competence_ingenieure');
            $table->boolean('competence_consultant');
            $table->boolean('ecole_master');
            $table->boolean('specialite_master');
            $table->boolean('demande_stg');
            $table->boolean('releve_note');

            $table->timestamps();


            $table->unsignedBigInteger('condidat_id');
            $table->foreign('condidat_id')
                ->references('id')
                ->on('condidats')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil');
    }
}
