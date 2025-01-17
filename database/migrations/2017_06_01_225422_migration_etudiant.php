<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationEtudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Etudiant', function (Blueprint $table) {
            $table->increments('id_Etudiant');
            $table->string('nom', 100);
           $table->string('prenom', 100);
          $table->integer('CIN');
            $table->integer('carte_Etudiant');
            $table->string('email', 100);
            $table->boolean('active')->default(false);
            $table->string('confirmation_code')->nullable();
            $table->string('qr_code', 100);

            $table->integer('id_Niveau')->unsigned();
            $table->foreign('id_Niveau')->references('id_Niveau')->on('Niveau');

            $table->integer('id_Competences')->unsigned();
           $table->foreign('id_Competences')->references('id_Competences')->on('Competences');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //  Schema::table('Etudiant', function (Blueprint $table) {
          //  $table->dropForeign('Etudiant_id_Niveau_foreign');
            //$table->dropForeign('Etudiant_id_Competences_foreign');
        //});
        Schema::drop('Etudiant');
    }
}
