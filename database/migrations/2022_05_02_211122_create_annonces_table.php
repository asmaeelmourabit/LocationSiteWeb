<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_objet');
            $table->foreign('id_objet')->references('id')->on('objets')->onDelete('cascade')->onDelete('cascade');
            $table->float('prix');
            $table->text('ville');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->boolean('premium')->default('0');
            $table->boolean('etat')->default('0');
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
        $table->dropForeign('annonces_id_objet_foreign');
        Schema::dropIfExists('annonces');
    }
}
