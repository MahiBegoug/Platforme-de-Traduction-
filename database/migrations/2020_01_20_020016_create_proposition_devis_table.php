<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropositionDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposition_devis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('prix');
            $table->unsignedBigInteger('demande_devis_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('demande_devis_id')
                    ->references('id')->on('demande_devis')
                    ->onDelete('cascade');

            $table->foreign('user_id')
                   ->references('id')->on('users')
                   ->onDelete('cascade');
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
        Schema::dropIfExists('proposition_devis');
    }
}
