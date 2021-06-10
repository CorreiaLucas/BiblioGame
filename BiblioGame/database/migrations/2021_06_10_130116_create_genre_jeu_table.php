<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreJeuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_jeu', function (Blueprint $table) {
            $table->id();
            $table-> unsignedBigInteger('genre_id');
            $table->foreign('genre_id')
                ->references ('id')
                ->on ('genres')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table-> unsignedBigInteger('jeu_id');
            $table->foreign('jeu_id')
                ->references ('id')
                ->on ('jeus')
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
        Schema::dropIfExists('genre_jeu');
    }
}
