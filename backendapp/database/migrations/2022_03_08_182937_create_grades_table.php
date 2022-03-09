<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('grade');
            $table->integer('experience');
            $table->string('diplome');
            $table->string('ecole_lisence');
            $table->string('ecole_ingenieurie');
            $table->string('ecole_master');
            $table->string('competence_ingenieure');
            $table->string('competence_consultant');
            $table->timestamps();


            $table->unsignedBigInteger('profil_id');
            $table->foreign('profil_id')
                ->references('id')
                ->on('profil')
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
        Schema::dropIfExists('grades');
    }
}
