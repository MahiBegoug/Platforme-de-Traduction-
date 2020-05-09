<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoutTraductionAndFileUrlToPropositionDevis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proposition_devis', function (Blueprint $table) {

            $table->integer('cout_traduction')->nullable();
            $table->string('file_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proposition_devis', function (Blueprint $table) {
            $table->dropColumn(['cout_traduction','file_url']);
        });
    }
}
