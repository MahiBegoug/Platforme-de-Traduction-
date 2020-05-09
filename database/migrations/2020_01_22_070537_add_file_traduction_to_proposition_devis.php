<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFileTraductionToPropositionDevis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proposition_devis', function (Blueprint $table) {
            $table->string('file_traduction')->nullable();
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
            $table->dropColumn('file_traduction');
        });
    }
}
