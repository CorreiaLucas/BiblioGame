<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJeuUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeu_utilisateur', function (Blueprint $table) {
            $table->id();
            $table-> unsignedBigInteger('jeu_id');
            $table->foreign('jeu_id')
                ->references ('id')
                ->on ('jeus')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table-> unsignedBigInteger('utilisateur_id');
            $table->foreign('utilisateur_id')
                ->references ('id')
                ->on ('utilisateurs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('jeu_utilisateur');
    }
}
