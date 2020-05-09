<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandeDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_devis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_traduction');
            $table->string('langue_source');
            $table->string('langue_destination');
            $table->text('description');
            $table->unsignedBigInteger('user_id');

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
        Schema::dropIfExists('demande_devis');
    }
}
