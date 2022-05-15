<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('users')->onDelete('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_annonce');
            $table->foreign('id_annonce')->references('id')->on('annonces')->onDelete('cascade')->onDelete('cascade');
            $table->integer('notes');
            $table->String('commentaire');

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
        $table->dropForeign('evaluation_clients_id_client_foreign');
        $table->dropForeign('evaluation_clients_id_annonce_foreign');
        Schema::dropIfExists('evaluation_clients');
    }
}
