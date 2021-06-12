<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJeusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeus', function (Blueprint $table) {
            $table->id();
            $table -> text('synopsis');
            $table->text('titre');
            $table->text('image');
            $table-> unsignedBigInteger('entreprise_id');
            $table->foreign('entreprise_id')
                ->references ('id')
                ->on ('entreprises')
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
        Schema::dropIfExists('jeus');
    }
}