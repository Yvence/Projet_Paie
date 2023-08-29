<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('cin');
            $table->string('cnss');
            $table->integer('departement');
            $table->foreign('departement')->references('id')->on('departements');
            $table->integer('poste');
            $table->foreign('poste')->references('id')->on('postes');
            $table->integer('service');
            $table->foreign('service')->references('id')->on('services');
            $table->date('date_entre');
            $table->date('date_sortie');
            $table->string('salaire_base');
            $table->string('type_contrat');
            $table->string('banque');
            $table->string('rib');
            $table->string('nom_urg'); 
            $table->string('tel');
            $table->string('statmat');
            $table->string('enfant');
            $table->string('nom');
            $table->string('sexe');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('matricule',15);
            $table->date('date_naissance');
            $table->string('email');
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
        Schema::dropIfExists('employes');
    }
}
