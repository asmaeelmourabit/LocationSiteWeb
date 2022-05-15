<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes_reservations', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('users')->onDelete('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_annonce');
            $table->foreign('id_annonce')->references('id')->on('annonces')->onDelete('cascade')->onDelete('cascade');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('etat');
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
        $table->dropForeign('demandes_reservations_id_annonces_foreign');
        $table->dropForeign('demandes_reservations_id_client_foreign');
        Schema::dropIfExists('demandes_reservations');
    }
}
